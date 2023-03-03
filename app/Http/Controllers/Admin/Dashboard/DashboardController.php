<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
   public function dashboard(){
    return view('Admin.Dashboard.dashboard');
   }

   public function profile(){
      return view('Admin.Auth.profile');
   }

   public function profileUpdate( Request $request )
   {
      $request->validate([
         'name' => 'required|string',
         'email' => 'required|email',
      ]);

      $data = $request->only('name', 'email');

      Admin::where('id', auth()->guard('admin')->id())->update($data);
      return back()->with('msg1', 'Admin information updated successfully');
   }

   public function passwordUpdate( Request $request )
   {
      $request->validate([
         'current_password' => 'required|string',
         'password' => 'required_with:confirm_password|same:confirm_password',
         'confirm_password' => 'required',
      ]);

      if(Hash::check($request->current_password, auth()->guard('admin')->user()->password)){
         Admin::where('id', auth()->guard('admin')->id())->update(['password' => Hash::make($request->password)]);
         return back()->with('msg2', 'Password updated successfully');
      }else{
         return back()->with('msg2', 'You old password does not match, please give correct password');
      }
      
   }
}
