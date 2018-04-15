<?php
class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    // echo $email. " ". $password;

    $result = $this->user_model->checkUser($email, $password);

    if ($result != false) {

      $userData = array(
        'userId' => $result->userId,
        'firstName' => $result->firstName,
        'lastName' => $result->lastName,
        'userRole' => $result->userRole,
        'email' => $result->email,
        'roleID' => $result->roleId
      );

      $this->session->set_userdata($userData);

      $role = $this->session->userdata('userRole');

      switch ($role) {
        case 'Doktor':
          redirect('doktor');
          break;
        case 'Jururawat':
          redirect('jururawat');
          break;
        default:
          redirect('pesakit');
          break;
      }

    } else {
      $this->session->set_flashdata('error_login', "Email does not exist or incorrect password!");
      redirect('landing');
    }

  }
  public function get()
  {
  $data =  $this->user_model->get(3);
    print_r($data);
  }
  public function insert()
  {
    $result = $this->user_model->insert([
      'email' => 'Jethro@gmail.com'
    ]);
      print_r($result);
  }
  public function update()
  {
      $result = $this->user_model->update([
        'email' => 'syazwan@gmail.com'
      ], 3);
      print_r($result);
  }
  public function delete()
  {
    $result = $this->user_model->delete(6);
    print_r($result);
  }

  }

?>
