<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Food_model extends Model
{
    use HasFactory;
    protected $table ='vegpizza';
    function insert_users($insert)
    {
        DB::table('users')->insert($insert);
        return true;
    }
    function get_users_by_email_and_password($email, $password)
    {
        $results = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        return $results;
    }
    function insert_veg_cart($insert,$vegpizzaId,$vegpizzasessionId)
    {
        // $checkUserCartDetails = DB::table('users_cart')
        //     ->where('user_id',$vegpizzasessionId)
        //     ->where('veg_id',$vegpizzaId)
        //     ->first();

        // // return $checkUserCartDetails;
        // if($checkUserCartDetails==true)
        // {
        //     return 0;
        // }
        // else
        // {
        //     $usersCartInserted = DB::table('users_cart')
        //         ->insert($insert);
        //     return 1;
        // }
        
    }
    function show_added_cart($vegsessionId)
    {
            $checkUserCartDetails = DB::table('users_cart')
        //    ->select('veg_id')
            ->where('user_id',$vegsessionId)->get();

            return $checkUserCartDetails;
    }
    function show_likes_button($vegsessionId)
    {
        $checkUserlikeDetails = DB::table('users_likes')
        // ->select('veg_likes_id')
        ->where('user_likes_id',$vegsessionId)->get();
        return $checkUserlikeDetails;
    }
}
