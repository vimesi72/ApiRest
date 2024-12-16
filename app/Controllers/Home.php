<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\BaseConnection;

class Home extends Controller
{
    public function checkDb()
    {
        $db = \Config\Database::connect();
        if ($db->connect()) {
            return $this->response->setJSON(['status' => 'Conexión exitosa a la base de datos.']);
        }
        return $this->response->setJSON(['status' => 'No se pudo conectar a la base de datos.']);
    }
}
