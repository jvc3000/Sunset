<h1>Sunset Contact Form Options</h1>
<?php settings_errors(); ?>

<!--suppress HtmlUnknownTarget -->
<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields('sunset-theme-contact'); ?>
	<?php do_settings_sections('alecaddd_sunset_contact'); ?>
	<?php submit_button(); ?>
</form>