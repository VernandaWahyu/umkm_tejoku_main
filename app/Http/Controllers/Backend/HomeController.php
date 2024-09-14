<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider; // import the Slider model
use App\Models\Contact; // Import the Contact model
use App\Models\About; // Import the About model
use App\Models\Gallery; // Import the Gallery model
use App\Models\Social; // Import the Social model
use App\Models\Map; // Import the Map model
use App\Models\Sponsor; // Import the Sponsor model

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
        $sponsors = Sponsor::all();

        // Pass data to the view
        return view('home', compact('sliders', 'contacts', 'abouts', 'galleries', 'socials', 'maps','sponsors'));
    }
}