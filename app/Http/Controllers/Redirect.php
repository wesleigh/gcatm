<?php
namespace App\Http\Controllers;

use Auth;
use Redirect as R;

class Redirect
{

  public function do ()
  {
    if (Auth::check())
    {
      Redirect::to('/dashboard');
    }
    else
    {
      Redirect::to('/login');
    }
  }

}
