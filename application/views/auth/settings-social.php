<?php $this->load->view('layouts/header'); ?>

    <div id="body" class="span-24 last">
        <div id="settings-menu" class="span-24 last clear">
            <h3 class="span-2">Settings:</h3>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings">Change Email Address</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/password">Change Password</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/email">Email Settings</a>
            <a class="span-4 rounded active" href="<?=base_url()?>auth/settings/social">Social Settings</a>
        </div>
        <?=validation_errors()?>
        <?=form_open()?>
        <?=form_hidden('settype', '4')?>
        <div class="span-24 clear down10"><h4>Facebook Share Settings</h4></div>
        <div id="form_element" class="span-24 clear">
            <div class="span-1 first"><?=form_checkbox('facebook_track', 0, TRUE)?></div>
            <div class="span-23 last">Automatically Share with Facebook when I Track a business.</div>
        </div>
        <div id="form_element" class="span-24 clear">
            <div class="span-1 first"><?=form_checkbox('facebook_build', 0, TRUE)?></div>
            <div class="span-23 last">Automatically Share with Facebook when I Build an experience.</div>
        </div>
         <div class="span-24 clear down10"><h4>Twitter Share Settings</h4></div>
        <div id="form_element" class="span-24 clear">
            <div class="span-1 first"><?=form_checkbox('twitter_track', 0, TRUE)?></div>
            <div class="span-23 last">Automatically Tweet when I Track a business.</div>
        </div>
        <div id="form_element" class="span-24 clear">
            <div class="span-1 first"><?=form_checkbox('twitter_build', 0, TRUE)?></div>
            <div class="span-23 last">Automatically Tweet when I Build an experience.</div>
        </div>
      
        <div class="span-6 clear down10">
            <?=form_submit('submit', 'Update Social Settings')?>
        </div>
        <?=form_close()?>
    </div>

<?php $this->load->view('layouts/footer'); ?>
