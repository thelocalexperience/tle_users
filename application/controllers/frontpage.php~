<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends CI_Controller {

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
		$this->load->spark('php-activerecord/0.0.2');
		
		$videos = Videos::find('all', array('order' => 'RAND()', 'limit' => 1));
		
		foreach ($videos as $video) {
			$data['tlelive_video_id'] = $video->id;
			$data['tlelive_video_location'] = $video->video_location;
			$data['tlelive_video_company_id'] = $video->business->id;
			$data['tlelive_video_company_name'] = $video->business->company_name;
			$data['tlelive_video_company_address'] = $video->business->address;
			$data['tlelive_video_company_citystatezip'] = $video->business->city . "," . $video->business->state . " " . $video->business->zipcode;
			$data['tlelive_video_company_phone'] = $video->business->phone;
		}
		
		$this->load->view('frontpage', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */