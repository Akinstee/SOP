<?php

namespace App\Http\Controllers;

// use function;
//use function;
use App\Models\FAQ;
use App\Models\Course;
use App\Models\Message;
use App\Models\Student;
use App\Models\CartItem;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        return view("Students.register");
    }

    public function showRegistrationForm()
    {
        return view('students.registration_form');
    }

    public function save(Request $request)
    {
        if ($request['password'] == $request['password_confirmation']) {
            $request['password'] = Hash::make($request->input('password'));
            // dd($request['password']);

            $validator = Validator::make($request->all(), [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
                'password' => 'required|string|min:8',
                'gender' => ['required'],
                'date_of_birth' => ['required', 'date'],
                'phone_number' => ['required', 'string', 'max:20'],
                'available_on_whatsapp' => ['required'],
                'city_from' => ['required', 'string', 'max:255'],
                'city_currently_living_in' => ['required', 'string', 'max:255'],
                'employed' => ['required'],
                'study_status' => ['required'],
                'has_computer_and_internet' => ['required'],
                'skill_experience' => ['required'],
                // 'how_did_you_hear_about_us' => ['required'],
                'acknowledge_terms_and_privacy' => ['required'],
                'contact_me_about_application' => ['required'],
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // If validation passes, create a new student instance
            // dd($validator->validated()['password']);
            $student = Student::create($validator->validated());

            // Send confirmation email or perform other actions

            return redirect()->route('student.login')->with('success', 'Student registered successfully!');
        } else {
            return redirect()->back()->with('fail', 'passwords dont match')->withInput();
        }

        // Validate the incoming data
    }

    public function studentLogin()
    {
        return view('students.login');
    }

    public function studentCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('students.dashboard'); // Replace 'dashboard' with your actual dashboard route
        }

        // Authentication failed
        return redirect()->route('student.dashboard')->with('error', 'Invalid credentials');
    }



    public function dashboard()
    {
        return view('Students.dashboard');
    }

    public function liveClass()
    {
        // Your logic for the live class page
        return view('students.live_class');
    }

    public function myCertificate()
    {
        // Your logic for the my certificate page
        return view('students.my_certificate');
    }

    public function myLearning()
    {
        // Fetch courses from the database
        $courses = Course::all();

        return view('students.my-learning', compact('courses'));
    }


    // public function myLearning()
    // {
    //     // Dummy courses for tech and marketing-related subjects
    //     $courses = [
    //         ['name' => 'Web Development Fundamentals', 'author' => 'John Doe', 'rating' => 4.5, 'price' => 19.99],
    //         ['name' => 'Digital Marketing Essentials', 'author' => 'Jane Smith', 'rating' => 4.2, 'price' => 24.99],
    //         ['name' => 'Python Programming for Beginners', 'author' => 'Alan Johnson', 'rating' => 4.8, 'price' => 29.99],
    //         ['name' => 'Social Media Marketing Mastery', 'author' => 'Emily Brown', 'rating' => 4.6, 'price' => 22.99],
    //         ['name' => 'JavaScript Advanced Techniques', 'author' => 'Chris Wilson', 'rating' => 4.7, 'price' => 27.99],
    //         // Add more dummy courses as needed
    //     ];

    //     // Save dummy courses to the database (for simplicity, not recommended in a real-world scenario)
    //     foreach ($courses as $courseData) {
    //         Course::create($courseData);
    //     }

    //     // Fetch courses from the database
    //     $coursesFromDB = Course::all();

    //     return view('students.my-learning', compact('coursesFromDB'));
    // }

    public function messages()
    {
        // Dummy chat messages for five different students
        $studentMessages = [
            ['student_name' => 'Alice', 'content' => 'Hey, how are you?', 'sender' => 'other'],
            ['student_name' => 'Bob', 'content' => 'Hi! I\'m doing well, thanks. How about you?', 'sender' => 'own'],
            ['student_name' => 'Charlie', 'content' => 'Not bad, just busy with work.', 'sender' => 'other'],
            ['student_name' => 'David', 'content' => 'I understand. Anything exciting happening?', 'sender' => 'own'],
            ['student_name' => 'Eve', 'content' => 'Just working on some projects. How about you?', 'sender' => 'other'],
            // Add more dummy messages as needed
        ];

        // Save dummy messages to the database (for simplicity, not recommended in a real-world scenario)
        foreach ($studentMessages as $messageData) {
            Message::create($messageData);
        }

        // Fetch messages from the database
        $messagesFromDB = Message::orderBy('created_at', 'asc')->get();

        return view('students.messages', compact('messagesFromDB'));
    }

    public function wishlist()
    {
        $courses = [
            [
                'name' => 'Introduction to Web Development',
                'description' => 'Learn the basics of web development.',
                'price' => 49.99,
                'image' => 'images/course1.jpg',
            ],
            [
                'name' => 'Laravel Fundamentals',
                'description' => 'Learn the basics ofLaravel 10.',
                'price' => 99.99,
                'image' => 'images/course1.jpg',
            ],
            [
                'name' => 'Introduction to Web3 ',
                'description' => 'Learn the basics of web 3.',
                'price' => 99.99,
                'image' => 'images/course1.jpg',
            ],
            // Add more courses as needed
        ];

        return view('students.wishlist', compact('courses'));
    }

    public function notifications()
    {
        // Dummy message for the student
        $dummyMessage = "Hello, new student! Welcome to our platform.";

        // Save the dummy notification to the database
        Notification::create([
            'message' => $dummyMessage,
            'type' => 'info', // You can use 'info', 'success', 'error', etc. based on your design
        ]);

        // Fetch notifications from the database
        $notifications = Notification::orderBy('created_at', 'desc')->get();

        return view('students.notifications', compact('notifications'));
    }

    public function profile()
    {
        $user = Auth::user();
        $user_status = null; // Adjust this based on the actual logic for user status

        return view('students.profile', [
            'user' => $user,
            'user_status' => $user_status,
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Implement the logic to update the user's profile
        // You can use $request->input('cf_handle'), $request->input('old'), etc.

        return redirect()->route('students.profile')->with('success', 'Profile updated successfully.');
    }

    public function updateProfileImage(Request $request)
    {
        $user = Auth::user();

        // Check if the user is not null before accessing the 'avatar' property
        if ($user) {
            // Validate the uploaded file
            $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            ]);

            // Handle file upload
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarPath = $avatar->store('avatars', 'public'); // Store the file in the 'public/avatars' directory
                // Update the user's 'avatar' property with the file path
                $user->avatar = $avatarPath;
                $user->save();
            }

            return redirect()->route('students.profile')->with('success', 'Profile image updated successfully.');
        } else {
            // Handle the case where the user is null (optional: redirect to login or show an error message)
            return redirect()->route('login')->with('failure', 'User not authenticated.');
        }
    }

    public function editProfile()
    {
        return view('students.edit_profile');
    }

    public function wallet()
    {
        return view('students.wallet');
    }

    public function analytics()
    {
        return view('students.analytics');
    }


    public function settings(Request $request)
    {
        // Validate and save user preferences (replace with your logic)
        $languages = ['en', 'es', 'fr']; // Example array of supported languages
        $notifications = ['email', 'sms', 'push'];

       
        return view('students.settings', [
            'languages' => $languages,
            'notifications' => $notifications,
        ]);
    }

    public function help()
    {
        // Fetch FAQs from the database
        $faqs = FAQ::all();

        return view('students.help', compact('faqs'));
    }


    public function myCart()
    {
        // Fetch cart items from the database
        $cartItems = CartItem::all();

        return view('students.my-cart', compact('cartItems'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); // Replace 'home' with your desired redirect path
    }

    // public function liveClass()
    // {
    //     return view('student.live-class');
    // }
}
