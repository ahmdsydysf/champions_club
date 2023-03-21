<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
            return view('auth.login_dash');
    }

    public function webLogin()
    {
        return view('auth.login');
    }


    public function loginCheck (Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            // RateLimiter::clear($this->throttleKey());

            if (Auth::user()->type == 'admin') {

                return redirect()->route('admin.dashboard');

            }else{

                return redirect('/');

            }
        }else{
            //RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
    }

    /**
     * Handle an incoming authentication request.
     */


    public function authenticate(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

        if (Auth::user()->type == 'admin') {

            return redirect()->route('admin.dashboard');

        }

    }else{
        return redirect()->route('admin.dashboard');

    }
    }

     public function store(LoginRequest $request)
    {
          $request->authenticate();

        // $request->session()->regenerate();




    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->type == 'admin'){


            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/dashboard');
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
