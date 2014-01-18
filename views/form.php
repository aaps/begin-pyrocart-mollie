<ul>
    <li class="<?php echo alternator('even', 'odd') ?>">
        <label>Sandbox Mode</label>
        <div class="input">
            <?php echo form_dropdown('options[service]', array('live' => 'No', 'sandbox' => 'Yes'), set_value('options[service]', $options['service'])); ?>
        </div>
    </li>
    <li class="<?php echo alternator('even', 'odd') ?>">
        <label>Partner ID</label>
        <div class="input">
            <?php echo form_input('options[partnerid]', set_value('options[partnerid]', $options['partnerid'])); ?>
        </div>
    </li>
    <li class="<?php echo alternator('even', 'odd') ?>">
        <label>Automatic self submit?<small>Do you want your form to submit itself to paypal</small></label>
        <div class="input">
            <label><?php echo form_radio('options[auto]', 0, set_radio('options[auto]', 0, $options['auto'] == 0)); ?> No </label>
            <label><?php echo form_radio('options[auto]', 1, set_radio('options[auto]', 1, $options['auto'] == 1)); ?> Yes </label>
        </div>
    </li>
</ul>