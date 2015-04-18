    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="col-md-12">
                        <div class="cumbread">
                            <a href="<?php echo base_url().'home' ?>">Beranda</a><span> > </span><a href="#">Inspirasi</a><span> > </span><a>Tips & Trik</a>
                            <span> > </span><a href="<?php echo current_url() ?>"><?php echo $on['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
               
                    <div class="col-md-12">
                        <h1 class="title"><?php echo $on['title'] ?></h1>
                        <div class="meta">
                            <span class="date"><?php echo $on['date'] ?></span>
                            <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                            <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $on['view'] ?></span>
                        </div>
                        <img class="img-responsive" src="<?php echo $on['image']['url'] ?>" alt="catylac"/>
                        <p class="content" style="margin-top:20px;">
                            <?php echo $on['content'] ?>
                        </p>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                        <a class="btn btn-facebook" href="#">
                            <i class="fa fa-facebook-square fa-lg"></i> Facebook</a>
                        <a class="btn btn-twitter" href="#">
                            <i class="fa fa-twitter fa-lg"></i> Twitter</a>
                        <a class="btn btn-google" href="#">
                            <i class="fa fa-google fa-lg"></i> Google+</a>
                        <a class="btn btn-pinterest" href="#">
                            <i class="fa fa-pinterest fa-lg"></i> Pinterest</a>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                        </div>   
                    </div>

                    <div class="col-md-12">
                        <?php 
                        $i=0; $k=0;
                        while($i<2){?>
                        <div class="body-col">
                            <?php 
                            $j=0; 
                            while ($j<2){ ?>
                            <div class="col-md-6" style="margin-top:20px; margin-left:-20px;">
                                <div class="col-md-4 col-lg-4">
                                    <div class="img-sm">
                                        <img src="<?php echo $recent['image'][$k]['url'] ?>" />
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <h1 class="title2"><a href="<?php echo base_url().'posts/post/'; echo $recent['id'][$k] ?>"><?php echo $recent['title'][$k] ?></a></h1>
                                    <div class="meta">
                                        <span class="date"><?php echo $recent['date'][$k] ?></span>
                                        <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                        <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $recent['view'][$k] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php $j++; $k++; 
                            } ?>
                        </div>
                        <?php $i++; 
                        } ?>
                    </div>

                    <!-- <div class="col-md-12" style="margin-top:30px;">
                        <div class="well">
                            <h4>Leave a Comment:</h4>
                            <form role="form" action="<?php echo base_url()?>" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Name"/> 
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Email"/> 
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="website" id="website" placeholder="Website"/> 
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="submit"/>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
 -->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="col-md-12 hidden-sm hidden-xs" style="padding-left:0px; padding-right:0px;">
                        <form role="form" action="<?php echo base_url().'search/s'?>">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search" id="search" placeholder="Search"/> 
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12" style="margin-top:20px; padding-left:0px; padding-right:0px;">
                        <div class="col-md-8 panelEvent" style="background-color:#1c74bb;">
                            <h1>Artikel Populer</h1>
                        </div>
                        <div class="col-md-12 lineB">
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:20px; background-color:#f1c143; padding-top:20px; padding-bottom:20px;">
                            <img class="img-responsive" src="<?php echo $popular['image'][0]['url'] ?>" alt="Padu padan warna kesukaan"/>
                            <h1 class="title"><a href="<?php echo base_url().'posts/post/'; echo $popular['id'][0] ?>"><?php echo $popular['title'][0] ?></a></h1>
                            <div class="meta">
                                <span class="date"><?php echo $popular['date'][0] ?></span>
                                <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $popular['view'][0] ?></span>
                            </div>
                            <p class="content"><?php echo $popular['content'][0] ?>
                            <a href="<?php echo base_url().'posts/post/'; echo $popular['id'][0] ?>">read more</a></p>
                            <div class="col-md-12" style="margin-top:20px; padding-left:0px; padding-right:0px;">
                                <div class="col-md-4" style="padding:0px;">
                                    <img class="img-responsive" src="<?php echo $popular['image'][1]['url'] ?>" alt="cat"/>
                                </div>
                                <div class="col-md-8">
                                    <h1 class="title2"><a href="<?php echo base_url().'posts/post/'; echo $popular['id'][1] ?>"><?php echo $popular['title'][1] ?></a></h1>
                                    <div class="meta">
                                        <span class="date"><?php echo $popular['date'][1] ?></span>
                                        <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                        <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $popular['view'][1] ?></span>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12" style="margin-top:20px; padding-left:0px; padding-right:0px;">
                                <div class="col-md-4" style="padding:0px;">
                                    <img class="img-responsive" src="<?php echo $popular['image'][2]['url'] ?>" alt="cat"/>
                                </div>
                                <div class="col-md-8">
                                    <h1 class="title2"><a href="<?php echo base_url().'posts/post/'; echo $popular['id'][2] ?>"><?php echo $popular['title'][2] ?></a></h1>
                                    <div class="meta">
                                        <span class="date"><?php echo $popular['date'][2] ?></span>
                                        <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                                        <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $popular['view'][2] ?></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12  text-center" style="padding-left:0px; padding-right:0px;">
                        <div class="newsletter">
                        <h1>Newsletter</h1>
                        <p>Dapatkan update terbaru dari catylac</p>
                        <form role="form" method="post" style="padding:0 10%;">
                            <div class="form-group">
                                <input class="form-control" type="text" name="newsletter" placeholder="emailanda@email.com"/><br/>
                                <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>