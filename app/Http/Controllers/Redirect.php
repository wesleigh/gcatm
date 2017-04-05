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
      return R::to('/dashboard');
    }
    else
    {
      return R::to('/login');
    }
  }

}
