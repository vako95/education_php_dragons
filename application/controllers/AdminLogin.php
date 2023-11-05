<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
        $is_logged_in =  $this->AccountModel->is_user_logged_in();

        if (!$is_logged_in) {
           
        }
    }



    public function cover_index()
    {
        $this->load->view('admin/login_page/cover_header/cover_header');
        $this->load->view('admin/login_page/cover_index');
        $this->load->view('admin/login_page/cover_header/cover_footer');
    }
    public function cover_registration()
    {
        $this->_registration_submit();

        $this->load->view('admin/login_page/cover_header/cover_header');
        $this->load->view('admin/login_page/cover_registration');
        $this->load->view('admin/login_page/cover_header/cover_footer');
    }
    public function _registration_submit()
    {
        if ($this->input->post('submit'))
         {

            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');


            if ($this->form_validation->run() != FALSE) {

                $this->load->model('User_Model');
                $response =  $this->User_Model->save_post_record();
                if ($response) {
                    $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla elave edildi.');
                } else {
                    $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
                redirect(base_url('admin_cover_registration'));
            }
        }
    }
    public function cover_login()
    {
        $this->_login_submit();
        $this->load->view('admin/login_page/cover_header/cover_header');
        $this->load->view('admin/login_page/cover_login');
        $this->load->view('admin/login_page/cover_header/cover_footer');
    }

    public function _login_submit()
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() != FALSE) {

                $this->load->model('AccountModel');
                $response =  $this->AccountModel->verify_login();
                if ($response) {
                    if(isset($_SESSION['role']) && ($_SESSION['role'] == USER_ROLE_ADMIN || $_SESSION['role'] == 
                    USER_ROLE_MANAGER))
                    {
                        redirect('AdminPortal');
                    }else{
                        redirect('admin_visitor_index');
                    }
                   
                   
                } else {
                    $this->session->set_flashdata('error', 'Unkown Account!');
                    redirect('admin_cover_login');
                } 
            }
        }
    }


    public function logout()

    {

        $this->load->model('AccountModel');
        $this->AccountModel->logout();
        redirect('admin_cover_login');
    }

    public function prosses()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'requried');
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('success', 'Berhasil melakukan input data');
        } else {
            $this->session->set_flashdata('error', 'Yeniden yoxlayin');
        }
        redirect('sweet_alert');
    }
}
