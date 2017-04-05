<?php
namespace App\Http\Middleware;

use Auth;
use Closure;
use Redirect;

class Guest
{

  public function handle ($request, Closure $next)
  {

    if (!Auth::check())
    {
      return $next($request);
    }
    else
    {
      return Redirect::to('/dashboard');
    }
  }

}
