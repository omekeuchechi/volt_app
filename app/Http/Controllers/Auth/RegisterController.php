<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'course_id' => $data['course_id'],
            'password' => Hash::make($data['password']),
        ]);
                // Check if the user is a student and has selected a course
    if ($data['role'] === 'student' && isset($data['course_id'])) {
        // Assuming you have a Course model with a relationship to User
        $course = Course::find($data['course_id']);
        // Check if the course exists and is active
        // If the course is valid, associate the user with it
        // This assumes you have a courses() method on the User model
        // and that the Course model has a hasManyThrough relationship to User
        // with the pivot table 'course_user' and foreign keys 'course_id' and 'user_id'
        // and a column 'active' in the pivot table that indicates whether the course is active or not
        if ($course) {
            // Associate the user with the course
            $user->courses()->attach($course);
            

            // Redirect the user to the course dashboard
            return redirect()->url('/dashboard', ['course' => $course]);
        }
    }

    // Redirect the user to the default home page
    return redirect()->route('home');
}

public function showRegistrationForm()
{
    $courses = course::all(); // Assuming you have a Course model
    return view('auth.register', ['courses' => $courses]);
}

}
