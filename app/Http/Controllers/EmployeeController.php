<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $Employee = Employee::when($request->keyword, function ($query) use ($request) {
            $query
        ->where('name', 'like', "%{$request->keyword}%")
        ->orWhere('username', 'like', "%{$request->keyword}%")
        ->orWhere('password', 'like', "%{$request->keyword}%")
        ->orWhere('email', 'like', "%{$request->keyword}%")
        ->orWhere('gender', 'like', "%{$request->keyword}%")
        ->orWhere('place_of_birth', 'like', "%{$request->keyword}%")
        ->orWhere('date_of_birth', 'like', "%{$request->keyword}%")
        ->orWhere('phone_number', 'like', "%{$request->keyword}%")
        ->orWhere('status', 'like', "%{$request->keyword}%")
        ->orWhere('position', 'like', "%{$request->keyword}%")
        ->orWhere('wages', 'like', "%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        $Employee->appends($request->only('keyword'));

        return view('employee.employee', [
            'title'    => 'Employee',
            'Employee' => $Employee,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'name' => 'required',
            'username'=> 'required',
            'password'=> 'required',
            'email'=> 'required',
            'gender' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'status' => 'required',
            'position' => 'required',
            'wages' => 'required',
        ]);

        // fungsi eloquent untuk menambah data
        Employee::create($request->all());


        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('employee.index')
            ->with('success', 'Employee Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan detail data dengan menemukan/berdasarkan ID
        $Employee = Employee::find($id);
        return view('employee.detail', compact('Employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Employee = Employee::find($id);
        return view('employee.edit', compact('Employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // melakukan validasi data
        $request->validate([
            'name' => 'required',
            'username'=> 'required',
            'password'=> 'required',
            'email'=> 'required',
            'gender' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'status' => 'required',
            'position' => 'required',
            'wages' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Employee::find($id)->update($request->all());


        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('employee.index')
            ->with('success', 'Employee Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Employee::find($id)->delete();
        return redirect()->route('employee.index')
            -> with('success', 'Employee Berhasil Dihapus');
    }
    public function __construct(){
        $this->middleware('auth');
    }
    
}
