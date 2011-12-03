<?php $this->load->view('layouts/header'); ?>

    <div id="body" class="span-24 last">
        <div id="settings-menu" class="span-24 last clear">
            <h3 class="span-2">Settings:</h3>
            <a class="span-4 rounded active" href="<?=base_url()?>auth/settings">Change Email Address</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/password">Change Password</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/email">Email Settings</a>
            <a class="span-4 rounded" href="<?=base_url()?>auth/settings/social">Social Settings</a>
        </div>
        <?=validation_errors()?>
        <?=form_open()?>
        <?=form_hidden('settype', '1')?>
        <div id="form_element" class="span-6 clear down10">
            <div class="span-3 first">New Email:</div>
            <div class="span-3 last"><?=form_input('email_address')?></div>
        </div>
        <div id="form_element" class="span-6 clear down10">
            <div class="span-3 first">Confirm Email:</div>
            <div class="span-3 last"><?=form_input('email_address_confirm')?></div>
        </div>
        <div class="span-6 clear down10">
            <?=form_submit('submit', 'Change Email Address')?>
        </div>
        <?=form_close()?>
    </div>

<?php $this->load->view('layouts/footer'); ?>
