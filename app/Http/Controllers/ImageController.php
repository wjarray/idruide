<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use File;
use Html;

class ImageController extends Controller
{

    /**
    * Create view file
    *
    * @return void
    */
    public function imageUpload()
    {
    	return view('pages.image-upload');
    }

    /**
    * Manage Post Request
    *
    * @return void
    */
    public function imageUploadPost(Request $request)
    {
    	$this->validate($request, [
            'image' => 'required|mimes:png,jpg,gif',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);

    	return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$imageName);
    }

    public function imageDisplay()
    {

      $images = '';

      foreach (File::allFiles(public_path() . '/images') as $file)
      {
          $filename = $file->getRelativePathName();
          echo $filename;
          echo '<br>';
          echo File::size($file);
          echo ' octets<br>';
          echo HTML::image('images/'.$filename, $filename);
          echo '<br>';
      }



    }

}
