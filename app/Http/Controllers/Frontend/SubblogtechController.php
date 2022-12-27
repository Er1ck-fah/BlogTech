<?php

namespace App\Http\Controllers\Frontend;

use Inertia\Inertia;
use App\Models\Community;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubblogtechController extends Controller
{
    public function show($slug)
    {
        $subblogtech = Community::where('slug',$slug)->first();
        return Inertia::render('Subblogtech/Show',compact('subblogtech'));
    }
}
