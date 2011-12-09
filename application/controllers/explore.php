<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Explore extends MY_Controller {

	public function index()
	{
		if ($_POST)
		{
			$area_id = $_POST['area_id'];
			$exploring = $_POST['explore-opt'];
			// Places to eat
			if ($exploring == 1)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('eat-duplicates'); }
				
				$explore_duplicates = "";
				// BREAKFAST
				if ($this->session->userdata('eat-duplicates'))
				{
					$sess_data = $this->session->userdata('eat-duplicates');
					$breakfast = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%1%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$breakfast = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "area_id='$area_id' AND categories LIKE '%1%'"));
				}
				
				foreach ($breakfast as $breakfast_val) {
					$data['breakfast'] = array(
						'id' => $breakfast_val->id,
						'name' => $breakfast_val->company_name,
						'tags' => $breakfast_val->tags_listing,
						'image' => $breakfast_val->image_listing,
						'contact' => $breakfast_val->address . ' - ' . $breakfast_val->phone,
						'map' => str_replace(' ', '+', $breakfast_val->address) . ',+' . $breakfast_val->city . ',+' . $breakfast_val->state
					);
					
					$explore_duplicates .= " AND id != " . $breakfast_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);
				
				// LUNCH
				$sess_data = $this->session->userdata('eat-duplicates');
				$lunch = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%3%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($lunch as $lunch_val) {
					$data['lunch'] = array(
						'id' => $lunch_val->id,
						'name' => $lunch_val->company_name,
						'tags' => $lunch_val->tags_listing,
						'image' => $lunch_val->image_listing,
						'contact' => $lunch_val->address . ' - ' . $lunch_val->phone,
						'map' => str_replace(' ', '+', $lunch_val->address) . ',+' . $lunch_val->city . ',+' . $lunch_val->state
					);
					
					$explore_duplicates .= " AND id != " . $lunch_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);
				
				// DINNER
				$sess_data = $this->session->userdata('eat-duplicates');
				$dinner = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%5%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($dinner as $dinner_val) {
					$data['dinner'] = array(
						'id' => $dinner_val->id,
						'name' => $dinner_val->company_name,
						'tags' => $dinner_val->tags_listing,
						'image' => $dinner_val->image_listing,
						'contact' => $dinner_val->address . ' - ' . $dinner_val->phone,
						'map' => str_replace(' ', '+', $dinner_val->address) . ',+' . $dinner_val->city . ',+' . $dinner_val->state
					);
					
					$explore_duplicates .= " AND id != " . $dinner_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);

				$data['css_files'] = array('tle.explore.css');
				$data['js_files'] = array('tle.explore.js');
				$this->load->view('explore/eat', $data);
			}
			
			// Places to have fun
			if ($exploring == 2)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('visit-duplicates'); }
				
				$explore_duplicates = "";
				// MORNING
				if ($this->session->userdata('visit-duplicates'))
				{
					$sess_data = $this->session->userdata('visit-duplicates');
					$morning = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%2%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$morning = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "area_id='$area_id' AND categories LIKE '%2%'"));					
				}
				
				foreach ($morning as $morning_val) {
					$data['morning'] = array(
						'id' => $morning_val->id,
						'name' => $morning_val->company_name,
						'tags' => $morning_val->tags_listing,
						'image' => $morning_val->image_listing,
						'contact' => $morning_val->address . ' - ' . $morning_val->phone,
						'map' => str_replace(' ', '+', $morning_val->address) . ',+' . $morning_val->city . ',+' . $morning_val->state
					);
					
					$explore_duplicates .= " AND id != " . $morning_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				// AFTERNOON
				$sess_data = $this->session->userdata('visit-duplicates');
				$afternoon = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%4%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($afternoon as $afternoon_val) {
					$data['afternoon'] = array(
						'id' => $afternoon_val->id,
						'name' => $afternoon_val->company_name,
						'tags' => $afternoon_val->tags_listing,
						'image' => $afternoon_val->image_listing,
						'contact' => $afternoon_val->address . ' - ' . $afternoon_val->phone,
						'map' => str_replace(' ', '+', $afternoon_val->address) . ',+' . $afternoon_val->city . ',+' . $afternoon_val->state
					);
					
					$explore_duplicates .= " AND id != " . $afternoon_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				// NIGHTTIME
				$sess_data = $this->session->userdata('visit-duplicates');
				$night = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%6%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($night as $night_val) {
					$data['night'] = array(
						'id' => $night_val->id,
						'name' => $night_val->company_name,
						'tags' => $night_val->tags_listing,
						'image' => $night_val->image_listing,
						'contact' => $night_val->address . ' - ' . $night_val->phone,
						'map' => str_replace(' ', '+', $night_val->address) . ',+' . $night_val->city . ',+' . $night_val->state
					);
					
					$explore_duplicates .= " AND id != " . $night_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				$data['css_files'] = array('tle.explore.css');
				$data['js_files'] = array('tle.explore.js');
				$this->load->view('explore/visit', $data);
			}
			
			// Places to go with family
			
			if ($exploring == 3)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('family-duplicates'); }
				
				$explore_duplicates = "";
				// MORNING
				if ($this->session->userdata('family-duplicates'))
				{
					$sess_data = $this->session->userdata('family-duplicates');
					$morning = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%2%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$morning = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "area_id='$area_id' AND tags_admin='family' AND categories LIKE '%2%'"));					
				}
				
				foreach ($morning as $morning_val) {
					$data['morning'] = array(
						'id' => $morning_val->id,
						'name' => $morning_val->company_name,
						'tags' => $morning_val->tags_listing,
						'image' => $morning_val->image_listing,
						'contact' => $morning_val->address . ' - ' . $morning_val->phone,
						'map' => str_replace(' ', '+', $morning_val->address) . ',+' . $morning_val->city . ',+' . $morning_val->state
					);
					
					$explore_duplicates .= " AND id != " . $morning_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				// AFTERNOON
				$sess_data = $this->session->userdata('family-duplicates');
				$afternoon = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%4%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($afternoon as $afternoon_val) {
					$data['afternoon'] = array(
						'id' => $afternoon_val->id,
						'name' => $afternoon_val->company_name,
						'tags' => $afternoon_val->tags_listing,
						'image' => $afternoon_val->image_listing,
						'contact' => $afternoon_val->address . ' - ' . $afternoon_val->phone,
						'map' => str_replace(' ', '+', $afternoon_val->address) . ',+' . $afternoon_val->city . ',+' . $afternoon_val->state
					);
					
					$explore_duplicates .= " AND id != " . $afternoon_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				// NIGHTTIME
				$sess_data = $this->session->userdata('family-duplicates');
				$night = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%6%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($night as $night_val) {
					$data['night'] = array(
						'id' => $night_val->id,
						'name' => $night_val->company_name,
						'tags' => $night_val->tags_listing,
						'image' => $night_val->image_listing,
						'contact' => $night_val->address . ' - ' . $night_val->phone,
						'map' => str_replace(' ', '+', $night_val->address) . ',+' . $night_val->city . ',+' . $night_val->state
					);
					
					$explore_duplicates .= " AND id != " . $night_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				$data['css_files'] = array('tle.explore.css');
				$data['js_files'] = array('tle.explore.js');
				$this->load->view('explore/family', $data);
			}
		} else {
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
	
	private function validatecat($catoption, $area_id)
	{
		$validgo = TRUE;
		if ($catoption == 1)
		{
			// Check Breakfast
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%1%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Lunch
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%3%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Dinner
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%5%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
		}
		
		if ($catoption == 2)
		{
			// Check Morning
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%2%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Afternoon
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%4%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Night
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND categories like '%6%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
		}
		
		if ($catoption == 3)
		{
			// Check Morning
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND tags_admin='family' AND categories like '%2%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Afternoon
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND tags_admin='family' AND categories like '%4%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
			
			// Check Night
			$check_count = Business::find('all', array('conditions' => "area_id='$area_id' AND tags_admin='family' AND categories like '%6%'"));
			if (count($check_count) < 6) { $validgo = FALSE; }
		}
		
		return $validgo;
	}
	
	public function grab()
	{
		if ($_POST)
		{
			$area_id = $_POST['area_id'];
			$exploring = $_POST['explore-opt'];
			// Places to eat
			if ($exploring == 1)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('eat-duplicates'); }
				
				$explore_duplicates = "";
				// BREAKFAST
				if ($this->session->userdata('eat-duplicates'))
				{
					$sess_data = $this->session->userdata('eat-duplicates');
					$breakfast = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%1%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$breakfast = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "area_id='$area_id' AND categories LIKE '%1%'"));
				}
				
				foreach ($breakfast as $breakfast_val) {
					$data['breakfast'] = array(
						'id' => $breakfast_val->id,
						'name' => $breakfast_val->company_name,
						'tags' => $breakfast_val->tags_listing,
						'image' => $breakfast_val->image_listing,
						'contact' => $breakfast_val->address . ' - ' . $breakfast_val->phone,
						'map' => str_replace(' ', '+', $breakfast_val->address) . ',+' . $breakfast_val->city . ',+' . $breakfast_val->state
					);
					
					$explore_duplicates .= " AND id != " . $breakfast_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);
				
				// LUNCH
				$sess_data = $this->session->userdata('eat-duplicates');
				$lunch = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%3%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($lunch as $lunch_val) {
					$data['lunch'] = array(
						'id' => $lunch_val->id,
						'name' => $lunch_val->company_name,
						'tags' => $lunch_val->tags_listing,
						'image' => $lunch_val->image_listing,
						'contact' => $lunch_val->address . ' - ' . $lunch_val->phone,
						'map' => str_replace(' ', '+', $lunch_val->address) . ',+' . $lunch_val->city . ',+' . $lunch_val->state
					);
					
					$explore_duplicates .= " AND id != " . $lunch_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);
				
				// DINNER
				$sess_data = $this->session->userdata('eat-duplicates');
				$dinner = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%5%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($dinner as $dinner_val) {
					$data['dinner'] = array(
						'id' => $dinner_val->id,
						'name' => $dinner_val->company_name,
						'tags' => $dinner_val->tags_listing,
						'image' => $dinner_val->image_listing,
						'contact' => $dinner_val->address . ' - ' . $dinner_val->phone,
						'map' => str_replace(' ', '+', $dinner_val->address) . ',+' . $dinner_val->city . ',+' . $dinner_val->state
					);
					
					$explore_duplicates .= " AND id != " . $dinner_val->id;
				}
				
				$this->session->set_userdata('eat-duplicates', $explore_duplicates);

				$this->load->view('explore/eat-grab', $data);
			}
			
			// Places to have fun
			if ($exploring == 2)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('visit-duplicates'); }
				
				$explore_duplicates = "";
				// MORNING
				if ($this->session->userdata('visit-duplicates'))
				{
					$sess_data = $this->session->userdata('visit-duplicates');
					$morning = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%2%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$morning = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "categories LIKE '%2%'"));					
				}
				
				foreach ($morning as $morning_val) {
					$data['morning'] = array(
						'id' => $morning_val->id,
						'name' => $morning_val->company_name,
						'tags' => $morning_val->tags_listing,
						'image' => $morning_val->image_listing,
						'contact' => $morning_val->address . ' - ' . $morning_val->phone,
						'map' => str_replace(' ', '+', $morning_val->address) . ',+' . $morning_val->city . ',+' . $morning_val->state
					);
					
					$explore_duplicates .= " AND id != " . $morning_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				// AFTERNOON
				$sess_data = $this->session->userdata('visit-duplicates');
				$afternoon = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%4%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($afternoon as $afternoon_val) {
					$data['afternoon'] = array(
						'id' => $afternoon_val->id,
						'name' => $afternoon_val->company_name,
						'tags' => $afternoon_val->tags_listing,
						'image' => $afternoon_val->image_listing,
						'contact' => $afternoon_val->address . ' - ' . $afternoon_val->phone,
						'map' => str_replace(' ', '+', $afternoon_val->address) . ',+' . $afternoon_val->city . ',+' . $afternoon_val->state
					);
					
					$explore_duplicates .= " AND id != " . $afternoon_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				// NIGHTTIME
				$sess_data = $this->session->userdata('visit-duplicates');
				$night = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND categories LIKE '%6%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($night as $night_val) {
					$data['night'] = array(
						'id' => $night_val->id,
						'name' => $night_val->company_name,
						'tags' => $night_val->tags_listing,
						'image' => $night_val->image_listing,
						'contact' => $night_val->address . ' - ' . $night_val->phone,
						'map' => str_replace(' ', '+', $night_val->address) . ',+' . $night_val->city . ',+' . $night_val->state
					);
					
					$explore_duplicates .= " AND id != " . $night_val->id;
				}
				
				$this->session->set_userdata('visit-duplicates', $explore_duplicates);
				
				$this->load->view('explore/visit-grab', $data);
			}
			
			// Places to go with family
			
			if ($exploring == 3)
			{
				if ($this->validatecat(1, $area_id) == FALSE) { $this->session->unset_userdata('family-duplicates'); }
				
				$explore_duplicates = "";
				// MORNING
				if ($this->session->userdata('family-duplicates'))
				{
					$sess_data = $this->session->userdata('family-duplicates');
					$morning = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%2%'$sess_data ORDER BY RAND() LIMIT 0,1");
				} else {
					$morning = Business::find('all', array('order' => 'RAND()', 'limit' => 1, 'conditions' => "tags_admin='family' AND categories LIKE '%2%'"));					
				}
				
				foreach ($morning as $morning_val) {
					$data['morning'] = array(
						'id' => $morning_val->id,
						'name' => $morning_val->company_name,
						'tags' => $morning_val->tags_listing,
						'image' => $morning_val->image_listing,
						'contact' => $morning_val->address . ' - ' . $morning_val->phone,
						'map' => str_replace(' ', '+', $morning_val->address) . ',+' . $morning_val->city . ',+' . $morning_val->state
					);
					
					$explore_duplicates .= " AND id != " . $morning_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				// AFTERNOON
				$sess_data = $this->session->userdata('family-duplicates');
				$afternoon = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%4%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($afternoon as $afternoon_val) {
					$data['afternoon'] = array(
						'id' => $afternoon_val->id,
						'name' => $afternoon_val->company_name,
						'tags' => $afternoon_val->tags_listing,
						'image' => $afternoon_val->image_listing,
						'contact' => $afternoon_val->address . ' - ' . $afternoon_val->phone,
						'map' => str_replace(' ', '+', $afternoon_val->address) . ',+' . $afternoon_val->city . ',+' . $afternoon_val->state
					);
					
					$explore_duplicates .= " AND id != " . $afternoon_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				// NIGHTTIME
				$sess_data = $this->session->userdata('family-duplicates');
				$night = Business::find_by_sql("SELECT * FROM business WHERE area_id='$area_id' AND tags_admin='family' AND categories LIKE '%6%'$sess_data ORDER BY RAND() LIMIT 0,1");
				
				foreach ($night as $night_val) {
					$data['night'] = array(
						'id' => $night_val->id,
						'name' => $night_val->company_name,
						'tags' => $night_val->tags_listing,
						'image' => $night_val->image_listing,
						'contact' => $night_val->address . ' - ' . $night_val->phone,
						'map' => str_replace(' ', '+', $night_val->address) . ',+' . $night_val->city . ',+' . $night_val->state
					);
					
					$explore_duplicates .= " AND id != " . $night_val->id;
				}
				
				$this->session->set_userdata('family-duplicates', $explore_duplicates);
				
				$this->load->view('explore/family-grab', $data);
			}
		}
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
