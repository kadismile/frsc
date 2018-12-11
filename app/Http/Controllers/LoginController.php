<?php

namespace App\Http\Controllers;

use App\Jobs\AdminRegJob;
use App\Jobs\UserRegJob;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\Jobs\UserMailJob;
use Illuminate\Support\Facades\Mail;
use Sentinel;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();


    }


    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $email = $user->email;
        $theUser = User::byEmail($email);
            if($theUser) {
                return redirect('/')->with(['error'=> 'U have already Registered']);
            }else{
                $Allrequest = [
                    //'password' => 'confirmed | required | min:6 | max:16',
                    'email' =>  "$email",
                    'first_name' => '',
                    'last_name' => '',
                    'phone' => '',
                    'sex' => '',
                    'state' => '',
                    'password' => '111222',
                ];
                Sentinel::registerAndActivate($Allrequest); // to register the user
            }






        UserMailJob::dispatch($email)->delay(now()->addSeconds(5));
        /*Mail::send('emails.registrationMail', compact('email'),
            function($message) use ($email){
                $message->to($email);
                $message->subject('Welcome To Car Reg');
            }
        );*/

        return redirect('/')->with(['success'=> 'Success Check Your Email For More Information']);
    }


    public function register($email){
        //check if email passed is in DB
        $user = User::byEmail($email);
        if(!$user){
            //abort(404);
            return redirect('/')->with(['error'=> 'oops Something went wrong']);
        }
        return view('users.register', compact('user'));

        //Sentinel::update($user, array('ref_id'=> $user->id.mt_rand(0, 10000), 'referer_id' =>$refUserId));
    }


    public function postRegistration(Request $request){


        $user_id = $request->user_id;
        $user = Sentinel::findById($user_id);
        $email = $request->email;
        $first_name =$request->first_name;
        $last_name =$request->last_name;
        $state =$request->state;
        $sex =$request->sex;
        $phone = $request->phone;
        $dob = $request->dob;
        $occupation = $request->occupation;
        $address = $request->address;
        $vehicle_type = $request->vehicle_type;

        $role = Sentinel::findRoleByName('Subscribers');
        $role->users()->attach($user);

        Sentinel::update($user, [

            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'sex' => $sex,
            'state'=> $state,
            'phone'=>$phone,
            'dob'=>$dob,
            'occupation'=>$occupation,
            'address'=> $address,
            'vehicle_type'=> $vehicle_type,

            ]
        );

        UserRegJob::dispatch($user)->delay(now()->addSeconds(5));
        AdminRegJob::dispatch($user)->delay(now()->addSeconds(5));
        /*Mail::send('emails.admin.registrationMail', compact('user'),
            function($message) use ($email){
                $message->to("brianking319@gmail.com");
                $message->subject('New User Registration');
            }
        );*/
        return redirect('/')->with(['success'=> 'Your Registration is Complete']);

    }
}
