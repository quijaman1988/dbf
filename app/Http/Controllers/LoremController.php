<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lipsum;

class LoremController extends Controller {

  public function getIndex () {
    return view ('lorem');

  }

  public function postShow (Request $request) {

  $par = Lipsum::headers()->long()->html($request->input('par'));

    return view ('/loremgenerate')->with('paragraphs',$par);
  }
}
