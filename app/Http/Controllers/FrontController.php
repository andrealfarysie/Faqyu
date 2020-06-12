<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    //

    public function getIndex (){

    	$data['questions'] = DB::table('sfaq_faq')->orderby('id','desc')->take(6)->get();
    	$data['categories'] = DB::table('sfaq_category')->orderby('id','desc')->get();
    	return view ('home', $data);

    }

    public function getDetailFaq($id){
    	$data['faq'] = DB::table('sfaq_faq')->where('id',$id)->first();
    	return view('detail',$data);
    }
}
