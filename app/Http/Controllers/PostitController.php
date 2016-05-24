<?php

namespace App\Http\Controllers;

use App\Postit;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostitController extends Controller
{


    public function home()
    {
      return view('welcome');
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

    public function delete($id)
    {
      Postit::destroy($id);
      return "You have destroyed the postit with id ".$id."!";
    }

    public function update(Request $request)
    {
      $note = Postit::find($request->id);
      $note->note = $request->postit;
      $note->name = $request->name;
      $note->save();
      return Postit::all();
    }

}
