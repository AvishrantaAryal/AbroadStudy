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


        public function view(){
        $studies = DB::table('classes')->get()->all();
        $er = Classes::all();
        return view('cd-admin.class.class',compact('studies','er'));
    }
    public function store(){

    	$a=[];
        $data = $this->insertcontrol();
    	
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
         DB::table('classes')->Insert($replace);
          Session::flash('success');
        return redirect('/class-view');
    }

        public function detail($id){
                  $about= Classes::where('id',$id)->get()->first();
          
        return view('cd-admin.class.classdetail',compact('about'));
    }


    public function edit($id){
        $t = Classes::where('id',$id)->get()->first();
        return view('cd-admin.class.editclass',compact('t'));
    }

    public function updateclass($id){
            $data = $this-> updatevalidation();
        
            $test = DB::table('classes')->where('id',$id)->get()->first();
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

            $data = DB::table('classes')->where('id',$id)->update($replace);
            dd('here');
        Session::flash('updatesuccess');
        return redirect('/class-view');
    }

     public function delete($id)
        {
                $test = DB::table('classes')->where('id',$id)->get()->first();
                if (file_exists('imageupload/'.$test->image)) 
                {
                        unlink('imageupload/'.$test->image);
                }
                DB::table('classes')->where('id',$id)->delete();
                Session::flash('deletesuccess');
                return redirect('/class-view');
        }

         public function statusupdate($id)
        {
                $a = [];
                $test = DB::table('classes')->where('id',$id)->get()->first();
                if($test->status=='active')
                {
                    $a['status'] = 'inactive';
            }
            else
            {
                    $a['status'] = 'active'; 
            }
            DB::table('classes')->where('id',$id)->update($a);
            return redirect('/class-view');
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
        'courselayouttitle1'=>'',
        'courselayouttitle2'=>'',
        'courselayouttitle2'=>'',
        'courselayoutdes1'=>'',
        'courselayoutdes2'=>'',
        'courselayoutdes3'=>'',
        'image' => 'required|image',
        'altimage' => 'required',
        'status' => 'required',
        ]);
        return $data;
    }

     public function updatevalidation()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'title' => 'required',
        'summary'=>'required',
        'description' => 'required',
        'seotitle'=>'required',
        'keywords'=>'required',
        'seodescription'=>'required',
        'courselayouttitle1'=>'',
        'courselayouttitle2'=>'',
        'courselayouttitle2'=>'',
        'courselayoutdes1'=>'',
        'courselayoutdes2'=>'',
        'courselayoutdes3'=>'',
        'image' => '',
        'altimage' => 'required',
        'status' => 'required',
        ]);
        return $data;
    }

}
?>