<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolTrustController extends Controller
{
    public function index()
    {
        $schools = [
            [
                'name' => 'Aerojet Aviation',
                'logo' => 'images/logos/aerojet.png'
            ],
            [
                'name' => 'OneWorld Now!',
                'logo' => 'images/logos/oneworld.png',
            ],
            
            [
                'name' => 'Chesterton Academy',
                'logo' => 'images/logos/chesterton.png'
            ],
            [
                'name' => 'Light of Christ Christian Academy',
                'logo' => 'images/logos/light-of-christ.png'
            ],
            [
                'name' => 'Smart University',
                'logo' => 'images/logos/smart-university.png'
            ],
            [
                'name' => 'BKG Academy',
                'logo' => 'images/logos/bkg-academy.png'
            ],
            // Add more schools as needed
        ];

        return view('welcome', compact('schools'));
    }
}