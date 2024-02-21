<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food_model;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function register_page()
    {
        return view('register');
    }
    function login_page()
    {
        return view('login');
    }
    function register_post(Request $request)
    {
        $username = $request->post('name');
        echo $username;
        $userpassword = $request->post('password');
        $useremail = $request->post('email');



        $insert = [
            'email' => $useremail,
            'password' => $userpassword,
            'name' => $username,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $FoodModal = new Food_model;
        $FoodModal->insert_users($insert);
        return redirect('/');
    }
    function login_post(Request $request)  //jhfkf
    {
        // $username="selvi";
        $useremail = $request->post('user_email');
        $userpassword = $request->post('user_password');
        $FoodModal = new Food_model;
        $result = $FoodModal->get_users_by_email_and_password($useremail, $userpassword);

        if (isset($result->id)) {
            $response = array(
                "status" => "success",
                "user_name" => $result->name
            );
            session(['user_id' => $result->id, 'user_name' => $result->name]);
            // session(['user_name'=> $result->name]);  // session(['user_name' => 'value']);
            //sesSSession AreA
        } else {
            $response = array(
                
                "status" => "failure"
            );
        }
        echo json_encode($response);
        // echo $username;
        // print_r($result);
    }
    function foodcard_home_page()
    {

        if (session('user_id') == "")
            return redirect('/');

        return view('foodcard_home_page');
    }
    function vegpizza()
    {
        $data['vegpizza_items']=Food_model::all();
        $vegsessionId = session("user_id");
       $FoodModal = new Food_model;
        $responses=$FoodModal -> show_added_cart($vegsessionId);
        $alreadyaddedVegID = [];
        foreach($responses as $response)
        {
            if($response->veg_id!="")
            {
                array_push($alreadyaddedVegID,$response->veg_id);
            }
            // echo $response->veg_id;
        }
        
        
        $data['alreadyaddedids']= $alreadyaddedVegID;
        return view('vegpizza',$data);
    }
    public function addVegCartItems(Request $request)
    {
        $vegpizzaId = $request->vegpizzaId;
        $vegpizzasessionId = $request->vegpizzasessionId;
        // return $vegpizzaId;
        // return $vegpizzasessionId;
        $insert = [
            'veg_id' => $vegpizzaId,
            'user_id' => $vegpizzasessionId,
        ];
        // $FoodModal = new Food_model;
        // $FoodModal -> insert_veg_cart($insert,$vegpizzaId,$vegpizzasessionId);
        $checkUserCartDetails = DB::table('users_cart')
            ->where('user_id',$vegpizzasessionId)
            ->where('veg_id',$vegpizzaId)
            ->first();

        // return $checkUserCartDetails;
        if($checkUserCartDetails==true)
        {
            return "Already exist";
        }
        else
        {
            $usersCartInserted = DB::table('users_cart')
                ->insert($insert);
            return "Item Added";
        }
        
    }
    public function cartButtons(Request $request)
    {
        // $vegpizzaId = $request->vegpizzaId;
        $vegsessionId = $request->vegpizzasessionId;
        $FoodModal = new Food_model;
        $response=$FoodModal -> show_added_cart($vegsessionId);

        // echo json_encode($response);
        return $response;
    }
    public function addVegLikes(Request $request)
    {
        $vegpizzaId = $request->vegpizzaId;
        $vegpizzasessionId = $request->vegpizzasessionId;
        // return $vegpizzaId;
        // return $vegpizzasessionId;
        $insert = [
            'veg_likes_id' => $vegpizzaId,
            'user_likes_id' => $vegpizzasessionId,
        ];
        $checkUserLikeDetails = DB::table('users_likes')
            ->where('user_likes_id',$vegpizzasessionId)
            ->where('veg_likes_id',$vegpizzaId)
            ->first();

        // // return $checkUserLikeDetails;
        if($checkUserLikeDetails==true)
        {
            return "Already exist";
        }
        else
        {
            DB::table('users_likes')->insert($insert);
            return "Item Added";
        }

    }
}
