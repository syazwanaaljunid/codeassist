<?php

/**
 *
 */
class Jururawat extends CI_Controller{

  public function index(){

    if ($this->session->userdata('userId')) {

      switch ($this->session->userdata('userRole')) {
        case 'Doktor':
        redirect('doktor');
          break;
        case 'Pesakit':
        redirect('pesakit');
          break;
        default:
          redirect('jururawat/dashboard');
          break;
      }

    } else{
      redirect('landing');
    }

  }

  public function dashboard(){

    if ($this->session->userdata('userId')) {

      switch ($this->session->userdata('userRole')) {
        case 'Doktor':
        redirect('doktor');
          break;
        case 'Pesakit':
        redirect('pesakit');
          break;
        default:
          $this->load->view('module_jururawat/dashboard');
          break;
      }

    } else{
      redirect('landing');
    }
  }

  public function senaraiPesakit(){

    if ($this->session->userdata('userId')) {

      switch ($this->session->userdata('userRole')) {
        case 'Doktor':
        redirect('doktor');
          break;
        case 'Pesakit':
        redirect('pesakit');
          break;
        default:
          $this->load->view('module_jururawat/senaraiPesakit');
          break;
      }

    } else{
      redirect('landing');
    }
  }

  public function pesakitBaharu(){

    if ($this->session->userdata('userId')) {

      switch ($this->session->userdata('userRole')) {
        case 'Doktor':
        redirect('doktor');
          break;
        case 'Pesakit':
        redirect('pesakit');
          break;
        default:
          $this->load->view('module_jururawat/pesakitBaharu');
          break;
      }

    } else{
      redirect('landing');
    }
  }

  public function prosesPesakitBaharu(){

    $nama1 = $this->input->post('pb-nama1');
    $nama2 = $this->input->post('pb-nama2');
    $ic = $this->input->post('pb-ic');
    $tarikhLahir = $this->input->post('pb-tlh');
    $email = $this->input->post('pb-em');
    $telefon = $this->input->post('pb-tlf');
    $mrn = $this->input->post('pb-mrn');
    $berat = $this->input->post('pb-brt');
    $jantina = $this->input->post('pb-jnt');
    $insurans = $this->input->post('pb-ins');
    $jururawatId = $this->input->post('pb-jid');
    $umur = $this->input->post('pb-umu');
    $umurHari = $this->input->post('pb-umuD');

    $data_table_user = array(
      'firstName' => $nama1,
      'lastName' => $nama2,
      'userRole' => "Pesakit",
      'email' => $email,
      'noPhone' => $telefon
    );

    $data_table_peribadi = array(
      'icPesakit' => $ic,
      'noInsurans' => $insurans,
      'noMrn' => $mrn,
      'jantina'=> $jantina,
      'tarikhLahir' => $tarikhLahir,
      'jururawatId' => $jururawatId,
      'umur' => $umur,
      'umurHari' => $umurHari,
      'berat' =>$berat
    );

    $newPesakit = $this->jururawat_model->tambahPesakitBaharu($data_table_user, $data_table_peribadi);

    if ($newPesakit == true) {

      $this->session->set_flashdata('statusTambahPesakit', 'berjaya');

    } else {

      $this->session->set_flashdata('statusTambahPesakit', 'gagal');

    }

    redirect('jururawat/pesakitBaharu');

  }
}

?>
