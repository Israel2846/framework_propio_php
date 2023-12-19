<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();

        return $contactModel->create([
            'name' => 'Gómez',
            'email' => 'gomez@gmail.com',
            'phone' => '5589898989'
        ]);

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}
