<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffModel;
use App\Models\NewStaffModel;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = StaffModel::orderBy('ID')->paginate(25);
        return view('staff.index', compact('staff'))->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new NewStaffModel();

        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->address_id = $request->address_id;
        $staff->email = $request->email;
        $staff->store_id = $request->store_id;
        $staff->active = $request->active;
        $staff->username = $request->username;
        $staff->password = $request->password;

        $staff->save();
        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = StaffModel::find($id);
        return view('staff.show', compact('staff'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = NewStaffModel::find($id);
        return view('staff.edit', compact('staff'))->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $staff = NewStaffModel::find($request->staff_id);

        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->email = $request->email;
        $staff->password = $request->password;

        $staff->save();
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = NewStaffModel::find($id);
        $staff->destroy($id);
        return redirect('/staff');
    }
}
