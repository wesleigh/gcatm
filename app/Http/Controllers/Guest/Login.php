<?php
namespace App\Http\Controllers\Guest;

use Auth;
use Session;
use Redirect;
use App\Database\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login extends Controller
{

  public function get ()
  {
    return view('guest.login');
  }

  public function do (Request $request)
  {
    if (User::where('username', $request->username)->count() == 1)
    {

      $user = [
        'username' => $request->username,
        'password' => $request->password
      ];

      if (!Auth::attempt($user))
      {
        return Redirect::to('/login')->withError('Wrong password');
      }

    }
    else
    {
      return Redirect::to('/login')->withError('That user does not exist!');
    }
  }

}
