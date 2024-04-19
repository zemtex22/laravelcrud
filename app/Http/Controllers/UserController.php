<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\UserDetail;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('userDetails')->get();

        return view('users',compact('users'));
  
    }

    public function new()
    {
        return view('form');
    }


    // public function create()
    // {
    //     return view('users.create'); // Return view to display form for creating a new user

    // }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('edit', compact('users'));

    }

    public function update(Request $request, $id)
    {

    
        $User = User::findOrfail($id);
        $User->name = $request->input('name');
        $User->email = $request->input ('email');
        $User->password = $request->input('password');
        $User->save();

        $UserDetail = $User->userDetails;
        $UserDetail->address = $request->input('address');
        $UserDetail->mobile_number = $request->input('mobile_number');
        $UserDetail->mother_name = $request->input('mother_name');
        $UserDetail->save();

        return redirect()->route('users');
        
    }


    public function submit(Request $request)
    {
        $validateData = $request-> validate([
            'name'=> 'required|string',
            'email'=> 'required|string',
            'password'=> 'required|string',
            
            'address'=> 'required|string',
            'mobile_number'=> 'required|string',
            'mother_name'=> 'required|string',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        $User = new User();
        $User->name = $request->input('name');
        $User->email = $request->input ('email');
        $User->password =$request->input('password');
        $User->save();

        $UserDetail = new UserDetail();
        $UserDetail->address = $request->input('address');
        $UserDetail->mobile_number = $request->input('mobile_number');
        $UserDetail->mother_name = $request->input('mother_name');



        $User->UserDetails()->save($UserDetail);
       
        return redirect()->route('inserted');
    }

    public function destroy($id)
    {
       $User = User::findorFail($id);

       if ($User->userDetails) {
        $User->userDetails->delete();
       }

       $User->delete();

       return redirect()->route('users');
    }

    public function inserted()
    {
        dd('DATA INSERTED SUCCESSFULLY');
    }
}


?>