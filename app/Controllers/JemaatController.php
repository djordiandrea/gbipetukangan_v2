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

    public function setJemaat()
    {
        // $data = [
        //     'fullname' => $this->request->getPost('fullname'),
        //     'dob'      => $this->request->getPost('dob'),
        //     'numb'     => $this->request->getPost('number'),
        //     'addr'     => $this->request->getPost('addr'),
        //     'isactive' => $this->request->getPost('isactive'),
        //     'id'       => $this->request->getPost('id')
        // ];
        // var_dump($this->request->getPost());
        // die;
        $res = $this->jemaat_model->setJemaat($this->request->getPost());
        return $res;
    }

    public function addForm()
    {
        echo view('form/add-jemaat');
    }
}
