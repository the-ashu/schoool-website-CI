<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('webnav');
        $this->load->view('home');
        $this->load->view('webfooter');

	}

	public function _admin(){
        $this->load->view('navbar');
        $this->load->view('studReg.php');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function loginCheck(){
        $submit=$this->input->post('Submit',TRUE);
        if ($this->session->userdata('admin_logged_in')){
            $this->_admin();
        }
        else if ($submit=="Submit"){
            $un=$this->input->post('userName',TRUE);
            $pwd=$this->input->post('passwordinput',TRUE);
            if ($un=="ips" && $pwd=="IPS@sultanpur"){
                $sessiondata = array(
                    //get user id here
                    'admin_id'=>$pwd,
                    'username' => $un,
                    'admin_logged_in' => TRUE
                );
                $this->session->set_userdata($sessiondata);
                $this->_admin();
            }
            else{
                echo "<script language=\"javascript\">alert('Please login with correct details');</script>";
                $this->adminLogin();
            }
        }
    }
    public function adminLogin(){
        $this->load->view('adminLogin');
    }

}
