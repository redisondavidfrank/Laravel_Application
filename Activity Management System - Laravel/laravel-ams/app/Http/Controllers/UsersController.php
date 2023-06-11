<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Assignment;
use App\Models\Subject;
use App\Models\Instructor;
use App\Models\Status;
use App\Models\Main;
use App\Models\Student;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.login');
    }

    /**
     * Show login form for user.
     */
    public function loginPost(Request $request)
    {
        $credetials = [
            'username' => $request->username,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('login')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error username or Password');
    }
 
    /**
     * Logout function button.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Show the form for user signup.
     */
    public function create()
    {
        return view('users.signup');
    }

    /**
     * Store a newly created user signup information.
     */
    public function store(Request $request)
    {
        $user = new Users();

        $user->student_number = $request->student_number;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }

    /**
     * code block to show table of students data.
     */
    public function studentdata()
    {
        $records = Student::get(['student_id','id_number','firstname','lastname','gender','address','contact','course']);
        return view('users.studentinfo', compact('records'));
    }

    /**
     * code block to show main page.
     */
    public function main()
    {
        return view('users.main');
    }

    /**
     * code block to show add assignment form.
     */
    public function add()
    {
        return view('users.add');
    }

    /**
     * code block to show update form.
     */
    public function updatetab()
    {
        $data = Assignment::select('assignment.assignment_id', 'assignment.assignment_name', 'subject.subject_name','instructor.firstname' ,'instructor.lastname','status.status_name')
                    ->join('subject', 'subject.subject_id', '=', 'assignment.assignment_id')
              		->join('instructor', 'instructor.instructor_id', '=', 'subject.subject_id')
                    ->join('status', 'status.status_id', '=', 'instructor.instructor_id')
                    ->first();;
        return view('users.update', compact('data'));
    }
    
    /**
     * code block to add new assignment.
     */
    public function Addassignment(Request $request)
    {
        $add = new Assignment();
        $add->assignment_name = $request->assignment_name;
        $add->save();

        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->save();

        $instructor = new Instructor();
        $instructor->firstname = $request->instructor_first_name;
        $instructor->lastname = $request->instructor_last_name;
        $instructor->save();

        $status = new Status();
        $status->status_name = $request->status_name;
        $status->save();

        return redirect('home')->with('success', 'New Record Added.');

    }
    /**
     * This is to update assignment information
     */

    public function updateAssignment(Request $request)
    {
    $upassignment = [
        'assignment_id'=>$request->assignment_id,
        'assignment_name'=>$request->assignment_name,
    ];
    $updatesubject = [
        'subject_id'=>$request->subject_id,
        'subject_name'=>$request->subject_name,
    ];
    $instructor = [
        'instructor_id'=>$request->instructor_id,
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
    ];
    $updateStatus = [
        'status_id'=>$request->status_id,
        'status_name'=>$request->status_name,
    ];

    Assignment::where('assignment_id',$request->assignment_id)->update($upassignment);
    Subject::where('subject_id',$request->subject_id)->update($updatesubject);
    Instructor::select('instructor.*', Assignment::raw("CONCAT(instructor.firstname,' ',instructor.lastname) As Instructor"))
    ->where('instructor_id',$request->instructor_id)->update($instructor);
    Status::where('status_id',$request->status_id)->update($updateStatus);
    DB::commit();
    return redirect('home');
    }

    /**
     * Show the form for editing the specified data.
     */
    public function delete()
    {
        return view('users.delete');
    }

    /**
     * Deleting the specified data.
     */
     public function deletedata($id)
    {
        $data = Assignment::join('subject', 'subject.subject_id', '=', 'assignment.assignment_id')
              		->join('instructor', 'instructor.instructor_id', '=', 'subject.subject_id')
                    ->join('status', 'status.status_id', '=', 'instructor.instructor_id');
                    DB::delete('delete from assignment where assignment_id = ?',$id);
                    return redirect('home');
    }   

    /**
     * code block to show student update form.
     */
    public function studentupdate()
    {
        $records = Student::select('student_id','id_number','firstname','lastname','gender','address','contact','course')
        ->first();
        return view('users.studentupdate', compact('records'));
    }

    /**
     * code block to update student information.
     */

    public function updateStudent(Request $request)
    {
        $updateStudent = [
            'student_id'=>$request->student_id,
            'id_number'=>$request->id_number,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'course'=>$request->course,
        ];

        Student::where('student_id',$request->student_id)->update($updateStudent);
        DB::commit();
        return redirect('studentinfo');
    }

    /**
     * code block to show add student form.
     */

    public function studentAdd()
    {
        return view('users.addstudent');
    }

    /**
     * code block to add new student information.
     */
    public function Addstudent(Request $request)
    {
        $studentApp = new Student();
        $studentApp->student_id = $request->student_id;
        $studentApp->id_number = $request->id_number;
        $studentApp->firstname = $request->firstname;
        $studentApp->lastname = $request->lastname;
        $studentApp->gender = $request->gender;
        $studentApp->address = $request->address;
        $studentApp->contact = $request->contact;
        $studentApp->course = $request->course;
        $studentApp->save();

        return redirect('studentinfo')->with('success', 'New Record Added.');
    }

    /**
     * Update the specified resource in storage.
     */
    
    /**
     * Remove the specified resource from storage.
     */
}
