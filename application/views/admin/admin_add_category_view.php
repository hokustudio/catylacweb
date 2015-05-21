
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">All Category</h1>
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
							for($i=0;$i<$allcategory;$i++){ ?>
							<li>
								<a href= "<?php echo base_url().'catylacadmin2015/editcategory/'; echo $id[$i] ?>"><?php echo $name[$i] ?></a><span>   |   </span><?php echo $description[$i] ?>
							</li>
							<?php	}
							?>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form role="form" action="<?php echo base_url()."catylacadmin2015/addcategory"?>" method="post" class="form-signin" enctype="multipart/form-data">
							<div class="form-group">
								Name <br/>
							   	<input type="text" class="form form-control" required="" autofocus="" name="name" value="<?php echo set_value('name')?>" />  
							</div>
							<div class="form-group">
								Description <br/>
								<textarea rows="4" cols="91" name="description"></textarea>
							</div>
							<div class="form-group text-right">
								<button type="submit" class="btn btn-primary" value="Add New" />Add New Category</button>
							</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
