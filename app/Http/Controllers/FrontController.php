<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    //

    public function getIndex (){

    	$data['questions'] = DB::table('sfaq_faq')->orderby('id','desc')->take(6)->get();
    	$data['categories'] = DB::table('sfaq_category')->orderby('id','asc')->get();
        $data['nama'] = DB::table('sfaq_category')->orderby('id','asc')->take(4)->get();
    	return view ('home', $data);

    }

    public function getDetailFaq($id){
    	$data['faq'] = DB::table('sfaq_faq')->where('id',$id)->first();
        $data['relate'] = DB::table ('sfaq_faq')->where([['id_sfaq_category','=',$data['faq']->id_sfaq_category],['id','!=',$id]])->orderby('id','desc')->take(5)->get();
    	return view('detail',$data);
    }

    public function getKategori ($id){
    	$data['kategori'] = DB::table('sfaq_category')->where('id',$id)->first();
    	$data['faq'] = DB::table('sfaq_faq')->where('id_sfaq_category',$id)->orderby('id','desc')->get();
    	return view ('kategori',$data);
    }

    public function getKontak () {
    	return view ('contact');
    }

    public function getSearch (Request $req){

        if ($req->get('q')=='') {
            # code...
            return redirect('/');
        }

        $data['questions'] = DB::table('sfaq_faq')
        ->where('sfaq_faq.header','like','%'.$req->get('q').'%')
        ->orderby('id','desc')
        ->take(6)
        ->get();
        $data['header_title'] = 'Cari: '.$req->get('q');
        $data['categories'] = DB::table('sfaq_category')->orderby('id','asc')->get();
        $data['nama'] = DB::table('sfaq_category')->orderby('id','asc')->take(4)->get();
        return view ('search', $data);

    }
}
