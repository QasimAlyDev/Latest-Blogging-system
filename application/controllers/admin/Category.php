<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class category extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)){
            $this->session->set_flashdata("msg","Please Login!");
            redirect(base_url().'admin/login/index');
        }

    }
    // this method will show category list page
    public function index(){
        $this->load->model('Category_model');
        $querystring = $this->input->get('q'); 
        $params['querystring'] = $querystring;
        $categories = $this->Category_model->getCategories($params);
        $data['querystring'] = $querystring;
        $data['categories'] = $categories;
        $this->load->view('admin/category/list',$data);
    }
    // this method will show create category page
    public function create(){
        $this->load->helper('common_helper');

        $config['upload_path']          = './public/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']          = TRUE;
        $this->load->library('upload', $config);
        
        $this->load->model('Category_model');
        
        $this->form_validation->set_error_delimiters('<p class="invalid_feedback">','</p>');
        $this->form_validation->set_rules('name','Name','required');
        if($this->form_validation->run() == true){

            if(!empty($_FILES['image']['name'])){
                //now user has selected a file we will proceed
                if($this->upload->do_upload('image')){
                    //image  uploaded successfully, now we will store it in the database
                    $data = $this->upload->data();

                    //resizing part ... resizeImage method create in common helper file
                    resizeImage($config['upload_path'].$data['file_name'],
                                $config['upload_path'].'thumb/'.$data['file_name'],
                                300,270);

                    $formArray['image'] = $data['file_name'] ;
                    $formArray['name'] = $this->input->post('name');
                    $formArray['status'] = $this->input->post('status');
                    if(date_default_timezone_set("Asia/Karachi")){
                        $date = date("Y-m-d H:i:s");  
                        $formArray['created_at']= $date;
                    }
                    $this->Category_model->create($formArray);
                    // this code for sweetalert showing code start
                    $_SESSION['status'] = "Category has been added.";
                    $_SESSION['status_code'] = "success";
                    // this code for sweetalert showing code end
        
                    redirect(base_url().'admin/category/index');
                    
                }else{
                    // there was an error uploading the image.
                    $error = $this->upload->display_errors();
                    $data['errorImageUpload'] = $error;
                    $this->load->view('admin/category/create',$data);
                    
                }
            }else{
                //we will create category  without image
                $formArray['name'] = $this->input->post('name');
                $formArray['status'] = $this->input->post('status');
                if(date_default_timezone_set("Asia/Karachi")){
                    $date = date("Y-m-d H:i:s");  
                    $formArray['created_at']= $date;
                }
                $this->Category_model->create($formArray);
                // this code for sweetalert showing code start
                $_SESSION['status'] = "Category has been added.";
                $_SESSION['status_code'] = "success";
                // this code for sweetalert showing code end
    
                redirect(base_url().'admin/category/index');
            }
        }else{
            $this->load->view('admin/category/create');
        }
    }
    
    //this method will show  data of a single record in edit form
    public function edit($id){
        $this->load->model('Category_model');
        $res = $this->Category_model->getCategory($id);
        if(empty($res)){
            $_SESSION['status'] = "Category not found!";
            $_SESSION['status_code'] = "warning";
            redirect(base_url().'admin/category/index');
        }
        $this->load->helper('common_helper');

        $config['upload_path']          = './public/uploads/category/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']          = TRUE;

        $this->load->library('upload', $config);

        $this->form_validation->set_error_delimiters('<p class="invalid_feedback">','</p>');
        $this->form_validation->set_rules('name','Name','required');
        if($this->form_validation->run() == true){  

            if(!empty($_FILES['image']['name'])){
                //now user has selected a file we will proceed
                if($this->upload->do_upload('image')){
                    //image  uploaded successfully, now we will store it in the database
                    $data = $this->upload->data();

                    //resizing part ... resizeImage method create in common helper file
                    resizeImage($config['upload_path'].$data['file_name'],
                                $config['upload_path'].'thumb/'.$data['file_name'],
                                300,270);

                    $formArray['image'] = $data['file_name'] ;
                    $formArray['name'] = $this->input->post('name');
                    $formArray['status'] = $this->input->post('status');
                    if(date_default_timezone_set("Asia/Karachi")){
                        $date = date("Y-m-d H:i:s");  
                        $formArray['updated_at']= $date;
                    }
                    $this->Category_model->update($id,$formArray);
                    
                    if(file_exists('./public/uploads/category/' . $res['image'])) {
                        unlink('./public/uploads/category/' . $res['image']);
                        unlink('public/uploads/category/thumb/' . $res['image']);
                    }
                    

                    // this code for sweetalert showing code start
                    $_SESSION['status'] = "Category updated Successfully.";
                    $_SESSION['status_code'] = "success";
                    // this code for sweetalert showing code end
        
                    redirect(base_url().'admin/category/index');
                    
                }else{
                    // there was an error uploading the image.
                    $error = $this->upload->display_errors();
                    $data['errorImageUpload'] = $error;
                    $data['res'] = $res;
                    $this->load->view('admin/category/edit',$data);    
                }
            }else{
                //we will create category  without image
                $formArray['name'] = $this->input->post('name');
                $formArray['status'] = $this->input->post('status');
                if(date_default_timezone_set("Asia/Karachi")){
                    $date = date("Y-m-d H:i:s");  
                    $formArray['updated_at']= $date;
                } 
                $this->Category_model->update($id,$formArray);
                // this code for sweetalert showing code start
                $_SESSION['status'] = "Category updated Successfully.";
                $_SESSION['status_code'] = "success";
                // this code for sweetalert showing code end
    
                redirect(base_url().'admin/category/index');
            }
    }else{
        $data['res'] = $res;
        $this->load->view('admin/category/edit',$data);
    }
    
 }
 public function delete($id){
        $this->load->model('Category_model');
        $res = $this->Category_model->getCategory($id);
        if(empty($res)){
            $_SESSION['status'] = "Category not found!";
            $_SESSION['status_code'] = "warning";
            redirect(base_url().'admin/category/index');
        }
        if(file_exists('./public/uploads/category/' . $res['image'])) {
            unlink('./public/uploads/category/' . $res['image']);
            unlink('public/uploads/category/thumb/' . $res['image']);
        }

        $this->Category_model->delete($id);
        // this code for sweetalert showing code start
        $_SESSION['status'] = "Category Deleted Successfully.";
        $_SESSION['status_code'] = "success";
        // this code for sweetalert showing code end
        redirect(base_url().'admin/category/index');
    }
}

?>