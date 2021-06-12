<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
    public function googleLineChart()

    {

        $visitor = Visitor::select(

            DB::raw("year(created_at) as year"),

            DB::raw("SUM(click) as total_click"),

            DB::raw("SUM(viewer) as total_viewer"))

            ->orderBy(DB::raw("YEAR(created_at)"))

            ->groupBy(DB::raw("YEAR(created_at)"))

            ->get();



        $result[] = ['Year','Click','Viewer'];

        foreach ($visitor as $key => $value) {

            $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];

        }



        return view('google-line-chart')

            ->with('visitor',json_encode($result));

    }
}
