<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun_pengguna;
use Illuminate\Routing\Controller;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup', [
            'title' => 'Signup',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validatedData = $request->validate( 
        [
                'nim' => 'required|unique:akun_penggunas',
                'nomor_telephone' => 'required|unique:akun_penggunas',
                'email_akun' => 'required|unique:akun_penggunas|email:dns',
                'username_akun' => 'required|unique:akun_penggunas',
                'password_akun' => 'required|unique:akun_penggunas|min:8',
            ],
        );

        $validatedData['password_akun'] = bcrypt($validatedData['password_akun']);
        
        Akun_pengguna::create($validatedData);

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
