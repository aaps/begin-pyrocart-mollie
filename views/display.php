
<?php echo form_open($options['action']); ?>

 <?php echo form_dropdown('issuer', $options['issuers']); ?>

    <button type="submit" class="btn"><span>Betaal</span></button>
<?php echo form_close();