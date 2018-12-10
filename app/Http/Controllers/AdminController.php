<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
     public function dashboard(){
         $role = Sentinel::findRoleBySlug('subscribers');
         $users = $role->users()->with('roles')->paginate(20);
         return view('admin.index', compact('users'));
     }

    public function login(){
        return view('admin.login');
    }

    public function postLogin(Request $request){
        try{
            if(Sentinel::authenticate($request->all())){
                $user = Sentinel::getUser();
                return redirect()->route('dashboard', [$user]);
            } else{
                return redirect()->back()->with(['error' => 'Wrong Credentials.']);
            }
        }catch (ThrottlingException $e){
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "You have been barn for $delay seconds."]);
        }catch(NotActivatedException $e){
            return redirect()->back()->with(['error' => "Your Account is not activate!!!"]);
        }
    }


    public function openApplications(){
        $role = Sentinel::findRoleByName('Subscribers');
        $users = $role->users()->with('roles')->where([
            ['approve', '=', 0]
        ])->get();
        return view('admin.openApplication', compact('users'));
    }

    public function rejectedApplications(){

        $users = DB::table('users')
            ->where('approve', '=', 2)
            ->get();
        return view('admin.rejectedApplication', compact('users'));
       // return $users;
    }


    public function approvedApplications(){
        $users = DB::table('users')
            ->where('approve', '=', 1)
            ->get();
        return view('admin.approvedApplication', compact('users'));
    }


    //edit the user
     public function editUser($id){
         $user = User::find($id);
         return view('admin.edit',compact('user', 'id', 'user'));
     }

     public function update($id){
            return $id . "its working";
     }


     //approve application
    public function approve(Request $request, $id){
        $comments = $request->comments;
        $user= User::find($id);
        Sentinel::update($user, ['approve' => 1, 'comments'=>$comments]);

        Mail::send('emails.Admin.successMail', compact('user','comments'),
            function($message) use ($user){
                $message->to($user->email);
                $message->subject('Congratulations');
            }
        );
        return redirect('approved-applications')->with(['success'=> 'Registration Has been Rejected ']);
    }

    //reject application
    public function disApprove(Request $request, $id){
        $user= User::find($id);
        $comments = $request->comments;
        Sentinel::update($user, ['approve' => 2, 'comments'=>$comments]);

        //send  mail to user
        Mail::send('emails.Admin.errorMail', compact('user', 'comments'),
            function($message) use ($user){
                $message->to($user->email);
                $message->subject('We are sorry');
            }
        );
        return redirect('rejected-applications')->with(['success'=> 'Registration Has been Rejected ']);
    }

}
