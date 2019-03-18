<?php

namespace App\Http\Controllers;
use App\User;
use App\Events\UserRegistered;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return User::all();
    }
 
    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {        
    	$rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ];

        $this->validate($request, $rules);
     
        $fields = $request->all();
        $fields['password'] = bcrypt($request->password);
        $user = User::create($fields);

        event(new UserRegistered($user));
        
        return response()->json($user, 201);
    }

    public function update(Request $request,  User $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function delete(User $user)
    {	
        $user->delete();
        return response()->json($user, 200);
    }
}
