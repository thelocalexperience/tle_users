<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MY_Controller {

	public function index()
	{
		if ($_POST)
		{
			$geo_combine = $_POST['input-location'];
			$condition_str = "area_valids LIKE '%$geo_combine%'";
			
			$areas = Areas::find('all', array('conditions' => $condition_str));
			
			if (!$areas) {
				$geo_locate['area_id'] = DEFAULT_AREA_ID;
				$geo_locate['area_name'] = DEFAULT_AREA_NAME;
			} else {
				foreach ($areas as $area) {
					$geo_locate['area_id'] = $area->id;
					$geo_locate['area_name'] = $area->area_title;
				}
			}
			
			$geo_locate['area_bg'] = 'example-video-3.jpg';
			
			
			if (get_cookie('tle_area_id')) { delete_cookie('tle_area_id'); }
			else {
				$cookie = array(
									'name'   => 'tle_area_id',
									'value'  => $geo_locate['area_id'] . '|' . $geo_locate['area_name'],
									'expire' => time()+60*60*24*365*10,
									'domain' => 'localhost',
									'secure' => TRUE,
								);
		
				set_cookie($cookie);
			}
	
			$this->output->set_content_type('application/json')->set_output(json_encode($geo_locate));
		}
    }
}