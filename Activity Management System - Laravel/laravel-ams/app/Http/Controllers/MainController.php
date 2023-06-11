<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    /**
     * Join data of assignment to the following tables and gets the result of 
     * the equivalent assignment_id from the join result.
     */
    public function index()
    {
        $data = Main::join('subject', 'subject.subject_id', '=', 'assignment.assignment_id')
              		->join('instructor', 'instructor.instructor_id', '=', 'subject.subject_id')
                    ->join('status', 'status.status_id', '=', 'instructor.instructor_id')
              		->get(['assignment.assignment_id', 'assignment.assignment_name', 'subject.subject_name',Main::raw("CONCAT(instructor.firstname,' ',instructor.lastname) As Instructor"),'status.status_name']);
        return view('users.main', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
