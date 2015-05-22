<script>
    tinymce.init(
        {selector:'textarea'}
    );
    </script>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									<form role="form" action="<?php echo base_url()."catylacadmin2015/editpost/"; echo $id; ?>" method="post" class="form-signin" enctype="multipart/form-data">
										    <div class="form-group">
										       	<input type="text" class="form form-control" placeholder="Title" required="" autofocus="" name="title" value="<?php echo $title ?>">
										    </div>
										    <div class="form-group">
								    	        <textarea name="content" class="form-control" rows="10"><?php echo $content ?></textarea>
										    </div>
										    <div class="form-group">

										    	<div class="img-sm">
                                    				<img class="img-responsive" src="<?php echo $image['url'] ?>" alt="cat"/>
                                				</div>

										    	<label>Edit Image:</label>
										    	<input type="file" name="f_image" id="f_image"/>
										    </div>
										    <div class="form-group">
										    	<label>Edit Category:</label>
										    	<?php 
										    	for($i=0;$i<$allcategory;$i++){ ?>

										    	<div class="checkbox">
	                                                <label>
	                                                    <input class="checkbox" type="checkbox" name="category[]" <?php if(!empty($category_checked[$cat_id[$i]])) echo "checked" ?> value="<?php echo $cat_id[$i] ?>"><?php echo $cat_name[$i] ?>
	                                                </label>
	                                            </div>
										    	<?php } ?>
										    </div>
											<hr/>
										    <div class="form-group text-right">
										    	<button type="submit" class="btn btn-primary" value="Add post" />Update Post</button>
									 		</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
