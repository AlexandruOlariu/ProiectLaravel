<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

use App\Produs;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Storage;

use File;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    
        public function login()
	{
         
            return view('login');
	}
        public function logout()
	{
         
            return view('index');
	}
       
        public function admin() {
            return view('view');
        }
        public function p_video()
	{
         
            return view('p_video');
	}public function p_sunet()
	{
         
            return view('p_sunet');
	}public function p_baza()
	{
         
            return view('p_baza');
	}public function ram()
	{
         
            return view('ram');
	}public function procesoare()
	{
         
            return view('procesoare');
	}public function ssd()
	{
         
            return view('ssd');
	}public function hdd()
	{
         
            return view('hdd');
	}public function carcase()
	{
         
           return view('carcase');
	}public function surse()
	{
         
            return view('surse');
	}public function coolere()
	{
         
            return view('coolere');
	}
        public function store(Request $request){
    if(Input::hasFile('image')){
            $file=Input::file('image');
            $target='./images/'.md5(uniqid(time())).$file->getClientOriginalName();
            $file->move(public_path().'/images/',$target);
    }else{$target=null;}
    
            $sqlp1="CALL insertcomp('{$request['Nume']}','{$request['Tip']}','{$request['Producator']}','{$request['Pret']}','{$target}','{$request['Descriere']}')";
 DB::select($sqlp1);
    return view('admin');
    }
    public function showall(){
        $image=Image::all();
        return view('showall',compact('image'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('show')->with(['ID'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image=Produs::where('ID','=',$id)->first();
        return view('edit',['image'=>$image]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {if($request->hasFile('image')){
            $file=Input::file('image');
            $target='./images/'.md5(uniqid(time())).$file->getClientOriginalName();
            $file->move(public_path().'/images/',$target);
    }else{$target=null;}
    if($request['Pret']==null){ $price=1;} else {$price=$request['Pret'];}
         $sqlp="CALL updatecomp('{$id}','{$request['Nume']}','{$request['Tip']}','{$request['Producator']}',{$price},'{$target}','{$request['Descriere']}')";
 DB::select($sqlp);
 return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $sqlp="CALL deletecomp('{$id}')";
           DB::select($sqlp);
           return redirect('admin');
       
    }
}
