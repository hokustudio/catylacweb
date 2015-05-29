<div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="img-left col-md-7 col-lg-8">
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" style="left:700px;">
                                <li data-target="#slider" data-slide-to="0" class="active">
                                <li data-target="#slider" data-slide-to="1" class="active">
                                <li data-target="#slider" data-slide-to="2" class="active">
                                <li data-target="#slider" data-slide-to="3" class="active">
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                        <h1 class="featured big" id="pink">
                                            <a href="<?php echo base_url().'posts/post/'; echo $recent['id'][0] ?>"  style="color:#fff;">
                                                <?php echo $recent['title'][0] ?>
                                            </a>
                                        </h1>
                                        <img align="middle" src="<?php echo $recent['image'][0]['url'] ?>"/>
                                 </div>
                                <?php 
                                $i=0; $k=1;
                                while($i<3){?>
                                 <div class="item">
                                        <h1 class="featured big" id="pink">
                                            <a href="<?php echo base_url().'posts/post/'; echo $recent['id'][$k] ?>"  style="color:#fff;">
                                                <?php echo $recent['title'][$k] ?>
                                            </a>
                                        </h1>
                                        <img align="middle" src="<?php echo $recent['image'][$k]['url'] ?>"/>
                                 </div>
                                 <?php $k++; $i++; }?>
 <!--                            <div class="item">
                                        <h1 class="featured big" id="pink">
                                            <a href="<?php echo base_url().'posts/post/'; echo $id[2] ?>" style="color:#fff;">
                                                <?php echo $title[2] ?>
                                            </a>
                                        </h1>
                                        <img src="<?php echo $image[2]['url'] ?>"/>
                                </div>
                                <div class="item">
                                        <h1 class="featured big" id="pink">
                                            <a href="<?php echo base_url().'posts/post/'; echo $id[3] ?>"  style="color:#fff;">
                                                <?php echo $title[3] ?>
                                            </a>
                                        </h1>
                                        <img src="<?php echo $image[3]['url'] ?>"/>
                                    </div>
                                <div class="item">
                                        <h1 class="featured big" id="pink">
                                            <a href="<?php echo base_url().'posts/post/'; echo $id[4] ?>"  style="color:#fff;">
                                                <?php echo $title[4] ?>
                                            </a>
                                        </h1>
                                        <img src="<?php echo $image[4]['url'] ?>"/>
                                </div>-->              
                            </div>
                             <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#slider" role="button" data-slide="next" style="right:0; left:auto;">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
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