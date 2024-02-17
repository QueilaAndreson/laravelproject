<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Food_model extends Model
{
    use HasFactory;
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
}
