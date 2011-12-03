<?php $this->load->view('layouts/header'); ?>

    <div id="body" class="span-24 last">
        <div id="settings-menu" class="span-24 last clear">
            <h3 class="span-2">Settings:</h3>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings">Change Email Address</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/password">Change Password</a>
            <a class="span-4 rounded active" href="<?=base_url()?>auth/settings/email">Email Settings</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/social">Social Settings</a>
        </div>
        <?=validation_errors()?>
        <?=form_open()?>
        <?=form_hidden('settype', '3')?>
        <div id="form_element" class="span-24 clear down10">
            <div class="span-1 first"><?=form_radio('email_setting', 0, TRUE)?></div>
            <div class="span-23 last">Please don’t send me any emails.</div>
        </div>
        <div id="form_element" class="span-24 clear">
            <div class="span-1 first"><?=form_radio('email_setting', 1)?></div>
            <div class="span-23 last">Receive Email when Businesses I'm Tracking have...</div>
        </div>
        <div id="smallchecks" class="span-12 clear push-1 rounded">
            <div class="span-1"><?=form_checkbox('rec_deals', 1, FALSE)?></div>
            <div class="span-2">New Deals</div>
            <div class="span-1 push-1"><?=form_checkbox('rec_shouts', 1, FALSE)?></div>
            <div class="span-2 push-1">New Shouts</div>
            <div class="span-1 push-2"><?=form_checkbox('rec_calendar', 1, FALSE)?></div>
            <div class="span-4 push-2">Calendar Changes</div>
        </div>
        <div class="span-6 clear">
            <?=form_submit('submit', 'Update Email Settings')?>
        </div>
        <?=form_close()?>
    </div>

<?php $this->load->view('layouts/footer'); ?>
