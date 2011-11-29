<?php $this->load->view('layouts/header'); ?>

    <div id="body" class="span-24 last">
        <h3>Sign Up</div>
        <?=validation_errors()?>
        <?=form_open()?>
        <div id="form_element" class="span-6 clear down10">
            <div class="span-3 first">Email Address:</div>
            <div class="span-3 last"><?=form_input('email_address')?></div>
        </div>
        <div id="form_element" class="span-6 clear down10">
            <div class="span-3 fist">Password:</div>
            <div class="span-3 last"><?=form_password('password')?></div>
        </div>
        <div id="form_element" class="span-6 clear down10">
            <div class="span-3 first">Confirm Password:</div>
            <div class="span-3 last"><?=form_password('password_confirm')?></div>
        </div>
        <div class="span-6 clear down10">
            <?=form_submit('submit', 'Sign Up')?>
        </div>
        <?=form_close()?>
    </div>

<?php $this->load->view('layouts/footer'); ?>
