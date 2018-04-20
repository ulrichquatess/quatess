<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\User;
use App\Role;
use Pagination;
use Purifier;
use Image;
use Storage;

class LoginController extends Controller
{

    public function __construct() 
    { 

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $users = User::paginate();
        return view('admin.users.index')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('admin.users.create')->withRole($role);
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
               'name' => 'required',
               'email' => 'required',
               'role_id' => 'required',
               'password' => 'required',
               'user_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $user = new User; 

         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->role_id = $request->input('role_id');
         $user->password = bcrypt($request['password']);

            //HERE WE save the image
            if($request->hasFile('user_image')) {
                $image = $request->file('user_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/users/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                     $contrain->aspectRatio(); })->save($location);

                $user->image = $filename; 

                $user->save();
            }

         //save
           $user->save();

           //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The User was successfully created');

           return redirect()->route('account.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show')->with('user', $user);
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
        $user = User::find($id);
        $roles = Role::all();
        $cats = array();

        foreach ($roles as $role) {
                $cats[$role->id] = $role->name;
            }

        // Return the view page here
        return view('admin.users.edit')->with('user', $user)->withRoles($cats); 
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
        $user = User::find($id);
        
             $this->validate($request, [
               'name' => 'required',
               'email' => 'required',
               'role_id' => 'required',
               'user_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $user = User::find($id);

           $user->name = $request->input('name');
           $user->email = $request->input('email');
           $user->role_id = $request->input('role_id');
           $user->password = bcrypt($request['password']);

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('user_image')) {

               #Add new photo
                $image = $request->file('user_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/users/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $user->image;


                //here we update the database
                $user->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $user->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This User was successfully Updated');

        // Redirect to the post.show

            return redirect()->route('account.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Here we collect the $id
        $user = User::find($id);
        Storage::delete($user->image);

         $user->delete();

        Session::flash('success', 'The User was successfully deleted.');
         return redirect()->route('account.index');
    }
}
