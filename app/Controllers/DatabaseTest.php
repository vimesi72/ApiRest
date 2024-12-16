<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseTest extends Controller
{
    public function testConnection()
    {
        $db = \Config\Database::connect();
        if ($db->connID) {
            return "Conexión exitosa a la base de datos.";
        } else {
            return "No se pudo conectar a la base de datos.";
        }
    }
}
