<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return "Aquí se mostrará el listado de contactos";
    }

    public function create()
    {
        return "Aquí se crearán";
    }

    public function store()
    {
        return "Aquí se procesará el formulario de creación";
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
