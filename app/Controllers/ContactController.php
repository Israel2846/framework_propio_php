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
        $model = new Contact;

        $contact = $model->find($id);

        return $this->view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $model = new Contact;

        $contact = $model->find($id);

        return $this->view('contacts.edit', compact('contact'));
    }

    public function update($id)
    {
        $data = $_POST;

        $model = new Contact;
        $model->update($id, $data);

        $this->redirect("/contacts/{$id}");
    }

    public function destroy($id)
    {
        return "Aquí se eliminará el contacto $id";
    }
}
