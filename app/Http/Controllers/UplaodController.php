<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class UplaodController extends Controller
{
    //
    public function uplaod(Request $request)
    {   $data=new File();
        $file=$request->file;
        $filename=time().'.'.$file->guessExtension();
        $request->file->move('assets',$filename);

        $data->file_actual=$filename;
        $data->save();

    }


    public function downlaod()
    {
        $data=File::find('file_actual');
        // $data='assets/1658680975.pdf';
        // return response()->download($data);
        return response()->download(public_path('assets/1658687587.pdf'));
        }
}
