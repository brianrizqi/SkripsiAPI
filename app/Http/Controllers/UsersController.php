<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = array();
        if (strpos($username, '@') !== false) {
            $user = User::where('email', $username)
                ->first();
        } else {
            $user = User::where('username', $username)
                ->first();
        }
        if ($user == null) {
            $data['error'] = true;
            $data['message'] = 'Error';
        }

        if (Auth::attempt(['email' => $username, 'password' => $password]) || Auth::attempt(['username' => $username, 'password' => $password])) {
            $data['users'] = $user;
            $data['error'] = false;
            $data['message'] = 'Success';
        } else {
            $data['error'] = true;
            $data['message'] = 'Wrong username / password';
        }
        return response()->json($data);
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        $data = array();
        if ($validator->passes()) {
            $users = User::register(
                $request->name,
                $request->email,
                Hash::make($request->password),
                $request->username
            );
            $data['error'] = false;
            $data['message'] = "Success";
        } else {
            $data['error'] = true;
            $data['message'] = "Something's wrong perhaps a missing item.";
        }
        return response()->json($data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:3|max:50',
            'username' => 'required|string|min:5|max:20|unique:users',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $data = array();
        if (!$user) {
            $data['error'] = true;
            $data['message'] = 'Tidak ada';
        } else {
            $data['error'] = false;
            $data['message'] = 'Ada data';
            $data['data'] = $user;
        }
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        $user->username = $request->username;
        $user->save();
        $data = array();
        $data['error'] = false;
        $data['message'] = 'Data berhasil di ubah';
        return response()->json($data);
    }
}
