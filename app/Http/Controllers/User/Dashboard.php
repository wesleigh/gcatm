<?php
namespace App\Http\Controllers\User;

class Dashboard
{

  public function get ()
  {
    return view('user.dashboard')
      ->withPage('Dashboard');
  }

}
