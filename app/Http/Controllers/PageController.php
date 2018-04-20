<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Page;
use Pagination;
use Image;
use Storage;


class PageController extends Controller
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
        $pages = Page::paginate();
        return view('admin.pages.index')->with('pages', $pages); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'page_image' => 'sometimes|image'
          ]);


         $page = new Page; // assigns the model post to $val

         $page->title = $request->input('title');
         $page->content = $request->input('content');  
          //HERE WE save the image
            if($request->hasFile('pages_image')) {
                $image = $request->file('pages_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/pagess/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $page->image = $filename; 


                $page->save();
            }
       //save
         $page->save();

         //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The Page Post was Successfully Created');

         return redirect()->route('page.show', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $page = Page::find($id);

        return view('admin.pages.show')->with('page', $page);
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
        $page = Page::find($id);
        

        // Return the view page here
        return view('admin.pages.edit')->with('page', $page);
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
        
         $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'page_image' => 'sometimes|image'
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $page = Page::find($id);

             $page->title = $request->input('title');
             $page->content = $request->input('content');
             //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('page_image')) {

               #Add new photo
                $image = $request->file('page_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/pages/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $page->image;


                //here we update the database
                $page->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }
             

            $page->save(); // this is the part that updates the changes  

            // To do a flash message we use SESSION
            Session::flash('success', 'This page was successfully updated');    


        // Redirect to the post.show

            return redirect()->route('page.show', $page->id);
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
        $page = Page::find($id);
        Storage::delete($page->image);

         $page->delete();

        Session::flash('success', 'The page was successfully deleted.');
         return redirect()->route('page.index');
    }
}
