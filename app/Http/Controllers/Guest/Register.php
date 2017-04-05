<?php
namespace App\Http\Controllers\Guest;

use Auth;
use Hash;
use Redirect;
use Validator;
use App\Database\User;
use Illuminate\Http\Request;

class Register
{

  public function get ()
  {
    return view('guest.register');
  }

  public function do (Request $request)
  {
    $validator = Validator::make($request->all(), [
      'username' => 'required|unique:users|max:25',
      'password' => 'required',
      'email'    => 'required|email'
    ]);

    if ($validator->fails())
    {
      return Redirect::to('/register')->withError('You did something wrong');
    }
    else
    {
      $user           = new User;
      $user->username = $request->username;
      $user->password = Hash::make($request->password);
      $user->email    = $request->email;
      $user->save();

      $attempt = [
        'username' => $request->username,
        'password' => $request->password
      ];

      if (!Auth::attempt($attempt))
      {
        return Redirect::to('/dashboard')->withSuccess('Welcome' + $request->username);
      }
      else {
        return Redirect::to('/login')->withError('Session could not start');      }
    }
  }
}
