<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=User::all();
        return view('admin.user',compact('users'));
        // return view('admin.user');
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user= new User;

        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');
        $user->address=$request->input('address');
        $user->country=$request->input('country');
        $user->password=$request->input('password');
        
        $user->save();

        return redirect('admin.user')->with('sucess','message saved successfully');
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

    public function showregister()
    {
        return view('admin.register');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user=User::findOrFail($id);
       return view('admin.editUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user= array(

       ' name'=>$request->input('name'),
       'phone'=>$request->input('phone'),
       'email'=>$request->input('email'),
       'address'=>$request->input('address'),
      'country'=>$request->input('country'),
        );

        User::whereid($id)->update($user);
       
        return redirect()->route('admin.index')
                        ->with('success','User updated successfully');
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

    public function delete($id)
    {
           
            $user->delete();
            return redirect('admin.user')->with('sucess','deleted successfully');
    } 

    
}
