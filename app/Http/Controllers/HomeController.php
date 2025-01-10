<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('user.index', [
            'user' => $user,
        ]);
    }

    public function profile()
    {
        $user_profile = Auth::user();
        $user_name = Auth::user()->name;
        return view('user.profile', [
            'user_profile' => $user_profile,
            'user_name' => $user_name
        ]);
    }

    public function upload_image(Request $request)
    {
        $validator = Validator::make($request->all(), [
         'img_pro' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', 'All Field Are Required');
        }

        // $user_profile_img = Auth::user()->profile_image;
        // $user_profile_img = User::where('id', Auth::user()->id)->get();
        $user_profile_img = User::find(Auth::user()->id);
        $user_name = Auth::user()->name;

        if ($user_profile_img) {

            if ($request->hasfile('img_pro')) {
                $destination = 'profile_image/'.$user_name.'/'.$user_profile_img->profile_image;
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                
                $file = $request->file('img_pro');
                $filename = uniqid() .'.'. $file->getClientOriginalExtension();
                $file->move('profile_image/'.$user_name.'/', $filename);
                $user_profile_img->profile_image = $filename;
            }
            
            $user_profile_img->update();
            // dd($user_profile_img);

            return back()->with('message', 'profile image  Updated!');
        }
    }

    public function update_details(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Every Field Is Required');
        }

        $user = User::find(Auth::user()->id);
        if ($user->email == $request->email) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        } 
        else {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:users',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Email Already Used');
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        }

        return redirect()->back()->with('message', 'User Details Updated Successfully');
    }

    public function update_password(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string|min:8',
            'password' => 'required|string|min:8|confirmed',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Error With Updating User Password');
        }

        $current_password = Hash::check($request->current_password, Auth::user()->password);
        if ($current_password) {
            User::find(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->back()->with('message', 'Password Updated Successfully');
        }
        else {
            return redirect()->back()->with('message', 'Current Password Incorrect');
        }
    }

    public function blog()
    {
        return view('user.blog');
    }

}
