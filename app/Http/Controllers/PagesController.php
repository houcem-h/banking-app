<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    $title = 'Welcome';
    return view('welcome', compact('title'));
  }

  public function about()
  {
    $title = 'About';
    return view('about')->with('title', $title);
  }

  public function services()
  {
    $data  = array(
      'title' => 'Services',
      'servicesList' => ['Création compte', 'Versement', 'Retrait', 'Transfert']
    );
    return view('services')->with($data);
  }
}
