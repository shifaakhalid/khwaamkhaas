<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login'); 
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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            return redirect()->route('user.account', $user->id)
                             ->with('success', 'Successfully logged in');
        } else {
            return redirect()->route('user.login')
                ->withInput()
                ->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function register()
    {
        return view('user.register'); 
    }
    public function processRegister(Request $request)
    {
             $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:50',
            'lastName'  => 'required|string|max:50',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed', 
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.register')
                             ->withInput()
                             ->withErrors($validator);
        }
        $user = User::create([
            'firstName' => $request->firstName,
            'lastName'  => $request->lastName,
            'email'     => $request->email,
            'role' => 'customer',
            'password'  => Hash::make($request->password), 
        ]);

        Auth::login($user);
        $request->session()->put('user_name', $user->firstName . ' ' . $user->lastName);
        return redirect()->route('user.login', $user->id)
                         ->with('success', 'Registration successful!  ' . $user->firstName);
    }
    

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.user', compact('user'));
    }

   
public function logout()
{
    Auth::logout();
      return redirect()->route('user.login')
                         ->with('success', 'you are logout!  ' );
    }

}
