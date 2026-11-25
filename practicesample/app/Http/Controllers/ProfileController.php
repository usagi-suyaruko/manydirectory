<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function index(){
        $data = [
            'name' => '長屋大樹',
            'age' => 28,
            'hobbies' => ['プログラミング', '読書', '旅行'],
        ];
        return view('profile', $data);
    }
}