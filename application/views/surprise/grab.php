	<div class="surprise-container">
		<div id="toprow">
			<hgroup id="surprise-heading" class="rounded-2 shadowed">
				<h1>Recommended Experience</h1>
				<div id="surprise-sharing" class="rounded-2">
					<span>share this experience</span>
					<ul>
						<li><a href="#" class="surprise-share-facebook">Facebook</a></li>
						<li><a href="#" class="surprise-share-twitter">Twitter</a></li>
						<li><a href="#" class="surprise-share-tumblr">Tumblr</a></li>
						<li><a href="#" class="surprise-share-email">Email</a></li>
					</ul>
				</div>
				<div id="surprise-save" class="rounded-2"><a href="<?=base_url()?>builder/multiple/<?=$save_string?>" class="surprise-build">Save this entire day to my Experience Builder</a></div>
			</hgroup>
			
			<hgroup id="surprise-row">
				<!-- LISTING 1 //-->
				<div class="surprise-listing main-listing-1 rounded-2 shadowed" thislisting="1">
					<span class="surprise-listing-category">Breakfast</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$breakfast['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$breakfast['name']?></span>
					<span class="surprise-listing-tag"><?=$breakfast['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-1 rounded-2 shadowed" thislisting="1">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$breakfast['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$breakfast['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$breakfast['id']?>" class="listing-name"><?=$breakfast['name']?></a>
						<p><?=strtoupper($breakfast['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$breakfast['id']?>" class="listing-profile">view profile</a>
						<a href="http://maps.google.com/maps?q=<?=$breakfast['map']?>" class="listing-directions">directions</a>
						<!--<a href="#" class="listing-deal">get deal</a>//-->
					</div>
					<ul>
						<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$breakfast['id']?>">talk</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$breakfast['id']?>">track</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$breakfast['id']?>">build</a></li>
						<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$breakfast['id']?>">share</a></li>
					</ul>
				</hgroup>
				
				<!-- LISTING 2 //-->
				<div class="surprise-listing main-listing-2 rounded-2 shadowed spaced" thislisting="2">
					<span class="surprise-listing-category">Morning Activity</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$morning['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$morning['name']?></span>
					<span class="surprise-listing-tag"><?=$morning['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-2 rounded-2 shadowed spaced" thislisting="2">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$morning['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$morning['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$morning['id']?>" class="listing-name"><?=$morning['name']?></a>
						<p><?=strtoupper($morning['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$morning['id']?>" class="listing-profile">view profile</a>
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
				
				<!-- LISTING 3 //-->
				<div class="surprise-listing main-listing-3 rounded-2 shadowed spaced" thislisting="3">
					<span class="surprise-listing-category">Lunch</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$lunch['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$lunch['name']?></span>
					<span class="surprise-listing-tag"><?=$lunch['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-3 rounded-2 shadowed spaced" thislisting="3">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$lunch['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$lunch['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$lunch['id']?>" class="listing-name"><?=$lunch['name']?></a>
						<p><?=strtoupper($lunch['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$lunch['id']?>" class="listing-profile">view profile</a>
						<a href="http://maps.google.com/maps?q=<?=$lunch['map']?>" class="listing-directions">directions</a>
						<!--<a href="#" class="listing-deal">get deal</a>//-->
					</div>
					<ul>
						<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$lunch['id']?>">talk</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$lunch['id']?>">track</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$lunch['id']?>">build</a></li>
						<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$lunch['id']?>">share</a></li>
					</ul>
				</hgroup>
				
				<!-- LISTING 4 //-->
				<div class="surprise-listing main-listing-4 rounded-2 shadowed spaced" thislisting="4">
					<span class="surprise-listing-category">Afternoon Activity</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$afternoon['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$afternoon['name']?></span>
					<span class="surprise-listing-tag"><?=$afternoon['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-4 rounded-2 shadowed spaced" thislisting="4">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$afternoon['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$afternoon['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$afternoon['id']?>" class="listing-name"><?=$afternoon['name']?></a>
						<p><?=strtoupper($afternoon['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$afternoon['id']?>" class="listing-profile">view profile</a>
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
				
				<!-- LISTING 5 //-->
				<div class="surprise-listing main-listing-5 rounded-2 shadowed spaced" thislisting="5">
					<span class="surprise-listing-category">Dinner</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$dinner['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$dinner['name']?></span>
					<span class="surprise-listing-tag"><?=$dinner['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-5 rounded-2 shadowed spaced" thislisting="5">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$dinner['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$dinner['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$dinner['id']?>" class="listing-name"><?=$dinner['name']?></a>
						<p><?=strtoupper($dinner['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$dinner['id']?>" class="listing-profile">view profile</a>
						<a href="http://maps.google.com/maps?q=<?=$dinner['map']?>" class="listing-directions">directions</a>
						<!--<a href="#" class="listing-deal">get deal</a>//-->
					</div>
					<ul>
						<li class="bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>talk/<?=$dinner['id']?>">talk</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>track/<?=$dinner['id']?>">track</a></li>
						<li class="bord-top bord-bot"><div class="listing-icon"></div><a href="<?=base_url()?>build/<?=$dinner['id']?>">build</a></li>
						<li class="bord-top"><div class="listing-icon"></div><a href="<?=base_url()?>share/<?=$dinner['id']?>">share</a></li>
					</ul>
				</hgroup>
				
				<!-- LISTING 6 //-->
				<div class="surprise-listing main-listing-6 rounded-2 shadowed spaced" thislisting="6">
					<span class="surprise-listing-category">Breakfast</span>
					<div class="surprise-listing-plus"></div>
					<img src="<?=base_url()?>assets/images/<?=$night['image']?>" width="154" height="89" id="surprise-listing-pic" />
					<img src="<?=base_url()?>assets/images/icons_surprise-pin.jpg" width="12" height="12" id="surprise-listing-pin" />
					<span class="surprise-listing-name"><?=$night['name']?></span>
					<span class="surprise-listing-tag"><?=$night['tags']?></span>				
				</div>
				
				<hgroup id="listing" class="sub-listing-6 rounded-2 shadowed spaced" thislisting="6">
					<img src="<?=base_url()?>assets/images/icons_close.png" width="24" height="24" class="close-sub-listing" thislisting="1" />
					<span class="listing-tag rounded-2"><?=$night['tags']?></span>
					<img src="<?=base_url()?>assets/images/<?=$night['image']?>" width="230" height="130" class="listing-pic" />
					<div id="listing-bot" class="rounded-1">
						<img src="<?=base_url()?>assets/images/icons_listing-name.jpg" width="12" height="12" id="listing-pin" />
						<a href="<?=base_url()?>profile/<?=$night['id']?>" class="listing-name"><?=$night['name']?></a>
						<p><?=strtoupper($night['contact'])?></p>
						<a href="<?=base_url()?>profile<?=$night['id']?>" class="listing-profile">view profile</a>
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
			</hgroup>
		</div>
	</div>