<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lipsum;
use  Illuminate\Support\MessageBag;

use Faker\Factory as Faker;


class UsersController extends Controller {

  public function getIndex () {
    return view ('users');

  }

  public function postShow (Request $request) {

  $this->validate ($request, [
    'users' => 'required|integer',
  ]);

  $num = $request->input('users');

if (isset($_POST['desc']))
  $desc = true;
else {
  $desc = false;
}
  $faker = Faker::create();

    return view ('usersgenerate')->with ('faker',$faker)->with('num',$num)
    ->with('desc',$desc);



  }
}
