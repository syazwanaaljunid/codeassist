<?php /**
 *
 */
class Jururawat_model extends CI_Model
{

  public function tambahPesakitBaharu($data1, $data2){

    $this->db->trans_start();

      $sql1 = $this->db->insert('tbl_user', $data1);

      $id = $this->db->insert_id();

      $data2 += array('userId' => $id);

      $sql2 = $this->db->insert('tbl_peribadi', $data2);

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE){
      return false;
    } else {
      return true;
    }
  }

}
 ?>
