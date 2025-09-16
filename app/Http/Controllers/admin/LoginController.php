<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.login')
                ->withInput()
                ->withErrors($validator);
        }

        // Attempt login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            return redirect()->route('user.account', $user->id)
                             ->with('success', 'Successfully logged in');
        } else {
            return redirect()->route('user.login')
                ->withInput()
                ->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
