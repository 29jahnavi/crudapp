<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\cropimage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function resizeImage(){
        return view('Frontend.image-resize');
    }
    
    public function resizeImageSubmit(Request $request){
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300,300);
            $image_resize->save(public_path('uploads/images/'. $filename));
            return "Image has been resized successfully";
    }


    public function index()
    {
        return view('Frontend.imageUpload');
    }
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('uploads/');
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $imageFullPath = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
         $saveFile = new cropimage;
         $saveFile->name = $imageName;
         $saveFile->save();
   
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    public function imageUpload_list() {
        $data= cropimage::select('id','name')->get();
        return view('Frontend.imageUpload-list', ['items'=>$data]);
     }
}
