<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadFiles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$upload_path = $this->input->get('upload_path');
		$file_name = $this->input->get('file_name');
		
		$config['upload_path'] = '../uploads/'.$upload_path;
		$config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf';
		$config['max_size']  = '1000000';

		$config['file_name'] = $file_name;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			echo json_encode(array(
				'mess' => 'fail',
				'err' => $error
			));
		} else {
			$data = array('upload_data' => $this->upload->data());

			$fileData = $this->upload->data();

			echo json_encode(array(
				'mess' => 'ok',
				'data' => $fileData
			));
		}
	}

	public function picture()
	{
		$upload_path = $this->input->get('upload_path');
		$file_name = $this->input->get('file_name');
		
		$config['upload_path'] = '../uploads/'.$upload_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';

		$config['file_name'] = $file_name;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			echo json_encode(array(
				'mess' => 'fail',
				'err' => $error
			));
		} else {
			$data = array('upload_data' => $this->upload->data());

			$fileData = $this->upload->data();

			echo json_encode(array(
				'mess' => 'ok',
				'data' => $fileData
			));
		}
	}

	public function userAvatar()
	{
		$config['upload_path'] = '../uploads/members/avatars/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';

		$config['file_name'] = 'avatar';
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			echo json_encode(array(
				'mess' => 'fail',
				'err' => $error
			));
		} else {
			$data = array('upload_data' => $this->upload->data());

			$dulieuanh = $this->upload->data();

			echo json_encode(array(
				'mess' => 'ok',
				'data' => $dulieuanh
			));
		}
	}

	public function postAvatar()
	{
		$upload_path = $this->input->get('upload_path');
		$file_name = $this->input->get('file_name');

		$config['upload_path'] = '../uploads/'.$upload_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';

		$config['file_name'] = $file_name;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
			echo json_encode(array(
				'mess' => 'fail',
				'err' => $error
			));
		} else {
			$data = array('upload_data' => $this->upload->data());

			$dulieuanh = $this->upload->data();

			echo json_encode(array(
				'mess' => 'ok',
				'data' => $dulieuanh
			));
		}
	}

}

/* End of file Uploads.php */
/* Location: ./application/controllers/Uploads.php */