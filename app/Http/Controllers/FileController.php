<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;


class FileController extends Controller
{
    public function index(){
        return view('well');
    }
    
    public function uploadMultipleFiles(Request $req){
        
              File::create([
                'name' => $req->name,
                'email' => $req ->email,
                'phone' => $req->phone,
                'image' => $req -> image,
                'info' => $req->info
              ]);
      
            
     
             return back();
                   
    }

}