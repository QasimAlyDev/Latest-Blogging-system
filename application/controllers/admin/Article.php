<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class article extends CI_Controller{
    // this method will show articles listing page
    public function index(){
        $this->load->view("admin/article/list");
    }

    // This method is used to create new article
    public function create(){
        $this->load->model('Category_model');
        $categories = $this->Category_model->getCategories();
        $data['categories']=$categories;

        // file upload settings
        $config['upload_path']          = './public/uploads/article/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']          = TRUE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_error_delimiters('<p class="invalid_feedback">','</p>');
        $this->form_validation->set_rules('category_id','Category','trim|required');
        $this->form_validation->set_rules('author','Author','trim|required');
        $this->form_validation->set_rules('title','Title','trim|required|min_length[5]');

        if($this->form_validation->run() == true){
            // form validated successfully and we can proceed
        }else{
            // form  not validated, you can show errors
            $this->load->view("admin/article/create",$data);
        }

    }
}
?>  