
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $head_name ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<ul>
									<?php 
										for($i=0;$i<$total;$i++){ ?>
											<li>
												<a href= "<?php echo base_url().'catylacadmin2015/editpost/'; echo $id[$i] ?>"><?php echo $title[$i] ?></a><?php echo $author[$i]." ".$category[$i]." ".$date[$i]." ".$status[$i] ?>
<?php if($flag[$i] == 2){ ?><a href="<?php echo base_url().'catylacadmin2015/publish/'; echo $id[$i] ?>" >Publish Post</a> <?php } ?>
<?php if($flag[$i] == 1){ ?><a href="<?php echo base_url().'catylacadmin2015/draft/'; echo $id[$i] ?>" >Draft Post</a> <?php } ?>
												<a href="<?php echo base_url().'catylacadmin2015/deletepost/'; echo $id[$i] ?>" >Delete</a>
											</li>
									<?php	}
									?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
