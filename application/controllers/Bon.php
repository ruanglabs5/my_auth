<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_logged();
		superadmin_coba_masuk();
		
		$this->load->model('m_bon');
		$this->load->model('m_surat');
		$this->load->helper('date');
	}

	public function index()
	{
		$data['data'] = $this->m_bon->ambil_bon();
        $this->template->load('pages/template/template','pages/bon/bon_balasan/content', $data);
	}

	public function form_bon()
	{
		$data['page'] = 'Entry';
		$data['action'] = 'add';
        $this->template->load('pages/template/template','pages/bon/form_bon/content', $data);
	}

	public function edit($id)
	{
		$data['data'] = $this->m_bon->riwayat_bon(base64_decode($id));
		$data['page'] = 'Edit';
		$data['action'] = 'edit';
        $this->template->load('pages/template/template','pages/bon/form_bon/content', $data);
	}

	public function riwayat_bon()
	{
		$data['data'] = $this->m_bon->riwayat_bon();
        $this->template->load('pages/template/template','pages/bon/riwayat_bon/content', $data);
	}

	public function simpan()
	{
		if ($this->input->post('add')) {
			
		$this->form_validation->set_rules('nama_tersangka','Nama tersangka','required', array('required' => 'Nama tersangka tidak Boleh Kosong!'));
		$this->form_validation->set_rules('file_pengajuan_bon', '', 'callback_file_pengajuan_bon');
        $this->form_validation->set_error_delimiters('<p class="validate" style="color:red;"><i class="fa fa-exclamation-circle"></i> ','</p>');

			if ($this->form_validation->run() == FALSE) 
			{
				$data['page'] = 'Entry';
				$data['action'] = 'add';
		        $this->template->load('pages/template/template','pages/bon/form_bon/content', $data);
			}
			else
			{
				$config['upload_path']          = './uploads/bon';
				$config['allowed_types']        = 'jpg|pdf|doc|docx';
				$config['max_size']             = 1000;

				$this->load->library('upload', $config);
		
				if (!empty($this->upload->do_upload('file_pengajuan_bon')))
				{
					$file_pengajuan_bon = $this->upload->data();
				}
				else
				{	
									
		            $this->m_pesan->generatePesan('salah', 'file bon tidak boleh lebih dari 1 MB!');
					redirect('bon/form_bon');			
				}
				
					$post = $this->input->post(NULL, TRUE);
					$data = array('id_users_pemohon' 		=> $this->session->userdata('id'),
								  'nama_tersangka'			=> $post['nama_tersangka'],
								  'file_pengajuan_bon'		=> $file_pengajuan_bon['file_name'],
								  'keterangan'				=> $post['keterangan']);

				$this->m_bon->simpan($data);	
	            $this->m_pesan->generatePesan('berhasil', 'Bon telah di simpan dan terkirim!');
				redirect('bon/form_bon');			
			}
		}
		if ($this->input->post('edit')) {
			$this->form_validation->set_rules('nama_tersangka','Nama tersangka','required', array('required' => 'Nama tersangka tidak Boleh kosong.'));
			$this->form_validation->set_rules('file_pengajuan_bon', '', 'callback_file_pengajuan_bon');
	        $this->form_validation->set_error_delimiters('<p class="validate" style="color:red;"><i class="fa fa-exclamation-circle"></i> ','</p>');

			if ($this->form_validation->run() == FALSE) 
			{
				$this->edit($this->input->post('id_bon'));
			}
			else
			{
				$config['upload_path']          = './uploads/bon';
				$config['allowed_types']        = 'pdf|doc|docx|jpg';
				$config['max_size']             = 0;
				$config['max_width']            = 0;
				$config['max_height']           = 0;

				$this->load->library('upload', $config);
				
				$post = $this->input->post(NULL, TRUE);
				
				if ($_FILES['file_pengajuan_bon']['name']) 
	            {
	                if ($this->upload->do_upload('file_pengajuan_bon'))
	                {
						$file_pengajuan_bon = $this->upload->data('file_name');
	                    $this->db->set('file_pengajuan_bon', $file_pengajuan_bon);
	                    @unlink('./uploads/bon/'. $post['old_bon']);
	                }
	            }
	      
				$data = array('nama_tersangka' => $post['nama_tersangka'], 'keterangan' => $post['keterangan']);
				$this->m_bon->ubah($data);	
				$this->m_pesan->generatePesan('berhasil', 'Bon telah di update!');
				redirect(base_url('bon/edit/'.base64_encode($post['id_bon'])));			
			}
		}
	}

	public function file_pengajuan_bon($str)
	{
        if ($this->input->post('edit')) 
        {
        	$allowed_mime_type_arr = array('application/pdf', 'application/msword');
	        $mime = get_mime_by_extension($_FILES['file_pengajuan_bon']['name']);
        
	        if($_FILES['file_pengajuan_bon']['name'])
	        {
	            if(in_array($mime, $allowed_mime_type_arr))
	            {
	                return true;
	            }
	            else
	            {
	                $this->form_validation->set_message('file_pengajuan_bon', 'Pilih file bon hanya word atau pdf.');
	                return false;
	            }
	        }
        }
        else if ($this->input->post('add')) 
        {
	        $allowed_mime_type_arr = array('application/pdf', 'application/msword','image/gif','image/jpeg','image/png','image/jpg');
	        $mime = get_mime_by_extension($_FILES['file_pengajuan_bon']['name']);
	        if($_FILES['file_pengajuan_bon']['name'])
	        {
	            if(in_array($mime, $allowed_mime_type_arr))
	            {
	                return true;
	            }
	            else
	            {
	                $this->form_validation->set_message('file_pengajuan_bon', 'Pilih file pengajuan bon hanya word atau pdf.');
	                return false;
	            }
	        }
        	$this->form_validation->set_message('file_pengajuan_bon', 'file pengajuan bon tidak boleh kosong.');
            return false;
        }
    }

    public function get_autocomplete()
	{
		$get = $this->input->get('term', TRUE);
		if (isset($get)) {
		  	$result = $this->m_bon->autocomplete_bon($get);
		   	if (count($result) > 0) 
		   	{
		    	foreach ($result as $row)
		     		
		     	$arr_result[] = array(
					'label'	=> $row->nama_tersangka,
					'pasal'	=> $row->pasal

				);
		     	echo json_encode($arr_result);	
		   	}
		}
	}	

	public function hapus($id)
    {   
        $file = $this->m_bon->ambil_bon($id);
        @unlink('./uploads/bon/'. $file->file_pengajuan_bon);

        $hapus = $this->m_bon->hapus($id);
        if ($hapus = TRUE) 
        {
			$this->m_pesan->generatePesan('berhasil', 'Bon telah di hapus!');
            redirect('bon/riwayat_bon');
        }
    }

    public function unduh_riwayat()
    {
    	$this->load->helper('download');
		if($this->uri->segment(3))
		{
    		$data = 'uploads/bon/'.$this->uri->segment(3); 
		}
		else
		{
			show_404();
		}
	
		force_download($data, null);
    }
    
  	public function unduh()
    {
    	$this->load->helper('download');
		if($this->uri->segment(3))
		{
    		$data = 'uploads/lapas/bon/'.$this->uri->segment(3); 
		}
		else
		{
			show_404();
		}
	
		force_download($data, null);
    }
}