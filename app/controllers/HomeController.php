<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = ["title" => "Bosh sahifa"];
        $this->view('home', $data);
    }

    public function about() {
        $data = ["title" => "About sahifa"];
        $this->view('about', $data);
    }
}