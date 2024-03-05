<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\signup;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/nbtf',function(Request $request) {
   
	try
	{
   
  $username=$request["username"];
  $password=$request["password"];
      $ser = signup::where('username', $username)->first();
    //   $ser = signup::where('password', $password)->first();
  
      if($ser==null)
      {
          throw new Exception('id not found');
      }

      $ser["status"]="ok";

      return response()->json($ser, 200);
  }
  catch(\Exception $k) {
      $error=array("status"=>"failed","error"=>$k->getMessage());
      return response()->json($error, 200);
  }
});
Route::post('/nbtf',function(Request $request) {
   
	try
	{
   
  $username=$request["username"];
  $password=$request["password"];
      $ser = signup::where('username', $username)->where('password', $password)->first();
    //   $ser = signup::where('password', $password)->first();
  
      if($ser==null)
      {
          throw new Exception('id not found');
      }

      $ser["status"]="ok";

      return response()->json($ser, 200);
  }
  catch(\Exception $k) {
      $error=array("status"=>"failed","error"=>$k->getMessage());
      return response()->json($error, 200);
  }
});
Route::get('/finds', function (Request $request){
	try
	{
		// $id=$request["id"];
		$emp = signup::all();
    
		if($emp==null)
		{
			throw new Exception('Id Not Found');
		}

		$emp["status"]="ok";

		return response()->json($emp, 200);
	}
	catch(\Exception $k) {
		$error=array("status"=>"failed","error"=>$k->getMessage());
		return response()->json($error, 200);
	}
});


