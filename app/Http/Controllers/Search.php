<?php

namespace App\Http\Controllers;

use App\News;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    public function index(Request $request)
    {
        $searchName = $request->input('searchName');
        $searchAddress = $request->input('searchAddress');
        $searchResult = DB::table('school')
            ->where('school.name', 'LIKE', "%$searchName%")
            ->where('school.address', 'LIKE', "%$searchAddress%")
            ->get();


        return view("search",compact('searchResult'))->with("searchName",$searchName)->with("searchAddress",$searchAddress);

    }
    public function viewDetails(Request $request){
        $schools = School::get();
        $news = News::all();

        $key = $request->input("key");
        if ($key==="reference")
       return view("details")->with("title","Reference Books");
        else if ($key==="events")
            return view("details")->with("title","Upcoming Events");
            else if ($key==="featured")
                return view("details")->with("title","Featured Schools")->with("schools",$schools);
                else if($key==="scholarship")
                    return view("details")->with("title","Scholarships");
                else if($key==="news")
                    return view("details")->with("title","News")->with("news",$news);

    }
}
