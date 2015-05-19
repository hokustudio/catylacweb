<html>
<head><!-- CDN hosted by Cachefly -->
    <script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js'?>"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                        	<label>Title</label>
                                            <input class="form-control" name="title" type="text"/>
                                        </div>
                                        <div class="form-group">
                                        	<label>Content</label>
                                        	<textarea class="form-control" name="content"></textarea>
                                        </div>
                                        <div class="form-group">
                                       		 <button type="submit" class="btn btn-default" name="submit">Post</button>
                      
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            <!-- /.col-lg-12 -->
        </div>
		
       
</body>
</html>