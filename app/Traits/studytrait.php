<?php
namespace App\Traits;

use App\Study;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait studytrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.study.addstudy');
	}

        public function view(){
        $studies = DB::table('studies')->get()->all();
        $er = Study::all();
        return view('cd-admin.study.study',compact('studies','er'));
    }
    public function edit($id){
         $t = Study::where('id',$id)->get()->first();
        return view('cd-admin.study.editstudy',compact('t'));
    }

    public function detail($id){
                  $about= Study::where('id',$id)->get()->first();
          
        return view('cd-admin.study.studydetail',compact('about'));
    }


	public function store(){
		 $a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['slug'] = str_slug($data['title'],'-');
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);

        DB::table('studies')->Insert($replace);
        Session::flash('success');
        return redirect('/study-view');
	}


        public function updatestudy($id){
                $data = $this-> updatevalidation();
        
            $test = DB::table('studies')->where('id',$id)->get()->first();
            if(isset($data['image'])){
            if (file_exists('imageupload/'.$test->image)) 
            {
                unlink('imageupload/'.$test->image);
            }


            $test = $this->insertimage($data['image']);
            $a['image'] = $test ;
            }
            $a['slug'] = str_slug($data['title'],'-');
            $a['updated_at'] =Carbon::now('Asia/Kathmandu');
            $replace = array_replace($data,$a);

            $data = DB::table('studies')->where('id',$id)->update($replace);

        Session::flash('updatesuccess');
        return redirect('/study-view');

        }

        public function delete($id)
        {
                $test = DB::table('studies')->where('id',$id)->get()->first();
                if (file_exists('imageupload/'.$test->image)) 
                {
                        unlink('imageupload/'.$test->image);
                }
                DB::table('studies')->where('id',$id)->delete();
                Session::flash('deletesuccess');
                return redirect('/study-view');
        }

        public function statusupdate($id)
        {
                $a = [];
                $test = DB::table('studies')->where('id',$id)->get()->first();
                if($test->status=='active')
                {
                    $a['status'] = 'inactive';
            }
            else
            {
                    $a['status'] = 'active'; 
            }
            DB::table('studies')->where('id',$id)->update($a);
            return redirect('/study-view');
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
                        'image' => 'required|image',
                        'altimage' => 'required',
                        'status' => 'required',
                        'why'=>'required',
                        'education'=>'required',
                        'cost'=>'required',
                        'slug'=>'',
                ]);
                return $data;
          }

           public function updatevalidation()
           {
               $data =  Request()->validate([
                'title' => 'required',
                'summary'=>'required',
                'description' => 'required',
                'seotitle'=>'required',
                'keywords'=>'required',
                'seodescription'=>'required',
                'altimage' => 'required',
                'status' => 'required',
                'image' => '',
                'why'=>'required',
                'education'=>'required',
                'cost'=>'required',
                'slug'=>'',
                ]);
               return $data;
           }

}

?>