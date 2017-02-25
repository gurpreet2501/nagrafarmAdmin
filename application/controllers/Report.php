<?php defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models;
class Report extends MY_Controller
{
       
    public function index()
    {

        $template = 'admin/report';

        $this->load->view('custom-crud',[
            'template' => $template
            ]);
    }

}
