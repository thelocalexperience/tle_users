<?=$this->load->view('layouts/header');?>
		
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
				<input type="text" class="manlocation-input" placeholder="<?=$this->session->userdata('area_title')?>" />
				<div class="manlocation-button">GO</div>
			</fieldset>
		</div>
		
		<div id="startexploring" class="rounded-2 shadowed">
			<form action="<?=base_url()?>explore" method="post" id="form_explore">
			<input type="hidden" name="area_id" value="<?=$this->session->userdata('area_id')?>" class="area_id" />
			<hgroup id="startexploring-input">I want to experience a new...</hgroup>
			<select name="explore-opt" class="startexploring-select">
				<option selected="selected">1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<ul class="startexploring-list shadowed">
				<li optionval="1" textval="Place to eat">Place to eat</li>
				<li optionval="2" textval="Place to have fun">Place to have fun</li>
				<li optionval="3" textval="Place to visit with my family">Place to visit with my family</li>
			</ul>
			<hgroup id="startexploring-button">Start Exploring</hgroup>
			</form>
		</div>

		<div id="surprise" class="rounded-2 shadowed">
			<a id="surprise-icon" href="<?=base_url()?>surprise" class="rounded-2"></a>
			<a id="surprise-text" href="<?=base_url()?>surprise" class="rounded-3">Surprise Me</a>
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
	
<?=$this->load->view('layouts/footer');?>