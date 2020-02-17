<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Service;
use App\Classes;
use App\Ceo;
use App\Study;
use App\Gallery;
use App\Image;
use App\Reply;
use App\About;
use App\Team;
use App\Testimonial;
use App\Seo;
class FrontendController extends Controller
{
    public function home(){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$seo = Seo::where('name','Home')->get()->first();
    	$getonecarosels =Carousel::where('status','active')->get()->first();
    	$getcarosels = Carousel::where('id','!=',$getonecarosels->id)->where('status','active')->orderBy('id','desc')->get();
    	$study = Study::where('status','active')->orderBy('id','desc')->take(2)->get(); 
    	$service = service::where('status','active')->orderBy('id','desc')->get();
    	$class = Classes::where('status','active')->orderBy('id','desc')->take(4)->get();
    	 $header = Study::where('status','active')->get();
    	 $head = Classes::where('status','active')->get();
    	 $footer = About::get()->first();
    	return view('frontend.home.home',compact('getonecarosels','getcarosels','study','service','class','header','head','seo','footer','sideheader','sideheaderclass'));
    }

    public function pagenotfound(){
    	$footer = About::get()->first();
    			$header = Study::where('status','active')->get();
    			$head = Classes::where('status','active')->get();
    	    return view('frontend.errors.404',compact('header','head','footer'));
    }

    public function companyprofile(){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$seo = Seo::where('name','About')->get()->first();
    	$header = Study::where('status','active')->get();
    	$head = Classes::where('status','active')->get();
    	$abt=About::get()->first();

    return view('frontend.about.company-profile',compact('abt','header','head','seo','footer','sideheader','sideheaderclass'));

    }
    public function message(){
        $seo = Seo::where('name','message')->get()->first();
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$msg = Ceo::get()->first();
    	$header = Study::where('status','active')->get();
    	$head = Classes::where('status','active')->get(); 
    return view('frontend.about.message-from-ceo',compact('msg','header','head','footer','sideheader','sideheaderclass','seo'));
    }

    public function team(){
         $seo = Seo::where('name','team')->get()->first();
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$team = Team::where('status','active')->get()->all();
    		$header = Study::where('status','active')->get();
    		$head = Classes::where('status','active')->get();
    	   return view('frontend.about.our-team',compact('team','header','head','footer','sideheader','sideheaderclass','seo'));
    }

    public function service(){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$seo = Seo::where('name','Service')->get()->first();
    	$header = Study::where('status','active')->get();
    	$head = Classes::where('status','active')->get();
    	$service = Service::where('status','active')->orderBy('id','desc')->get()->all();
    return view('frontend.service.service',compact('service','header','head','seo','footer','sideheader','sideheaderclass'));
    }

    public function servicedetails($id){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$header = Study::where('status','active')->get();
    	$head = Classes::where('status','active')->get();
    		$servicedetails=Service::where('id',$id)->where('status','active')->get()->first();
    		$service = Service::where('status','active')->orderBy('id','desc')->take(3)->get();
    	 return view('frontend.service.service-dynamic',compact('servicedetails','service','header','head','footer','sideheader','sideheaderclass'));
    }

    public function studyabroad($id){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$head = Classes::where('status','active')->get();
    	$abroad = Study::where('id',$id)->get()->first();
    	$header = Study::where('status','active')->get();
    return view('frontend.study-abroad.study-abroad-dynamic',compact('header','abroad','head','footer','sideheader','sideheaderclass'));

    }

    public function testimonial(){
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$seo = Seo::where('name','Testimonial')->get()->first();
    	$head = Classes::where('status','active')->get();
    	$header = Study::where('status','active')->get();
    	$test =  Testimonial::where('status','active')->orderBy('id','desc')->get()->all();
    	$tes = Testimonial::get()->all();
    return view('frontend.testimonial.testimonial',compact('test','tes','header','head','seo','footer','sideheader','sideheaderclass'));
    }
    public function album() {
        $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
    	$footer = About::get()->first();
    	$seo = Seo::where('name','Gallery')->get()->first();
    	$header = Study::where('status','active')->get();
    	$gallery = Gallery::where('status','active')->orderBy('id', 'DESC')->get()->take(4);
		$head = Classes::where('status','active')->get();
    return view('frontend.gallery.album',compact('gallery','header','head','seo','footer','sideheader','sideheaderclass'));
		}

		public function gallery($id){
            $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
			$footer = About::get()->first();
			$head = Classes::where('status','active')->get();
			$header = Study::where('status','active')->get();
			$g = Gallery::where('id',$id)->get()->first(); 
		$images=Image::where('gallery_id',$id)->orderBy('id','desc')->get();
			 
    return view('frontend.gallery.gallery',compact('images','g','header','head','footer','sideheader','sideheaderclass'));
		}

		public function classdetails($title) {
            $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
			$footer = About::get()->first();
				$class = Classes::where('title',$title)->get()->first();
			$head = Classes::where('status','active')->get();
			$header = Study::where('status','active')->get();
    return view('frontend.class.class-dynamic',compact('header','head','class','footer','sideheader','sideheaderclass'));
		}

		public function contact() {
            $sideheader = Study::where('status','active')->orderBy('id','desc')->get();
        $sideheaderclass = Classes::where('status','active')->orderBy('id','desc')->get();
			$footer = About::get()->first();
			$seo = Seo::where('name','Contact')->get()->first();
			$head = Classes::where('status','active')->get();
			$header = Study::where('status','active')->get();
    return view('frontend.contact.contact',compact('header','head','seo','footer','sideheader','sideheaderclass'));
}
}
