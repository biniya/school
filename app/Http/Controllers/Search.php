<?php

namespace App\Http\Controllers;

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
            ->orWhere('school.address', 'LIKE', "%$searchAddress%")
            ->get();


        return view("search",compact('searchResult'))->with("searchName",$searchName)->with("searchAddress",$searchAddress);

    }
}
