<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // You've already imported the Slider model
use App\Models\Contact; // Import the Contact model
use App\Models\About; // Import the About model
use App\Models\Gallery; // Import the Gallery model
use App\Models\Social; // Import the Social model
use App\Models\Map; // Import the Map model

class HomeController extends Controller
{
    public function index()
    {
        // Fetch data from the database
        $sliders = Slider::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $galleries = Gallery::all();
        $socials = Social::all();
        $maps = Map::all();

        // Pass data to the view
        return view('home', compact('sliders', 'contacts', 'abouts', 'galleries', 'socials', 'maps'));
    }
}