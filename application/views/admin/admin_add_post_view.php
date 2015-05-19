<html>
<head><!-- CDN hosted by Cachefly -->
    <script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js'?>"></script>
    <script>
    tinymce.init(
    	{selector:'textarea'}
    );
    </script>
</head>
<body>
	<form action="<?php echo base_url()."catylacadmin24052015/addpost"?>" method="post" class="form-signin" enctype="multipart/form-data">
		<div>
		    <div class="form-group">
		       	<input type="text" class="form form-control" placeholder="Title" required="" autofocus="" name="title" value="<?php echo set_value('title')?>" />  
		    </div>
		    <div>
    	        <textarea name="content"></textarea>
		    </div>
		    <input type="file" name="f_image" id="f_image"/>
		    <br/>
		    Pilih Kategori <br/>
		    <input type="checkbox" name="category[]" value="Tips & Trik">Tips & Trik
		    <br/>
			<input type="checkbox" name="category[]" value="Cara Pengecatan">Cara Pengecatan
		    <div class="form-group">
		    	<button type="submit" class="btn btn-lg btn-primary btn-block" value="Add post" />Add Post</button>
	 		</div>
	 	</div>
	</form>
	Halo <br/>
	<?php echo htmlentities($content) ?><br/>
	<?php 
        foreach ($category as $value) {
            echo $value."<br/>";
        }
        foreach ($image as $key => $value) {
            print_r($key); echo " : "; print_r($value); echo "<br/>";
        } 
	?>

</body>
</html>