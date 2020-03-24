<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated (Request $request)
    {
      $username = Auth::user()->email;
      return redirect('/')->with('success', "You are logged in, $username!");
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login')->with('success', 'You successfully logged out!');
    }
}
