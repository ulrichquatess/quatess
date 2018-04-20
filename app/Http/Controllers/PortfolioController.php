<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Portfolio;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class PortfolioController extends Controller
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
        $portfolio = Portfolio::paginate();
        return view('admin.portfolios.index')->with('portfolio', $portfolio); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
               'portfolio_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $portfolio = new Portfolio; // 

         $portfolio->title = $request->input('title');
         $portfolio->content = $request->input('content');
         $portfolio->title_1 = $request->input('title_1');
         $portfolio->title_2 = $request->input('title_2');
         $portfolio->slug = $request->input('slug');

            //HERE WE save the image
            if($request->hasFile('portfolio_image')) {
                $image = $request->file('portfolio_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/portfolios/' . $filename);
                Image::make($image)->save($location);
                Image::make($image)->resize(300, 302, function($contrain) {
                 $contrain->aspectRatio(); })->save($location);

                $portfolio->image = $filename; 


                $portfolio->save();
            }

         //save
         $portfolio->save();

        //CREATE A SESSION HERE BELLO
         Session::flash('success', 'The Portfolio Post was Successfully Created');

         return redirect()->route('portfolio.show', $portfolio->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);

        return view('admin.portfolios.show')->with('portfolio', $portfolio);
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
        $portfolio = Portfolio::find($id);

        // Return the view page here
        return view('admin.portfolios.edit')->with('portfolio', $portfolio); 
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
        $portfolio = Portfolio::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'slug' => 'required',
               'portfolio_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $portfolio = Portfolio::find($id);

           $portfolio->title = $request->input('title');
           $portfolio->content = Purifier::clean($request->input('content'));
           $portfolio->title_1 = $request->input('title_1');
           $portfolio->title_2 = $request->input('title_2');
           $portfolio->slug = $request->input('slug');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('portfolio_image')) {

               #Add new photo
                $image = $request->file('portfolio_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/portfolios/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $portfolio->image;


                //here we update the database
                $portfolio->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $portfolio->save(); // this is the part that updates the changes      

        // To do a flash message we use SESSION
            Session::flash('success', 'This portfolio was successfully updated');

        // Redirect to the post.show

            return redirect()->route('portfolio.show', $portfolio->id);
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
        $portfolio = Portfolio::find($id);
        Storage::delete($portfolio->image);

         $portfolio->delete();

        Session::flash('success', 'The portfolio was successfully deleted.');
         return redirect()->route('portfolio.index');
    }
}
