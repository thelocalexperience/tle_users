<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function index()
	{
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
		
		$this->load->view('frontpage/index', $data);
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
