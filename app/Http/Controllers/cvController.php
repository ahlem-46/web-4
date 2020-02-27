<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Ahlem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class cvController extends Controller
{
   public function  index(){
<<<<<<< Updated upstream
   	$cvs=Ahlem::all();
    return view('cv.index')->with("cv",$cvs);
=======
      $listcv=Ahlem::all();
      return view('cv.index',['cvs'=>$listcv]);
>>>>>>> Stashed changes
   }

public function  create(){
   return view('cv.create');
}
public function   store(Request $request ){
  $cover = $request->file('image');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

   $cv =new Ahlem();

   $cv->titre = $request->input('titre');
   $cv->presentation = $request->input('presentation');
   $cv->email = $request->input('email');
   //$cv->image = $request->image;
   $cv->image = $cover->getFilename().'.'.$extension;

    
   //Storage::put('image/file.png', $request->file('image'));
   $cv->save();
   // dd($request);
}
public function  edit(){}
public function  update(){}
public function  destrov(){}





}
