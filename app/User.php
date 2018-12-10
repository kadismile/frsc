<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Sentinel;


class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;
    protected $fillable = [
        'avatar', 'email', 'first_name','last_name', 'phone', 'username', 'sex',
        'state','password','address', 'longitude', 'latitude', 'occupation',
        'attachments', 'application_type', 'vehicle_type', 'dob', 'approve', 'comments', 'google_id', 'avatar_original'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];



    public function usercategories(){
        return $this->hasOne('App\Usercategory');
    }

    public function wallets(){
        return $this->hasMany('App\Wallet');
    }

    public static function ByEmail($email){
        return static::whereEmail($email)->first();
    }
}