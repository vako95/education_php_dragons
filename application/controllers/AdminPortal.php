<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPortal extends CI_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AccountModel');
        $is_logged_in =  $this->AccountModel->is_user_logged_in();

        if ($is_logged_in) {
            if ($_SESSION['role'] != USER_ROLE_ADMIN && $_SESSION['role'] != USER_ROLE_MANAGER)
             {
                redirect('admin_cover_index');
            }
        } else {
            redirect('admin_cover_index');
        }
        $this->load->model('User_Model');
        $id = $_SESSION['user_id'];
        if(!$this->User_Model->is_user_still_active($id))
        {
            redirect('admin_logout');
        }
        $this->data['profile'] = $this->User_Model->get_profile_information($id);
    }

    public function index()
    {
        $this->visitors_list();
        // $this->load->view('admin/login_page/visitor_portal/index');

    }

    public function users_list()
    {
        if ($this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->load->model('User_Model');
        $this->data['result'] = $this->User_Model->get_all_active_users();
        $this->load->view('admin/login_page/admin_portal/users_list',  $this->data);
    }

    public function users_list_deactivated()
    {
        if ($this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->load->model('User_Model');
        $this->data['result'] = $this->User_Model->get_all_deactivated_users();
        $this->load->view('admin/login_page/admin_portal/users_list_deactivated',  $this->data);
    }

    public function visitors_list()
    {
        $this->load->model('User_Model');
        $this->data['result'] = $this->User_Model->get_all_active_visitors();

        $this->load->view('admin/login_page/admin_portal/visitors_list',  $this->data);
    }

    public function visitors_list_deactivated()
    {
        $this->load->model('User_Model');
        $this->data['result'] = $this->User_Model->get_all_deactivated_visitors();
        $this->load->view('admin/login_page/admin_portal/visitors_list_deactivated',  $this->data);
    }

    public function add_user()
    {
        if ($this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->_add_user_submit();

        $this->load->view('admin/login_page/admin_portal/add_user',  $this->data);
    }

    public function _add_user_submit()
    {
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');


            if ($this->form_validation->run() != FALSE) {

                $this->load->model('User_Model');
                $response =  $this->User_Model->save_post_record_admin();
                if ($response) {
                    $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla elave edildi.');
                } else {
                    $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
                }
                redirect('admin_add_user');
            }
        }
    }

    public function edit_user($id = '')
    {
        if ($this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->load->model('User_Model');
        if (!$this->User_Model->is_user_exist($id)) {
            redirect('admin_users_list');
        }

        $this->_edit_user_submit();

        $this->data['user'] =  $this->User_Model->get_user($id);

        $this->load->view('admin/login_page/admin_portal/edit_user',  $this->data);
    }

    public function _edit_user_submit()
    {
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');


            if ($this->form_validation->run() != FALSE) {

                $this->load->model('User_Model');
                $response =  $this->User_Model->update_post_record_admin();
                if ($response) {
                    $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla yenilendi .');
                } else {
                    $this->session->set_flashdata('error', 'Melumat Yenilenmedi!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
                redirect(base_url('admin_users_list'));
            }
        }
    }

    public function deactivate_user($id  = '')
    {
        if ( $this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->load->model('User_Model');
        if (!$this->User_Model->is_user_exist($id)) {
            redirect('admin_users_list');
        }
        if ($id == $_SESSION['user_id']) {
            redirect('admin_users_list');
        }

        $response =  $this->User_Model->deactivate_user($id);
        if ($response) {
            $this->session->set_flashdata('success', 'Təbriklər! Istifadeci deactivlesdi.');
        } else {
            $this->session->set_flashdata('error', 'Istifadeci deactiv edilmedi!');
        }
        redirect('admin_users_list');
    }

    public function reactivate_user($id = '')
    {
        
        if ($this->data['profile']->role != USER_ROLE_ADMIN) {
            redirect('admin_visitors_list');
        }
        $this->load->model('User_Model');
        if (!$this->User_Model->is_user_exist($id)) {
            redirect('admin_users_list_deactivated');
        }
        $this->load->model('User_Model');
        $response =  $this->User_Model->reactivate_user($id);
        if ($response) {
            $this->session->set_flashdata('success', 'Təbriklər! Istifadeci reactiv olundu.');
        } else {
            $this->session->set_flashdata('error', 'Istifadeci reactiv edilmedi!');
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect('admin_users_list_deactivated');
    }

    public function deactivate_visitor($id  = '')
    {
        $this->load->model('User_Model');
        if (!$this->User_Model->is_user_exist($id)) {
            redirect('admin_visitors_list');
        }




        $response =  $this->User_Model->deactivate_user($id);
        if ($response) {
            $this->session->set_flashdata('success', 'Təbriklər! Istifadeci deactivlesdi.');
        } else {
            $this->session->set_flashdata('error', 'Istifadeci deactiv edilmedi!');
        }
        redirect('admin_visitors_list');
    }

    public function reactivate_visitor($id = '')
    {
        $this->load->model('User_Model');
        if (!$this->User_Model->is_user_exist($id)) {
            redirect('admin_visitors_list_deactivated');
        }
        $this->load->model('User_Model');
        $response =  $this->User_Model->reactivate_user($id);
        if ($response) {
            $this->session->set_flashdata('success', 'Təbriklər! Istifadeci reactiv olundu.');
        } else {
            $this->session->set_flashdata('error', 'Istifadeci reactiv edilmedi!');
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect('admin_visitors_list_deactivated');
    }
}
