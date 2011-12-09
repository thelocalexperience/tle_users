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