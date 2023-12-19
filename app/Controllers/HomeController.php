<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();

        return $contactModel->update(4, [
            'name' => 'Israel Esaú',
            'email' => 'israelesau@gmail.com',
            'phone' => '5512345678'
        ]);

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}
