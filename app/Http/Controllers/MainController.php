<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Service;
use App\Project;
use App\Portfolio;
use App\Blog;
use Session;
use Mail;
use App\Mail\SendMail;

class MainController extends Controller
{
    public function index()
    {
    	$services = Service::InRandomOrder()->take(4)->get();
    	$project = Project::InRandomOrder()->take(3)->get();
    	return view('quatess.index')->with([
    		'services' => $services,
    		'project' => $project
    	]);
    }

      public function getSingleServices($slug){
    	
    	$service = Service::where('slug', '=', $slug)->first();
        $service1 = Project::InRandomOrder()->take(1)->get();
    	return view('quatess.single-service')->with([
            'service' => $service,
            'service1' => $service1
        ]);
    }

     public function getSingleProject($slug){
    	
    	$project = Project::where('slug', '=', $slug)->first();
        $service = Service::InRandomOrder()->take(1)->get();
    	return view('quatess.single-project')->with([
            'project'=> $project,
            'service' => $service
        ]);
    }

    public function getSingleBlog($slug){
        
        $blog = Blog::where('slug', '=', $slug)->first();
        $service = Service::InRandomOrder()->take(1)->get();
        return view('quatess.single-blog')->with([
            'blog' => $blog,
            'service' => $service
        ]);
    }

     public function getSinglePortfolio($slug){
        
        $portfolio = Portfolio::where('slug', '=', $slug)->first();
        $service = Service::InRandomOrder()->take(1)->get();
        return view('quatess.single-portfolio')->with([
            'portfolio'=> $portfolio,
            'service' => $service
        ]);
    }

    public function about()
    {
        $service = Service::InRandomOrder()->take(1)->get();
    	return view('quatess.about')->with('service', $service);
    }

    public function projects()
    {
        $projects = Project::paginate(6);
    	return view('quatess.projects')->with([
            'projects' => $projects
        ]);
    }

    public function services()
    {
        $services = Service::paginate(6);
        $service = Service::InRandomOrder()->take(1)->get();
        return view('quatess.services')->with('services', $services);
    }

    public function portfolios()
    {
        $portfolios = Portfolio::paginate(6);
        return view('quatess.portfolios')->with('portfolios', $portfolios);
    }

    public function blogs()
    {
        $blogs = Blog::paginate(3);
        $service = Service::InRandomOrder()->take(1)->get();
        return view('quatess.blogs')->with([
            'blogs' => $blogs,
            'service' => $service
        ]);
    }

    public function contact()
    {
        return view('quatess.contact');
    }

    public function postContact(Request $request)
    {
        Session::flash('success', 'This The MESSAGE was successfully Sent');
        Mail::send(new sendMail());
        return view('quatess.contact');
    }
}
