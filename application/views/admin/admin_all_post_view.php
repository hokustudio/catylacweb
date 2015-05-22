
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
									<?php 
										for($i=0;$i<$total;$i++){ ?>
											<tr>
												<td><a href= "<?php echo base_url().'catylacadmin2015/editpost/'; echo $id[$i] ?>"><?php echo $title[$i] ?></a></td>
												<td><?php echo $author[$i] ?></td>
												<td> <?php echo $category[$i] ?></td>
												<td><?php $date[$i]?><?php $status[$i] ?></td>
												<td><?php if($flag[$i] == 2){ ?><a href="<?php echo base_url().'catylacadmin2015/publish/'; echo $id[$i] ?>" >Publish Post</a> <?php } ?>
												<?php if($flag[$i] == 1){ ?><a href="<?php echo base_url().'catylacadmin2015/draft/'; echo $id[$i] ?>" >Draft Post</a> <?php } ?></td>
												<td><a href="<?php echo base_url().'catylacadmin2015/deletepost/'; echo $id[$i] ?>" >Delete</a></td>
											</tr>
									<?php	}
									?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
