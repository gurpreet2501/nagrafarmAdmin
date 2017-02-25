<?php defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models;
class Report extends MY_Controller
{
       
    public function index()
    {

    	$t = "SELECT storage.id,storage.bags, storage.chamber,storage.dispatch, potatoes.name, records.Stacker, records.owner, records.cnumber as customer_no, records.condition FROM `storage` left join `potatoes` on storage.potato_type=potatoes.id left join `records` on storage.record_id=records.id where storage.date >= '2016-01-02 00:00:00' AND storage.date <= '2016-01-04 00:00:00'";

      $query = $this->db->query($t);
           
      $data = $query->result_array();
       
      $this->load->view('custom-crud',[
            'template' => 'admin/report',
            'data' => $data
            ]);
    }

}
