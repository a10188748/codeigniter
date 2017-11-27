<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends WEB_Controller {
    public function index() {
        $this->middle = 'home'; // its your view name, change for as per requirement.
        $this->layout();
    }
}