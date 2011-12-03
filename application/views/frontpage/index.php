<?=$this->load->view('layouts/header');?>

	<?php echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']))); ?>
	<hgroup id="testimonials">
			<div id="testimonials-words"></div>
			<div id="testimonials-pic" class="rounded-3"></div>
		</hgroup>
	</header>
	
	<div id="secondrow">
		<div id="citylocation" class="rounded-2 shadowed">
			<div id="geolocate">Use Current Location</div>
			<p class="or">- or -</p>
			<fieldset id="manlocation">
				<input type="text" class="manlocation-input" placeholder="Orlando, FL" />
				<div class="manlocation-button">GO</div>
			</fieldset>
		</div>
		
		<div id="startexploring" class="rounded-2 shadowed">
			<hgroup id="startexploring-input">I want to experience a new...</hgroup>
			<select name="" class="startexploring-select">
				<option selected="selected">0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<ul class="startexploring-list shadowed">
				<li optionval="1" textval="Place to eat">Place to eat</li>
				<li optionval="2" textval="Place to have fun">Place to have fun</li>
				<li optionval="3" textval="Place to visit with my family">Place to visit with my family</li>
			</ul>
			<hgroup id="startexploring-button">Start Exploring</hgroup>
		</div>

		<div id="surprise" class="rounded-2 shadowed">
			<hgroup id="surprise-icon" class="rounded-2"></hgroup>
			<hgroup id="surprise-text" class="rounded-3">Surprise Me</hgroup>
		</div>

		<div id="tlelive" class="rounded-2 shadowed">
			<hgroup id="tlelive-icon" class="rounded-2"></hgroup>
			<hgroup id="tlelive-text" class="rounded-3">The Live Experience</hgroup>
		</div>
	</div>
	
	<div id="theliveexperience">
		<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="theliveexperience-close" />
		<hgroup id="theliveexperience-refresh"></hgroup>
		<hgroup id="theliveexperience-video" class="rounded-2 shadowed">
			<div id="theliveexperience-video-left" class="rounded-4"><img src="<?=base_url()?>assets/images/examples_video-2.jpg" width="368" height="203" /></div>
			<div id="theliveexperience-video-right" class="rounded-3">
				<p>
					<span><?=$video_company_name?></span><br /><br />
					<?=$video_company_phone?><br />
					<?=$video_company_address?><br />
					<?=$video_company_citystatezip?><br />
					<a href="http://maps.google.com/maps?q=<?=str_replace(' ', '+', $video_company_address)?>,+<?=str_replace(' ', '+', $video_company_citystatezip)?>">Get Directions</a>
				</p>
				
				<div id="theliveexperience-video-right-bot">
					<img src="<?=base_url()?>assets/images/icons_pin-dark.jpg" width="17" height="17" />
					<div id="theliveexperience-video-right-bot-save"><a href="#">View their profile</a> to save money when you visit!</div>
				</div>
				
				<div id="theliveexperience-video-right-links" class="rounded-5">
					<a href="<?=base_url()?>profile/<?=$video_company_id?>" class="theliveexperience-video-right-links-bubble rounded-2">view</a>
					<a href="<?=base_url()?>share/<?=$video_company_id?>" class="theliveexperience-video-right-links-bubble rounded-2">share</a>
					<a href="<?=base_url()?>tracker/add/<?=$video_company_id?>" class="theliveexperience-video-right-links-bubble rounded-2">track</a>
				</div>
			</div>
		</hgroup>
	</div>