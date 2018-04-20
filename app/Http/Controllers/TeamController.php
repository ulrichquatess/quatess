<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Team;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class TeamController extends Controller
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
        //This is where we read all our team post
        $teams = Team::paginate();
        return view('admin.teams.index')->with('teams', $teams); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
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
               'content' => 'required',
               'position' => 'required',
               'team_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $team = new Team; // 

           $team->name = $request->input('name');
           $team->content = Purifier::clean($request->input('content'));
           $team->position = $request->input('position');
           $team->facebook = $request->input('facebook');
           $team->twitter = $request->input('twitter');
           $team->linkedin = $request->input('linkedin');

            //HERE WE save the image
            if($request->hasFile('team_image')) {
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/teams/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $team->image = $filename; 


                $team->save();
            }

         //save
         $team->save();

        //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The team Post was Successfully Created');

         return redirect()->route('team.show', $team->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);

        return view('admin.teams.show')->with('team', $team);
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
        $team = Team::find($id);

        // Return the view page here
        return view('admin.teams.edit')->with('team', $team); 
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
        $team = Team::find($id);
        
             $this->validate($request, [
               'name' => 'required',
               'content' => 'required',
               'position' => 'required',
               'team_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $team = Team::find($id);

           $team->name = $request->input('name');
           $team->content = Purifier::clean($request->input('content'));
           $team->position = $request->input('position');
           $team->facebook = $request->input('facebook');
           $team->twitter = $request->input('twitter');
           $team->linkedin = $request->input('linkedin');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('team_image')) {

               #Add new photo
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/teams/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $team->image;


                //here we update the database
                $team->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $team->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This Team was successfully updated');

        // Redirect to the post.show

            return redirect()->route('team.show', $team->id);
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
        $team = Team::find($id);
        Storage::delete($team->image);

         $team->delete();

        Session::flash('success', 'The Team was successfully deleted.');
         return redirect()->route('team.index');
    }
}
