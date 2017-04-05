<?php
namespace App\Http\Controllers\User;

use Auth;
use Redirect;

class Logout
{

  public function do ()
  {
    Auth::logout();
    return Redirect::to('/login')->withError('You been logged out!');
  }
  
}
