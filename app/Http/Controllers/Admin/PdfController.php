<?php

namespace App\Http\Controllers\Admin;

use App\Helper\MyFuncs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PDF;
use App\Model\UserDetail;

class PdfController extends Controller
{
   public function register()
   { 
     try {
          
          return view('admin.register');
        } catch (Exception $e) {
            
        }
     
   }
   public function store(Request $request)
   { 
     try { 
          $this->validate($request, [
              'name' => 'required', 
              'father_name' => 'required',
              'mobile_no' => 'required|numeric|digits:10',
              'image' => 'required',
          ]);
          $UserDetail=UserDetail::where('mobile_no',$request->mobile_no)->first();
          if (!empty($UserDetail)) {
            return Redirect()->back()->with(['message'=>'Mobile No. Already Register','class'=>'error']);
          }else{ 
            $UserDetail=new UserDetail(); 
            $UserDetail->name=$request->name;
            $UserDetail->father_name=$request->father_name; 
            $UserDetail->mobile_no=$request->mobile_no; 
            $UserDetail->save();
            $new_id=$UserDetail->id;
            $dirpath = Storage_path() . '/app/camera_image';
            $vpath = '/camera_image/'.$new_id;
            @mkdir($dirpath, 0755, true);
            $file =$request->image;
            $imagedata = file_get_contents($file);
            $encode = base64_encode($imagedata);
            $image=base64_decode($encode); 
            $name =$new_id;
            $savepath=$vpath.'/'.$name.'.jpg';
            $image= \Storage::disk('local')->put($savepath,$image);
            $UserDetail=UserDetail::find($new_id); 
            $UserDetail->image=$savepath; 
            $UserDetail->save();
            return Redirect()->back()->with(['message'=>'Thank You for Your Register Successfully','class'=>'success']);
          }
        } catch (Exception $e) {
            
        }
     
   }
   

   
}
