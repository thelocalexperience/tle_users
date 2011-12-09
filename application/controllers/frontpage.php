<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function index()
	{
        //$business_new = Business::create(array(
        //    'client_id' => 36,
        //    'area_id' => 1,
        //    'company_name' => "Foo Bar",
        //    'hours' => 'mon-fri 8-10pm',
        //    'address' => '333 test st.',
        //    'city' => 'Melbourne',
        //    'state' => 'FL',
        //    'zipcode' => '3333',
        //    'phone' => '321-555-5555',
        //    'c_name' => 'Joey',
        //    'c_number' => '321-222-2222',
        //    'c_title' => 'CEO',
        //    'tags_listing' => 'Lounge',
        //    'tags_profile' => 'test1,test2,test3',
        //    'tags_admin' => '',
        //    'image_listing' => 'examples_listing-pic.jpg',
        //    'image_logo' => 'image2',
        //    'categories' => '4',
        //    'modules' => '1,2,3,4',
        //    'website' => 'http://www.test.com',
        //    'social' => 'fb=>http://www.facebook.com,tw=>http:/www.twitter.com',
        //    'localstory' => 'lorem ipsum blah blah blah'
        //));
        
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
