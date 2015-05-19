<html>
<head><!-- CDN hosted by Cachefly -->
    <script src="<?php echo base_url().'js/tinymce/tinymce.min.js'?>"></script>
    <script>
    tinymce.init({
    	selector:'textarea'
		});
    </script>
</head>
<body>
	<form action="<?php echo base_url()."catylacadmin24052015/addpost"?>" method="post" class="form-signin">
		<div>
		    <div class="form-group">
		       	<input type="text" class="form form-control" placeholder="Title" required="" autofocus="" name="title" value="<?php echo set_value('title')?>" />  
		    </div>
		    <div>
    	        <textarea name="content"><?php echo $title ?></textarea>
		    </div>
		    <div class="form-group">
		    	<button type="submit" class="btn btn-lg btn-primary btn-block" value="Add post" />Add Post</button>
	 		</div>
	 	</div>
	</form>
	Halo <br/>
	<?php echo htmlentities($content) ?>
</body>
</html>