<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lipsum;
use  Illuminate\Support\MessageBag;

class LoremController extends Controller {

  public function getIndex () {
    return view ('lorem');

  }

  public function postShow (Request $request) {

  $this->validate ($request, [
    'paragraph' => 'required|integer',
  ]);



    if ($request->input('header') == true)
      $par = Lipsum::headers()->long()->html($request->input('paragraph'));
    else
    $par = Lipsum::long()->html($request->input('paragraph'));

    return view ('/loremgenerate')->with('paragraphs',$par);
  }
}
