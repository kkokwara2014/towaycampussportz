<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data=array('title'=>'Home');
        return view('pages.index')->with($data);
    }
    public function about()
    {
        $data=array('title'=>'About Us');
        return view('pages.about')->with($data);
    }
    public function services()
    {
        $data=array('title'=>'Our Services');
        return view('pages.services')->with($data);
    }
    public function team()
    {
        $data=array('title'=>'Our Team');
        return view('pages.team')->with($data);
    }
    public function project()
    {
        $data=array('title'=>'Our Projects');
        return view('pages.project')->with($data);
    }
    public function contact()
    {
        $data=array('title'=>'Contact Us');
        return view('pages.contact')->with($data);
    }
    public function keystaff()
    {
        $data=array('title'=>'Key Staff');
        return view('pages.keystaff')->with($data);
    }
    public function thefounder()
    {
        $data=array('title'=>'The Founder');
        return view('pages.thefounder')->with($data);
    }
    public function ourmission()
    {
        $data=array('title'=>'Our Mission');
        return view('pages.ourmission')->with($data);
    }
    public function ourvision()
    {
        $data=array('title'=>'Our Vision');
        return view('pages.ourvision')->with($data);
    }
    public function oursponsors()
    {
        $data=array('title'=>'Our Sponsors');
        return view('pages.oursponsors')->with($data);
    }
}
