<div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="img-left col-md-7 col-lg-8">
                        <h1 class="featured big" id="pink">Tren Warna Cat 2015</h1>
                        <img src="<?php echo base_url().'assets/images/ruangkecil.jpg'?>"/>
                    </div>
                    <div class="img-right-col col-md-5 col-lg-4">
                        <div class="img-right col-md-12 col-lg-12">
                            <h1 class="featured" id="green">Tips Hemat Mengecat</h1>
                            <img src="<?php echo base_url().'assets/images/ar1.jpg'?>" />
                        </div>
                        <div class="img-right col-md-12 col-lg-12" style="margin-top:10px;">
                            <h1 class="featured" id="blue">Warna Cat Minimalis</h1>
                            <img src="<?php echo base_url().'assets/images/ruang.jpg'?>"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="col-md-10 col-md-offset-1 arbody bodyColor" style="padding-top:20px; padding-bottom:20px;">
                <?php 
                $i=0; $j=0; $k=0;
                while($i<3){
                    if($j==0){ ?>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="body-col">    
                            <div class="img-body">
                                <img src="<?php echo $image[$k]['url'] ?>" alt="Padu padan warna kesukaan"/>
                            </div>
                            <h1 class="title">
                                <a href="<?php echo base_url().'posts/post/'; echo $id[$k] ?>">
                                    <?php echo $title[$k] ?>
                                </a>
                            </h1>
                            <div class="meta">
                                <span class="date"><?php echo $date[$k] ?></span>
                                <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $view[$k] ?></span>
                            </div>
                            <p class="content">
                            <?php echo $content[$k]; ?>
                            </p>
                        </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:-12px;"> 
                            <a href="<?php echo base_url().'posts/post/'; echo $id[$k] ?>">read more</a>
                        </div>
                    </div>
                        <?php $j++; $k++; continue;} ?>
                        <div class="col-md-12" style="margin-top:20px; padding-left:0px; padding-right:0px;">
                            <div class="col-md-4" style="padding:0px;">
                                <div class="img-sm">
                                    <img class="img-responsive" src="<?php echo $image[$k]['url'] ?>" alt="cat"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h1 class="title2"><a href="<?php echo base_url().'posts/post/'; echo $id[$k] ?>"><?php echo $title[$k] ?></a></h1>
                                <div class="meta">
                                    <span class="date"><?php echo $date[$k] ?></span>
                                    <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                    <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $view[$k] ?></span>
                                </div>
                                <p class="content">
                            </div>
                        </div>
                        <?php $j++;
                    if($j==3){
                        $j=0;
                        $i++; ?>
                    </div> 
                    <?php } $k++; } ?>
                </div>
            </div>
        </div>