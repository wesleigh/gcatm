<?php
namespace App\Http\Controllers\User;

use Hash;
use Redirect;
use Validator;
use App\Database\User;
use Illuminate\Http\Request;

class Users
{

  public function list ()
  {
    return view('user/users')
      ->withPage('User Listing')
      ->withUsers(User::orderBy('id', 'DESC')->get());
  }

  public function create (Request $request)
  {
    $validator = Validator::make($request->all(), [
      'username' => 'required|unique:users|alphanum|max:25',
      'password' => 'required',
      'email'    => 'required|email'
    ]);

    if ($validator->fails())
    {
      return Redirect::to('/users/list')->withError('You put something in wrong');
    }
    else
    {
      $user             = new User;
      $user->username   = $request->username;
      $user->password   = Hash::make($request->password);
      $user->email      = $request->email;
      $user->save();
      return Redirect::to('/users/list')->withSuccess('The user has been added');
    }
  }

  public function edit (Request $request)
  {
    if (User::where('id', $request->id)->count() == 1)
    {
      $user = User::where('id', $request->id)->first();
      $user->username   = $request->username;
      if ($user->password != null)
      {
          $user->password   = Hash::make($request->password);
      }
      $user->email      = $request->email;
      $user->save();

      return Redirect::to('/users/list')->withSuccess($request->username . "'s account has been updated");
    }
    else
    {
      return Redirect::to('/users/list')->withError('That user does not exist');
    }
  }

  public function delete ($id)
  {
    if (User::where('id', $id)->count() == 1)
    {
      User::where('id', $id)->delete();
      return Redirect::to('/users/list')->withSuccess('The user has been deleted');
    }
    else
    {
      return Redirect::to('/users/list')->withError('We could not find that user');
    }
  }

}
