<?php

require_once __DIR__ . '/../Core/Controller.php';

class PublicController extends Controller{
    public function __construct(){

    }

    public function index(){
        $this->view('auth/login');
    }

}