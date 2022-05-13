<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
  
    public function releases(){
        
        return view('releases');
    }
}
