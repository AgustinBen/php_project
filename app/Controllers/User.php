<?php 
namespace App\Controllers; 
 
class User extends BaseController 
{ 
    public function index() // Muestra el listado de usuarios 
    { 
        // Datos inventados 
        $data['users'] = [ 
            ['id' => 1, 'name' => 'Juan Pérez', 'email' => 'juan@ejemplo.com'], 
            ['id' => 2, 'name' => 'Ana Gómez', 'email' => 'ana@ejemplo.com'], 
            ['id' => 3, 'name' => 'Carlos Díaz', 'email' => 'carlos@ejemplo.com'], 
        ]; 
        return view('users/index', $data); // Carga la vista con los datos 
    } 
 
    public function create() 
    { 
        return view('users/create'); // Muestra el formulario de creación 
    } 
 
    public function edit($id) 
    { 
       $data['user'] = ['id' => $id, 'name' => 'Usuario Demo', 'email' => 'demo@ejemplo.com']; 
        return view('users/edit', $data); // Muestra la vista de edición con los datos del usuario 
    } 
}