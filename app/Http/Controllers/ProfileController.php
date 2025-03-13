<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Chelsy Siska Dewi',
            'email' => 'cslysiskaa@gmail.com',
            'bio' => 'Its okay, ngga semua harus sesuai ekspektasi',
            'profile_picture' => 'profile.jpg',
            'skills' => ['Komunikasi', 'Desain Grafis', 'Manajemen Waktu'],
            'experience' => [
                'Freelance Graphic Designer - 2 Tahun',
                'Social Media Manager - 1 Tahun',
                'Content Creator - 1,5 Tahun'
            ],
            'hobbies' => ['Fotografi', 'Menulis', 'Mendengarkan Musik'],
            'social_media' => [
                'Instagram' => 'https://www.instagram.com/_siskaaa.cls?igsh=MWo2ODF6M3E1bWM0ZA==',
            ]
        ];

        return view('profile', compact('profile'));
    }
}
