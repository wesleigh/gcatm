<?php
namespace App\Http\Middleware;

use Auth;
use View;
use Closure;
use Redirect;

class User
{

  public function handle ($request, Closure $next)
  {

    if (Auth::check())
    {
      View::share('user', Auth::user());
      return $next($request);
    }
    else
    {
      return Redirect::to('/login');
    }
  }

}
