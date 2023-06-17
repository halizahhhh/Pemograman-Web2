<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import Model
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index', [
            'members' => $members 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi Form input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);

        Member::create($validated);
        return redirect('/dashboard/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Mendapatkan data berdasarkan id
        $member = Member::find($id);
        return view('admin.member.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mendapatkan data berdasarkan id
        $member = Member::find($id);
        return view('admin.member.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //Mendapatkan data berdasarkan id
         $member = Member::find($id);

        //Validasi Form input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);

        //Update data
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->gender = $request->input('gender');
        $member->status = $request->input('status');
        $member->address = $request->input('address');
        $member->save();

        return redirect('/dashboard/member')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari data berddasarkan id
        $member = Member::find($id);

        // Hapus data berdasarkan id
        $member->delete();

        return redirect('/dashboard/member');
    }
}
