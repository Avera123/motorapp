<?php

use Illuminate\Http\Request;

use \App\User;
use \App\Brand;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['api', 'cors'])->post('/registrar', function (Request $request) {

    $user_create = $request->all();
    $user_in = User::where('email', $request["email"])->first();

    $userid = $user_in["id"];

    $response = [
        "type" => "error",
        "is_error" => true,
        "message" => "No se realizó ninguna opción",
        "code_user" => "xxxxxx"
    ];

    // if(isset($user_in)){
        if($user_create["email"] == $user_in["email"]){
            $response = [
                "type" => "success",
                "is_error" => true,
                "message" => "Ya existe un usuario con estos datos",
                "code_user" => get5Code2($userid)
            ];
        }else{
            $request["password"] = Hash::make($user_create["password"]);
            $user = User::create($request->all());
            
            $response = [
                "type" => "success",
                "is_error" => false,
                "message" => "Datos guardados correctamente",
                "code_user" => get5Code2($user["id"])
            ];
        }
    
        // dd(get5Code(5));
    
        // }
    return $response;

});

function get5Code($code){
    if(strlen($code) < 5){
        printf('%05d', $code);
    }
    return str_pad($code, 5, '0', STR_PAD_LEFT);
}

function get5Code2($code){

    $new_Code = $code;

    if(strlen($code) < 5){
        $new_Code = str_pad($code, 5, '0', STR_PAD_LEFT);
    }
    return $new_Code;
}

Route::middleware(['api', 'cors'])->get('/brands', function (Request $request) {
    $brands = Brand::get();

    return $brands;
});
