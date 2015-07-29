<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->Model("user_model");
		$data = array (
			"students" => $this->user_model->get_all_students()
		);
		$this->load->view('welcome_message', $data);
	}
	public function update()
	{
		$this->load->Model("user_model");
		$data = $this->input->post('data');
		$this->user_model->update_students($data);
		$students = $this->user_model->get_all_students();
		echo(json_encode($students));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */