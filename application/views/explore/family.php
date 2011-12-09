<?=$this->load->view('layouts/header');?>
		
		<input type="hidden" name="explore-page" class="explore-page-val" value="2" />
		<hgroup id="contexploring" class="rounded-3">
			<form action="<?=base_url()?>explore" method="post" id="form_explore">
			<input type="hidden" name="area_id" value="<?=$this->session->userdata('area_id')?>" class="area_id" />
			<hgroup id="contexploring-input">I want to experience a new...</hgroup>
			<select name="explore-opt" class="contexploring-select">
				<option selected="selected">1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<ul class="contexploring-list shadowed">
				<li optionval="1" textval="Place to eat">Place to eat</li>
				<li optionval="2" textval="Place to have fun">Place to have fun</li>
				<li optionval="3" textval="Place to visit with my family">Place to visit with my family</li>
			</ul>
			<hgroup id="contexploring-button">Continue Exploring</hgroup>
			</form>
			<p>or... <a href="<?=base_url()?>surprise">Surprise Me</a></p>
		</hgroup>
	</header>
	
	<div id="secondrow">
		<div id="citylocation" class="rounded-2 shadowed">
			<fieldset id="manlocation">
				<input type="text" class="manlocation-input" placeholder="<?=$this->session->userdata('area_title')?>" />
				<div class="manlocation-button">GO</div>
			</fieldset>
		</div>
		
		<div id="submenu" class="rounded-2 shadowed">
			<ul>
				<li><a href="#" class="active"><span>Explore</span></a></li>
				<li><a href="<?=base_url()?>tracker"><span>Experience Tracker</span></a></li>
				<li><a href="<?=base_url()?>builder"><span>Experience Builder</span></a></li>
			</ul>
			<hgroup id="submenu-refresh" class="rounded-2"></hgroup>
		</div>
	</div>
	
	<div id="thirdrow">
		<hgroup id="heading" class="rounded-2 shadowed">Family Morning Activity</hgroup>
		<hgroup id="heading" class="rounded-2 shadowed spaced">Family Afternoon Activity</hgroup>
		<hgroup id="heading" class="rounded-2 shadowed spaced">Family Night Activity</hgroup>
	</div>
	
	<div class="listings-container">
		<div id="fourthrow">
			<hgroup id="listing" class="rounded-2 shadowed">
				<span class="listing-tag rounded-2"><?=$morning['tags']?></span>
				<img src="<?=base_url()?>assets/images/<?=$morning['image']?>" width="230" height="130" class="listing-pic" />
				<div id="listing-bot" class="rounded-1">
					<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
					<a href="#" class="listing-name"><?=$morning['name']?></a>
					<p><?=strtoupper($morning['contact'])?></p>
					<a href="<?=base_url()?>profile/<?=$morning['id']?>" class="listing-profile">view profile</a>
					<a href="http://maps.google.com/maps?q=<?=$morning['map']?>" class="listing-directions">directions</a>
					<!--<a href="#" class="listing-deal">get deal</a>//-->
				</div>
				<ul>
					<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$morning['id']?>">talk</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$morning['id']?>">track</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$morning['id']?>">build</a></li>
					<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$morning['id']?>">share</a></li>
				</ul>
			</hgroup>
			<hgroup id="listing" class="rounded-2 shadowed spaced">
				<span class="listing-tag rounded-2"><?=$afternoon['tags']?></span>
				<img src="<?=base_url()?>assets/images/<?=$afternoon['image']?>" width="230" height="130" class="listing-pic" />
				<div id="listing-bot" class="rounded-1">
					<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
					<a href="#" class="listing-name"><?=$afternoon['name']?></a>
					<p><?=strtoupper($afternoon['contact'])?></p>
					<a href="<?=base_url()?>profile/<?=$afternoon['id']?>" class="listing-profile">view profile</a>
					<a href="http://maps.google.com/maps?q=<?=$afternoon['map']?>" class="listing-directions">directions</a>
					<!--<a href="#" class="listing-deal">get deal</a>//-->
				</div>
				<ul>
					<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$afternoon['id']?>">talk</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$afternoon['id']?>">track</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$afternoon['id']?>">build</a></li>
					<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$afternoon['id']?>">share</a></li>
				</ul>
			</hgroup>
			<hgroup id="listing" class="rounded-2 shadowed spaced">
				<span class="listing-tag rounded-2"><?=$night['tags']?></span>
				<img src="<?=base_url()?>assets/images/<?=$night['image']?>" width="230" height="130" class="listing-pic" />
				<div id="listing-bot" class="rounded-1">
					<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
					<a href="#" class="listing-name"><?=$night['name']?></a>
					<p><?=strtoupper($night['contact'])?></p>
					<a href="<?=base_url()?>profile/<?=$night['id']?>" class="listing-profile">view profile</a>
					<a href="http://maps.google.com/maps?q=<?=$night['map']?>" class="listing-directions">directions</a>
					<!--<a href="#" class="listing-deal">get deal</a>//-->
				</div>
				<ul>
					<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$night['id']?>">talk</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$night['id']?>">track</a></li>
					<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$night['id']?>">build</a></li>
					<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$night['id']?>">share</a></li>
				</ul>
			</hgroup>
		</div>
		
		<div id="free-row">
			<hgroup id="free-listing" class="rounded-2 shadowed">
				<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
				<a href="#" class="listing-name">Amura Japenese Restaurant</a>
				<p>55 W Church St  #170 - (407) 316-8500</p>
			</hgroup>
			<hgroup id="free-listing" class="rounded-2 shadowed spaced">
				<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
				<a href="#" class="listing-name">Amura Japenese Restaurant</a>
				<p>55 W Church St  #170 - (407) 316-8500</p>
			</hgroup>
			<hgroup id="free-listing" class="rounded-2 shadowed spaced">
				<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
				<a href="#" class="listing-name">Amura Japenese Restaurant</a>
				<p>55 W Church St  #170 - (407) 316-8500</p>
			</hgroup>
		</div>
	</div>
	
	<div id="sixthrow">
		<a href="#" class="view-more rounded-2 shadowed">VIEW MORE</a>
	</div>
	
<?=$this->load->view('layouts/footer');?>