<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

    public function add()
    {
        $viewdata['feedback'] = "";

        // validate form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('todo_name', 'todo_name', 'required');

        // save via model
        if ($this->form_validation->run() === FALSE)
        {
            // validation failed

        }
        else
        {
            // validation ok
            // save via model
            $this->load->model('task_model');
            $data['name'] = $this->input->post('todo_name');
            $this->task_model->Save($data);
            $viewdata['feedback'] = "Your todo has been added.";
        }

        $this->load->view('task/add', $viewdata);
    }

    public function all() {
        $this->load->model('task_model');
        $viewdata['allitems'] = $this->task_model->GetAll();
        $this->load->view('task/all', $viewdata);
    }

    public function index() {
        $this->load->model('task_model');
        $viewdata['allitems'] = $this->task_model->GetAll();
        $this->load->view('task/all', $viewdata);
    }
}
