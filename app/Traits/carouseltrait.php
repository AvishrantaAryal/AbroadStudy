<?php
namespace App\Traits;

use App\Carousel;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait carouseltrait
{
	use imagetrait;

	public function addcarousel(){
    	return view('cd-admin.carousel.addcarousel');
    }
     public function viewcarousel(){
    	$carousel = DB::table('carousels')->get()->all();
    	$er = Carousel::all();
    	return view('cd-admin.carousel.carousel',compact('er','carousel'));
    }

    public function store(){
    	$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('carousels')->Insert($replace);
        
        Session::flash('success');
        return redirect('/carousel-view');
    }

    public function delete($id){
        $test = DB::table('carousels')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('carousels')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/carousel-view');
    }
    public function statusupdate($id)
	{
	  $a = [];
	  $test = DB::table('carousels')->where('id',$id)->get()->first();
	    if($test->status=='active')
	        {
	            $a['status'] = 'inactive';
	        }
	    else
	        {
	            $a['status'] = 'active'; 
	        }
	    	DB::table('carousels')->where('id',$id)->update($a);
	    	return redirect('/carousel-view');
	    }

    
    public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'summary'=>'required',
        'image' => 'required|image',
        'altimage' => 'required',
        'status'=>'required',
        ]);
        return $data;
    }
}
	?>