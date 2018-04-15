<?php

/**
 *
 */
class Doktor extends CI_Controller{

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
            redirect('doktor/dashboard');
            break;
        }

      } else{
        redirect('landing');
      }

    }

    public function dashboard(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Pesakit':
          redirect('pesakit');
            break;
          case 'Jururawat':
          redirect('jururawat');
            break;
          default:
            $this->load->view('module_doktor/dashboard');
            break;
        }

      } else{
        redirect('landing');
      }
    }

    public function senaraiPesakit(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Jururawat':
          redirect('jururawat');
            break;
          case 'Pesakit':
          redirect('pesakit');
            break;
          default:
            $this->load->view('module_doktor/senaraiPesakit');
            break;
        }

      } else{
        redirect('landing');
      }

    }
    public function pesakitBaharu(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Jururawat':
          redirect('jururawat');
            break;
          case 'Pesakit':
          redirect('pesakit');
            break;
          default:
            $this->load->view('module_doktor/pesakitBaharu');
            break;
        }

      } else{
        redirect('landing');
      }

    }
    public function kosRawatan(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Jururawat':
          redirect('jururawat');
            break;
          case 'Pesakit':
          redirect('pesakit');
            break;
          default:
            $this->load->view('module_doktor/kosRawatan');
            break;
        }

      } else{
        redirect('landing');
      }

    }

}

?>
