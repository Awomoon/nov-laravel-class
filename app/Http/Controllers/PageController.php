<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
      $age = -7;
      $hobbies = ["Football", "Music", "Flirting", "Traveling", "Dancing"];
      return view('home',
      [
        'age' => $age,
        'hobbies' => $hobbies
      ]);
    }

    public function contact()
    {
     $email = "laravel@gmail.com";
     $phone = '09034543433';
     return view('contact', ['email' => $email, 'phone' => $phone]);
    }

    public function services()
    {
      $services = [
          'Web Development',
          'SEO Optimization',
          'Digital Marketing',
      ];
      return view('services', ['services' => $services]);
    }
}
