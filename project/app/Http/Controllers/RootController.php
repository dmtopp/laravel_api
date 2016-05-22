<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RootController extends Controller
{
    public function home()
    {
      $people = ['fred', 'bobby', 'sue'];

      return view('welcome', compact('people'));
    }

    public function about()
    {
      return ("you think you're sooooo tough");
    }
}
