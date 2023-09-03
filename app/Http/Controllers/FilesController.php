<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FilesController extends Controller
{
  /**
   * Display a listing of the resource.
   */

  private  $disk = 'curriculos';


  public function storeFile(request $req)
  {

    $file = $req->file('file');
    $file->storeAs('', $file->getClientOriginalName(), $this->disk);


    $json = array();
    $json['filename'] = $file->getClientOriginalName();
    return response()->json($json, 200);
  }


  public function downloadFile($name)
  {
    if (Storage::disk($this->disk)->exists($name)) {
      Storage::download("storage/curriculos/{$name}");
    } else {
      return response('', 404);
    }
  }
}
