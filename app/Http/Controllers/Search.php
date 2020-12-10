<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('searchQuery');
        $searchResult = DB::table('school')
            ->where('school.name', 'LIKE', "%$searchQuery%")
            ->orWhere('school.phone', 'LIKE', "%$searchQuery%")
            ->get();


        return view("search",compact('searchResult'))->with("searchQuery",$searchQuery);

    }
}
