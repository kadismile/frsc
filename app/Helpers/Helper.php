<?php

namespace App\Helpers;
use Sentinel;
use DB;
use Request;
use App\User;
use App\Wallet;

class Helper
{


    public static function get_user(){
        $user = Sentinel::getUser();
        return $user;
    }

    public static function username(){
        if(Sentinel::check()){
            return  $user_name = Sentinel::getUser()->first_name;
        }
    }

    ######################ACCOUNTS#######################


    public static function registeredUsers(){
        $role = Sentinel::findRoleByName('Subscribers');
        $user = $role->users()->with('roles')->get()->count();
        return $user;
    }


    public static function approvedApplications(){
        $query = DB::table('users')->where([
            ['approve', '=', 1]
        ])->get()->count();
        return $query;
    }

    public static function rejectedApplications(){
        $query = DB::table('users')->where([
            ['approve', '=', 2]
        ])->get()->count();
        return $query;
    }

    public static function openApplications(){
        $role = Sentinel::findRoleByName('Subscribers');
        $user = $role->users()->with('roles')->where([
            ['approve', '=', 0]
        ])->get()->count();;
        return $user;

    }






}