<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
    {
        $data["contents"] = "accueil";
        $data["titre"] = "AndroidLand - Accueil";
        $this->load->view('template',$data);
    }
}
