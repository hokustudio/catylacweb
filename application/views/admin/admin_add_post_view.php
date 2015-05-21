<script>
    tinymce.init(
        {selector:'textarea'}
    );
    </script>
    
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									<form role="form" action="<?php echo base_url()."catylacadmin2015/addpost"?>" method="post" class="form-signin" enctype="multipart/form-data">
										    <div class="form-group">
										       	<input type="text" class="form form-control" placeholder="Title" required="" autofocus="" name="title" value="<?php echo set_value('title')?>" />  
										    </div>
										    <div class="form-group">
								    	        <textarea name="content" class="form-control" rows="10"></textarea>
										    </div>
										    <div class="form-group">
										    	<label>Choose Image:</label>
										    	<input type="file" name="f_image" id="f_image"/>
										    </div>
										    <div class="form-group">
										    	<label>Choose Category:</label>
										    	<div class="checkbox">
	                                                <label>
	                                                    <input class="checkbox" type="checkbox" name="category[]" value="Tips & Trik">Tips & Trik
	                                                </label>
	                                            </div>
										    	<div class="checkbox">
	                                                <label>
	                                                	<input class="checkbox" type="checkbox" name="category[]" value="Cara Pengecatan">Cara Pengecatan
	                                                </label>
										    </div>
											<hr/>
										    <div class="form-group text-right">
										    	<button type="submit" class="btn btn-primary" value="Add post" />Add Post</button>
									 		</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
