<?php

namespace App\Controllers\Guest;

use App\Controllers\BaseController;
use App\Models\Berita;
use CodeIgniter\HTTP\ResponseInterface;

class Base extends BaseController
{
    protected $data;
    protected $beritaModel;

    public function __construct()
    {
        $this->data = [
            "base" => "Beranda"
        ];
    }

    public function index()
    {
        return view('guest/home', $this->data);
    }
}
