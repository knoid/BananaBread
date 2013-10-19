<?php echo $band->name ?>
<img src="<?php echo $band->link ?>"/>
YouTube
<?php if ($edit): ?>
	<form action="<?php echo site_url('band/upload/youtube') ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="file" id="youtube_upload">
		<input type="submit">
	</form>
<?php endif ?>
