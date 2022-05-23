<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Page';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        // TODO Later, insert data to services table from add services view
        // TODO list services somewhere in basic table
        // TODO add delete, activate/deactivate (based on the status), edit,  buttons

       $services=Service::where('status', 1)
                    ->get();

        $data = [
            'title' => 'Services',
            'services' => $services
        ];
        return view('pages.services')->with($data);
    }

}
