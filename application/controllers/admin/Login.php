<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function index() {
        $this->load->library('form_validation');
        $this->load->view( 'admin/login' );
    }
    public function authenticate(){
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        
        $this->form_validation->set_error_delimiters('<p class="invalid_feedback">','</p>');
        $this->form_validation->set_rules( 'username', 'Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required'); 

        if($this->form_validation->run() == true){
            $username = $this->input->post('username');
            $admin = $this->Admin_model->getbyusername($username);
            if(!empty($admin)){
                $password = $this->input->post('password');
                if(password_verify($password , $admin['password']) == true){
                    $admin_array['admin_id'] = $admin['id'];
                    $admin_array['username'] = $admin['username'];
                    $this->session->set_userdata('admin',$admin_array);
                    redirect(base_url().'admin/home/index');
                }else{
                    $this->session->set_flashdata('msg','Either username and password is incorrect');
                    redirect(base_url().'admin/login/index');
                }
            }else{
                $this->session->set_flashdata('msg','Either username and password is incorrect');
                redirect(base_url().'admin/login/index');
            }
        }else{
            $this->load->view( 'admin/login' );
        }
}
    public function logout(){
        $this->session->unset_userdata('admin');
        redirect(base_url().'admin/login/index');
    }
}
?>
        