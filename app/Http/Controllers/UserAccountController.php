<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserAccountController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('user.user', compact('user'));
    }
     public function showWishlist(){
       return view('user.wishlist');
    }
    
}
