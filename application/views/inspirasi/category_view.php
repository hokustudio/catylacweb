    <div class="container" style="margin-top:50px;">
        <?php 
        for($i=0;$i<count($on['id']);$i++)
        { ?>
            <div class="col-md-12">
                <div class="col-md-12">
                        <a href="<?php echo base_url().'posts/post/'; echo $on['id'][$i] ?>">
                            <h1 class="title"><?php echo $on['title'][$i]; ?></h1>
                        </a>
                        
                        <div class="meta">
                            <span class="date"><?php echo $on['date'][$i] ?></span>
                            <!--span class="comment"><span class="glyphicon glyphicon-comment"></span> 3</span-->
                            <span class="views"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $on['view'][$i] ?></span>
                        </div>
                        <div class="meta">
                            <!--<img class="img-responsive" src="<?php echo $image[$i]['url'] ?>" alt="catylac" style="width:100px; height:100px"/>
                            -->
                            <p class="content">
                                <?php echo $on['content'][$i]; ?>
                            </p>
                        </div>
                </div>

            </div>
        <?php
        }
        ?>
    </div>


    