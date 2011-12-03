<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function index()
	{

		$videos = Videos::find('all', array('order' => 'RAND()', 'limit' => 1));
		
		foreach ($videos as $video) {
			$data['video_id'] = $video->id;
			$data['video_location'] = $video->video_location;
			$data['video_company_id'] = $video->business->id;
			$data['video_company_name'] = $video->business->company_name;
			$data['video_company_address'] = $video->business->address;
			$data['video_company_citystatezip'] = $video->business->city . "," . $video->business->state . " " . $video->business->zipcode;
			$data['video_company_phone'] = $video->business->phone;
		}
		
        $data['css_files'] = array('tle.frontpage.css');
        $data['js_files'] = array('tle.frontpage.js');
		$this->load->view('frontpage/index', $data);
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
