<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $model = new Contact;

        $contacts = $model->all();

        // compact('contacts', 'prueba') => {'contacts' => $contacts, 'prueba' => $prueba}

        return $this->view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return $this->view('contacts.create');
    }

    public function store()
    {
        $data = $_POST;

        $model = new Contact;
        $model->create($data);

        return $this->redirect('/contacts');
    }

    public function show($id)
    {
        return "Se mostrará el contacto $id";
    }

    public function edit($id)
    {
        return "Aquí se editará el contacto $id";
    }

    public function update($id)
    {
        return "Aquí se procesará la edición del contacto $id";
    }

    public function destroy($id)
    {
        return "Aquí se eliminará el contacto $id";
    }
}
