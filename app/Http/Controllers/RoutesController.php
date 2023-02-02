<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;


class RoutesController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function tab()
    {
        $staff = Staff::orderBy('id','DESC')->get();
        return view('tab', compact('staff'));
    }

    public function delete(Staff $staff)
    {
        $staff->delete(); 
        return redirect()->route('tab');
    }

    public function view(Staff $staff)
    {
        return view('edith',compact('staff'));
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:staff,email',
            'staff' => 'required|string|unique:staff,staff',
            'dpt' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'position' => 'required|string',
        ],[
            'email.unique' => 'Oops/ must be unique'
        ]);

        Staff::create($request->only(['fname','lname','email','staff','dpt','dob','gender','position']));
        
        return redirect()->route('home')->with('msg', 'Staff data created successfully');
    }

    public function updateData(Request $request, Staff $staff)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'dpt' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'position' => 'required|string',
        ]);

        $staff->update($request->only(['fname','lname','dpt','dob','gender','position']));
        
        return redirect()->route('view', $staff->id)->with('msg', 'Staff updated successfully');
    }
}

