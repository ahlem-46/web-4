<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ahlem;


class cvController extends Controller
{
   public function  index(){}

public function  create(){
   return view('cv.create');
}
public function   store(Request $request ){
   $cv =new Ahlem();

   $cv->titre = $request->input('titre');
   $cv->presentation = $request->input('presentation');
   $cv->email = $request->input('email');
   $cv->image = $request->input('image');

   $cv->save();

}
public function  edit(){}
public function  update(){}
public function  destrov(){}





}
