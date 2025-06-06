<?php

namespace App\Models;

use CodeIgniter\Model;

class JemaatModel extends Model
{
    // protected $db;
    protected $client;

    public function __construct()
    {
        // $this->db = db_connect();
        $this->client = \Config\Services::curlrequest();
    }

    public function getJemaat()
    {
        $result = $this->client->get('https://api.gbipetukangan.com/api/getdatajemaat');
        return $result->getBody();
    }

    public function setJemaat($data)
    {
        $result = $this->client->post('https://api.gbipetukangan.com/api/setdatajemaat', ['json' => $data]);
        return $result->getBody();
    }
}
