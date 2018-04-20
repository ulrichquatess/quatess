<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Project;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ProjectController extends Controller
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
        //This is where we read all our project post
        $projects = Project::paginate();
        return view('admin.projects.index')->with('projects', $projects); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
               'title' => 'required',
               'content' => 'required',
               'slug' => 'required',
               'project_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $project = new Project; // 

           $project->title = $request->input('title');
           $project->content = Purifier::clean($request->input('content'));
           $project->title_1 = $request->input('title_1');
           $project->title_2 = $request->input('title_2');
           $project->slug = $request->input('slug');

            //HERE WE save the image
            if($request->hasFile('project_image')) {
                $image = $request->file('project_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/projects/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $project->image = $filename; 


                $project->save();
            }

         //save
         $project->save();

        //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The Project Post was Successfully Created');

         return redirect()->route('project.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('admin.projects.show')->with('project', $project);
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
        $project = Project::find($id);

        // Return the view page here
        return view('admin.projects.edit')->with('project', $project); 
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
        $project = Project::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'slug' => 'required',
               'project_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $project = Project::find($id);

           $project->title = $request->input('title');
           $project->content = Purifier::clean($request->input('content'));
           $project->title_1 = $request->input('title_1');
           $project->title_2 = $request->input('title_2');
           $project->slug = $request->input('slug');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('project_image')) {

               #Add new photo
                $image = $request->file('project_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/projects/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $project->image;


                //here we update the database
                $project->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $project->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This Project was successfully updated');

        // Redirect to the post.show

            return redirect()->route('project.show', $project->id);
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
        $project = Project::find($id);
        Storage::delete($project->image);

         $project->delete();

        Session::flash('success', 'The Project was successfully deleted.');
         return redirect()->route('project.index');
    }
}
