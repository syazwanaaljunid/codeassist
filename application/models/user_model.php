<?php
class User_model extends CI_Model
{

  public function checkUser($email, $pass){

    $sql = $this->db->where('email', $email)->get('tbl_user')->row();

    $role = $sql->userRole;

    if ($role == "Jururawat") {
      $sql2 = $this->db->select('jururawatId as roleId')->where('userId', $sql->userId)->get('tbl_jururawat')->row();
    }

    if ($role == "Doktor") {
      $sql2 = $this->db->select('doktorId as roleId')->where('userId', $sql->userId)->get('tbl_doktor')->row();
    }

    if ($role == "Pesakit") {
      $sql2 = $this->db->select('pesakitiId as roleId')->where('userId', $sql->userId)->get('tbl_peribadi')->row();
    }

    $new_sql = (Array)$sql;
    $new_sql2 = (Array)$sql2;

    $new_sql += $new_sql2;


    $check = similar_text($sql->pass, $pass, $per);

    if ($per == 100) {
      return (Object)$new_sql;
    } else {
      return false;
    }

  }

  // public function get($userId = null)
  // {
  //   if ($userId === null){
  //     $q = $this->db->get('tbl_user');
  //   } elseif(is_array($userId)){
  //     $q = $this->db->get_where('tbl_user',$userId);
  //   } else{
  //     $q = $this->db->get_where(['userId' => $userId])->get('tbl_user');
  //
  //   }
  //     return $q->result_array();
  // }

  // @param array $data
  // @usage $result = $this->user_model->insert([
  //   'email' => 'Jethro@gmail.com'
  // ]);
  public function insert($data)
  {
    $this->db->insert('tbl_user',$data);
    return $this->db->insert_id();
  }
  // $result = $this->user_model->update([
  //   'email' => 'syazwan@gmail.com'
  // ], 3);
  public function update($data,$userId)
  {
    $this->db->where(['userId' =>$userId]);
    $this->db->update('tbl_user',$data);
    return $this->db->affected_rows();

  }
      // @usage $result = $this->user_model->delete(2);
  public function delete($userId)
  {
    $this->db->where('userId', $userId)->delete('tbl_user');
    return $this->db->affected_rows();
  }

  }






 ?>
