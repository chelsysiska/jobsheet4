<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name'=> 'Chelsy Siska Dewi',
            'email' => 'cslysiskaa@gmail.com',
            'bio' => 'its okay, ngga semua harus sesuai ekspektasi',
            'profile_picture'=> 'paus.jpg',
            'skills'=> ['Komunikasi','Desain Grafis','Manajemen Waktu']
        ];
        return view('profile', compact('profile'));
    }
}