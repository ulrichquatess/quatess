<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Role;
use Session;
use Pagination;

class RoleController extends Controller
{

    public function __construct() { 

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        //This is where we read all our blog post
        $roles= role::paginate();
        return view('admin.roles.index')->with('roles', $roles); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATE DATA

        $this->validate($request, [
               'name' => 'required'

          ]);

          // STORE DATA TO THE DATABASE

         $role = new Role; 

         $role->name = $request->name;
        

         //save
            $role->save();

           return redirect()->route('role.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findorFail($id);

        return view('admin.roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Assign or find the $id of each field
        $role = Role::findorFail($id);
        
        // Return the view page here
        return view('admin.roles.edit')->with('role', $role); 
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
        $role = Role::findorFail($id);
        
             $this->validate($request, [
                'name' => 'required'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $role = Role::findorFail($id);

             $role->name = $request->input('name');
            

            $role->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('role.show', $role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ///Here we collect the $id
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.index');
    }

}