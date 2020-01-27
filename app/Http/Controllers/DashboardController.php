<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\QuickMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $team = DB::table('teams')->get()->all();
        $study = DB::table('studies')->get()->all();
        $std = count($study);
        $cl = DB::table('classes')->get()->all();
        $class = count($cl);
        $teams = count($team);
        $se = DB::table('services')->get()->all();
        $service = count($se);
         $user=DB::table('users')->orderBy('id','DESC')->get()->first();  
    	 $mail = DB::table('dmails')->orderBy('id','Desc')->get()->take(5);
    	return view('cd-admin.home.home',compact('mail','teams','std','class','service','user'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }

     public function quickmail(){
   $data = Request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('dmails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');
	return redirect('/admin');
    }

     public function view(){
    	$t =	DB::table('dmails')->orderBy('id', 'DESC')->paginate(10);
    	return view('cd-admin.home.mails',compact('t'));
    }

    public function adminview(){
        $admin = DB::table('users')->where('name','!=','creatudevelopers')->get()->all();
        return view('cd-admin.admin.admin',compact('admin'));
    }

    public function del($id){
    	 DB::table('dmails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }
}
