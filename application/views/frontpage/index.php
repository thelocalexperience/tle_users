<?php $this->load->view('layouts/header'); ?>

	<div id="body" class="span-24 last">
		
		<div id="alternate" class="span-24 last rounded">
			<div id="alt_header" class="span-24 last">Live Experience (pulls random video entry and associated business info)</div>
			<div id="alt_tile" class="span-24 last">
				<div id="tile-header" class="span-4">video location</div>
				<div id="tile-header" class="span-4">company id</div>
				<div id="tile-header" class="span-4">company name</div>
				<div id="tile-header" class="span-4">company address</div>
				<div id="tile-header" class="span-4">company location</div>
				<div id="tile-header" class="span-4 last">company phone</div>
			</div>
			<div class="span-24 last">
				<div id="tile-info" class="span-4"><?=$tlelive_video_location?></div>
				<div id="tile-info" class="span-4"><?=$tlelive_video_company_id?></div>
				<div id="tile-info" class="span-4"><?=$tlelive_video_company_name?></div>
				<div id="tile-info" class="span-4"><?=$tlelive_video_company_address?></div>
				<div id="tile-info" class="span-4"><?=$tlelive_video_company_citystatezip?></div>
				<div id="tile-info" class="span-4 last"><?=$tlelive_video_company_phone?></div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/footer'); ?>