<?php

/**
 *
 */
class Pesakit extends CI_Controller{

    public function index(){
      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Doktor':
          redirect('doktor');
            break;
          case 'Jururawat':
          redirect('jururawat');
            break;
          default:
            redirect('pesakit/utama');
            break;
        }

      } else{
        redirect('landing');
      }

    }

    public function utama(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Doktor':
          redirect('doktor');
            break;
          case 'Jururawat':
          redirect('jururawat');
            break;
          default:
            $this->load->view('module_pesakit/utama');
            break;
        }

      } else{
        redirect('landing');
      }
    }

    public function paparanMaklumatPesakit(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Doktor':
          redirect('doktor');
            break;
          case 'Jururawat':
          redirect('jururawat');
            break;
          default:
            $this->load->view('module_pesakit/paparanMaklumatPesakit');
            break;
        }

      } else{
        redirect('landing');
      }
    }
    public function paparanKosRawatan(){

      if ($this->session->userdata('userId')) {

        switch ($this->session->userdata('userRole')) {
          case 'Doktor':
          redirect('doktor');
            break;
          case 'Jururawat':
          redirect('jururawat');
            break;
          default:
            $this->load->view('module_pesakit/paparanKosRawatan');
            break;
        }

      } else{
        redirect('landing');
      }
    }
}

?>
