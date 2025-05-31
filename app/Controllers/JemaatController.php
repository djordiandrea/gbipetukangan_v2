<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JemaatModel;
use CodeIgniter\HTTP\ResponseInterface;

class JemaatController extends BaseController
{

    protected $jemaat_model;

    public function __construct()
    {
        $this->jemaat_model = new JemaatModel();
    }


    public function index()
    {
        // echo view('template/header');
        echo view('jemaat/index');
        // echo view('template/footer');
    }

    public function getJemaat()
    {
        $res = $this->jemaat_model->getJemaat();
        return $res;
    }
}
