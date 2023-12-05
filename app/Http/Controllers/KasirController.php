<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function 
    index()
    {
        return view('login',[

        ]);
    }

   public function authenticate(Request $request)
   {
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);
    if (Auth::guard('web')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/index');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

public function logout (Request $request)
  {
   Auth::logout();

   $request->session()->invalidate();

   $request->session()->regenerateToken();

   return redirect('/login');
   }

   public function destroy($id){
    $crud = Kasir::where('idkasir', $id)
    ->delete();
    session()->flash('success, delete data');
    return redirect('/hapus');
 }
}
