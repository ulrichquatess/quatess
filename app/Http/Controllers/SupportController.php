<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Support;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class SupportController extends Controller
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
        //This is where we read all our Support post
        $supports = Support::paginate();
        return view('admin.supports.index')->with('supports', $supports); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supports.create');
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
               'support_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $support = new Support;

           $support->title = $request->input('title');
           $support->content = Purifier::clean($request->input('content'));
           $support->link = $request->input('link');
           $support->heading = $request->input('heading');


            //HERE WE save the image
            if($request->hasFile('support_image')) {
                $image = $request->file('support_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/supports/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $support->image = $filename; 


                $support->save();
            }

         //save
         $support->save();

        //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The Support was Successfully Created');

         return redirect()->route('support.show', $support->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $support = Support::find($id);

        return view('admin.supports.show')->with('support', $support);
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
        $support = Support::find($id);

        // Return the view page here
        return view('admin.supports.edit')->with('support', $support); 
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
        $support = Support::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'support_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $support = Support::find($id);

           $support->title = $request->input('title');
           $support->content = Purifier::clean($request->input('content'));
           $support->link = $request->input('link');
           $support->heading = $request->input('heading');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('support_image')) {

               #Add new photo
                $image = $request->file('support_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/supports/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $support->image;


                //here we update the database
                $support->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $support->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This Support was successfully updated');

        // Redirect to the post.show

            return redirect()->route('support.show', $support->id);
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
        $support = Support::find($id);
        Storage::delete($support->image);

         $support->delete();

        Session::flash('success', 'The Support was successfully deleted.');
         return redirect()->route('support.index');
    }
}
