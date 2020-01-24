<?php
namespace App\Traits;

use App\Testimonial;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

trait testimonialtrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.testimonial.addtestimonial');
	}

	public function view(){
		$re = DB::table('testimonials')->paginate(6);
		$er = Testimonial::all();
		return view('cd-admin.testimonial.testimonial',compact('re','er'));
	}

	public function edit($id){
		$t = Testimonial::where('id',$id)->get()->first();
		return view('cd-admin.testimonial.edittestimonials',compact('t'));

	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('testimonials')->Insert($replace);
		Session::flash('success');
		return redirect('/testimonials-view');
	}

	public function update($id){
		$data = $this-> updatevalidation();
		
			$test = DB::table('testimonials')->where('id',$id)->get()->first();
			if(isset($data['image'])){
			if (file_exists('imageupload/'.$test->image)) 
			{
				unlink('imageupload/'.$test->image);
			}


			$test = $this->insertimage($data['image']);
			$a['image'] = $test ;
			}
			$a['updated_at'] =Carbon::now('Asia/Kathmandu');
			$replace = array_replace($data,$a);

			$data = DB::table('testimonials')->where('id',$id)->update($replace);

		Session::flash('updatesuccess');
		return redirect('/testimonials-view');
	}
	public function statusupdate($id){
		$a = [];
		$test = DB::table('testimonials')->where('id',$id)->get()->first();
		if($test->status=='active')
		{
			$a['status'] = 'inactive';
		}
		else
		{
			$a['status'] = 'active'; 
		}
		DB::table('testimonials')->where('id',$id)->update($a);
		return redirect('/testimonials-view');
	}

	public function deletetestimonial($id){
		$test = DB::table('testimonials')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('testimonials')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/testimonials-view');
	}

	public function insertcontrol()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'name' => 'required',
			'description' => 'required',
			'image' => 'required|max:10240',
			'altimage' => 'required',
			'status' => 'required',
		]);
		return $data;
	}

	public function updatevalidation()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'name' => 'required',
			'description' => 'required',
			'image'=>'',
			'altimage' => 'required',
			'status' => 'required',
		]);
		return $data;
	}

}
?>	