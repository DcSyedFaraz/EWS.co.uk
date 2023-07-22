<?php

namespace App\Http\Controllers\Web;

use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show($slug)
    {
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $services=Service::all();
        $fares = Fare::all();

        return view('pages.services.show', compact('service','services','deadlines','academic_levels','paper_types', 'fares'));
    }
}
