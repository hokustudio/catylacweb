
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
