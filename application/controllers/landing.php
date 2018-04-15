<?php

/**
 *
 */
class Landing extends CI_Controller
{

  public function index(){

    if ($this->session->userdata('userId')) {

      switch ($this->session->userdata('userRole')) {
        case 'Jururawat':
        redirect('jururawat');
          break;
        case 'Pesakit':
        redirect('pesakit');
          break;
        default:
          redirect('doktor');
          break;
      }

    } else{
      $this->load->view('no_login/login');
    }

  }

  // Login pusposes
  public function do_login(){
    $uname = $this->input->post('username');
    $pwrd = $this->input->post('password');

    $user_exist = $this->user_model->checkUser($uname, $pwrd);

    if ($user_exist == false) {
      $this->session->set_flashdata('error', 'User does not exist!');
      redirect('landing');
    } else {


      # code...
    }

  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('landing');
  }

  // public function test(){
  //   $q = $this->db->where('userId', 2)->get('tbl_user');
  //   print_r($q->row());
  // }

}

 ?>
