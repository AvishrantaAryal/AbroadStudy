<?php
namespace App\Traits;

use App\Classes;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait classtrait
{
	use imagetrait;

	public function add(){
    	return view('cd-admin.class.addclass');
    }

    public function store(){

    	$a=[];
        $data = $this->insertcontrol();
        unset($data['course_parts_title']);
        unset($data['course_parts_description']);
    	
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
         DB::table('classes')->Insert($replace);
         $class = DB::table('classes')->orderBy('id','desc')->get()->first();
        

    }
     public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'title' => 'required',
        'summary'=>'required',
        'description' => 'required',
        'seotitle'=>'required',
        'keywords'=>'required',
        'seodescription'=>'required',
        'course_parts_title'=>'',
        'course_parts_description'=>'',
        'image' => 'required|image',
        'altimage' => 'required',
        'status' => 'required',
        ]);
        return $data;
    }

}
?>