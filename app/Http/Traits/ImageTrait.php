<?php
namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

trait ImageTrait {
    public function getTrait($image) {
        $input['imagename'] = uniqid().time().'.png';
     
        $filePath = storage_path('app/public/uploads/');
        $img = Image::make($image->path());
        $img->encode('png', 65)->resize(1024, 512, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$input['imagename']);

        return($input['imagename']);
    }
    public function getpdf($pdf_file) {
        $filename = time().'.'.$pdf_file->getClientOriginalExtension();
        $filePath = storage_path('app/public/uploads/resumes/'); 
        $pdf_file->move($filePath, $filename);
    }
}