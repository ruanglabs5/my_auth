<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_message extends CI_Model 
{
    public function generateMessage($type, $message) 
    {

        if ($type == "success") 
        {
            $str = '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    '.$message.'</div>';
        } 
        elseif($type == "wrong") 
        {
            $str = '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="fa fa-times" aria-hidden="true"></i> Opps!</h4>'.$message.
                    '</div> ';
        }

        elseif($type == "logout") 
        {
            $str = '<div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Thank You!</h4>'.$message.
                    '</div> ';
        }

        elseif($type == "logged_in") 
        {
            $str = '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Thank You!</h4>'.$message.
                    '</div> ';
        }

        elseif($type == "blocked") 
        {
            $str = '<div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Opps!</h4>'.$message.
                    '</div> ';
        }
        
        $this->session->set_flashdata('msgbox', $str);              
    }
}

