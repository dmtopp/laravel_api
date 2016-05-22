<?php

namespace App\Http\Controllers;

use App\Postit;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostitController extends Controller
{


    public function home()
    {
      return view('welcome', compact('postits'));
    }

    public function create(Request $request)
    {
      $postit = Postit::create(['note' => $request->postit, 'name' => $request->name]);

      return $postit;
    }

    public function all()
    {
      $postits = Postit::all();
      return $postits;
    }


}
