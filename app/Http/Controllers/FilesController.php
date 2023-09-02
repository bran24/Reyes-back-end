<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private  $disk = 'public';
 

    public function storeFile(request $req)
    {
    // Storage::disk('public')->put("","");
      $file = $req->file('file');
      $file->store('',$this->disk);


    }


    public function downloadFile($name)
    {
    
    }



   
}
