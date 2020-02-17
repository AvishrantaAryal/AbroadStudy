<?php
namespace App\Traits;

use App\Ceo;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait ceotrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.ceomessage.addceomessage');
	}

	public function store(){
		$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('ceos')->Insert($replace);
        
        Session::flash('success');
        return redirect('/ceomessage-view');
	}

	public function edit(){
		$ceo= DB::table('ceos')->get()->first();
		return view('cd-admin.ceomessage.editceomessage',compact('ceo'));
	}

	public function view(){
    	  $about= DB::table('ceos')->get()->first();
        return view('cd-admin.ceomessage.ceomessage',compact('about'));
    }

	public function updateceo(){
    	$data = $this-> updatevalidation();
		
			$test = DB::table('ceos')->get()->first();
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

			$data = DB::table('ceos')->update($replace);

		Session::flash('updatesuccess');
		return redirect('/ceomessage-view');
    }

	 public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'name'=>'required',
        'description' => 'required',
        'image' => 'required|image',
        'altimage' => 'required',
        ]);
        return $data;
    }

    public function updatevalidation()
    {
         $data =  Request()->validate([
        'name'=>'required',
        'description' => 'required',
        'altimage' => 'required',
        'image' => '',
        ]);
        return $data;
    }

}
?>	