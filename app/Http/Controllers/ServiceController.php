<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Service;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ServiceController extends Controller
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
        //This is where we read all our service post
        $services = Service::paginate();
        return view('admin.services.index')->with('services', $services); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
               'service_image' => 'sometimes|image',
               'service1_image' => 'sometimes|image1'
          ]);

          // STORE DATA TO THE DATABASE

         $service = new Service; // 

           $service->title = $request->input('title');
           $service->content = Purifier::clean($request->input('content'));
           $service->title_1 = $request->input('title_1');
           $service->title_2 = $request->input('title_2');
           $service->slug = $request->input('slug');

            //HERE WE save the image
            if($request->hasFile('service_image')) {
                $image = $request->file('service_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/services/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $service->image = $filename; 


                $service->save();
            }

            //HERE WE save the image
            if($request->hasFile('service1_image')) {
                $image = $request->file('service1_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/mainservice/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $service->image = $filename; 


                $service->save();
            }

         //save
         $service->save();

        //CREATE A SESSION HERE BELLO
         Session::flash('service', 'The Service Post was Successfully Created');

         return redirect()->route('service.show', $service->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);

        return view('admin.services.show')->with('service', $service);
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
        $service = Service::find($id);

        // Return the view page here
        return view('admin.services.edit')->with('service', $service); 
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
        $service = Service::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'slug' => 'required',
               'service_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $service = Service::find($id);

           $service->title = $request->input('title');
           $service->content = Purifier::clean($request->input('content'));
           $service->title_1 = $request->input('title_1');
           $service->title_2 = $request->input('title_2');
           $service->slug = $request->input('slug');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('service_image')) {

               #Add new photo
                $image = $request->file('service_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/services/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $service->image;


                //here we update the database
                $service->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('service1_image')) {

               #Add new photo
                $image = $request->file('service1_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/mainservice/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $service->image;


                //here we update the database
                $service->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $service->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This Service was successfully updated');

        // Redirect to the post.show

            return redirect()->route('service.show', $service->id);
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
        $service = Service::find($id);
        Storage::delete($service->image);

         $service->delete();

        Session::flash('success', 'The Service was successfully deleted.');
         return redirect()->route('service.index');
    }
}
