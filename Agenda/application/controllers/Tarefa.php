<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {


	public function index(){
		//carrega model
        //$this->load->model('tarefa_model','tarefa');
        
        //pega dados do model
        //$dadosTarefa['tarefa'] = $this->tarefa->getTarefas();

        //chama view
    $this->load->view('ListaTarefa'/*, $dadosTarefa*/);
	}
}
