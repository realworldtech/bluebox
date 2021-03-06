<?php echo form::open_section('Location Information'); ?>

    <div class="field">
    <?php
        echo form::label('location[name]', 'Name:');
        echo form::input('location[name]', isset($location['name']) ? $location['name'] : 'Main Location');
    ?>
    </div>

    <div class="field">
    <?php
        echo form::label('location[domain]', 'Domain:');
        echo form::input('location[domain]', isset($location['domain']) ? $location['domain'] : network::guessServerIP());
    ?>
    </div>

    <div class="field">
    <?php
        echo form::label('location[registry][areacode]', 'Area code:');
        echo form::input('location[registry][areacode]', isset($location['registry']['areacode']) ? $location['registry']['areacode'] : '');
    ?>
    </div>

<?php echo form::close_section(); ?>