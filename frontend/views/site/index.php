<?php

use yii\helpers\Url;

?>
<div class="templatemo-top-menu" id="templatemo-top">
    <div class="container">
        <!-- Static navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><img src="/images/templatemo_logo.png" alt="Urbanic template" title="Urbanic Template" /></a>
                </div>
                <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                        <li class="active"><a href="#templatemo-carousel" style="text-transform: uppercase"><?php echo Yii::t('app','Početna')?></a></li>
                        <li><a href="#templatemo-about" style="text-transform: uppercase"><?php echo Yii::t('app','O nama')?></a></li>
                        <li><a href="#templatemo-portfolio" style="text-transform: uppercase"><?php echo Yii::t('app','Galerija')?></a></li>
                        <li><a href="#templatemo-contact" style="text-transform: uppercase"><?php echo Yii::t('app','Kontakt')?></a></li>
                        <li>
                            <select id="language" style="background: transparent;margin-top:9px;font-size:12px;margin-left:3px;">
                                <option value="sr" <?php echo Yii::$app->language == 'sr'? 'selected':'' ?>>SR</option>
                                <option value="en" <?php echo Yii::$app->language == 'en'? 'selected':'' ?>>EN</option>
                            </select>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </div><!--/.navbar -->
    </div> <!-- /container -->
</div>

<div>
    <!-- Carousel -->
    <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php if(!empty($mainGallery) && !empty($mainGallery->galleryItems)){
                foreach($mainGallery->galleryItems as $key=>$val){ ?>
                    <li data-target="#templatemo-carousel" data-slide-to="<?php echo $key?>" class="<?php echo $key == 0? 'active':'' ?>"></li>
            <?php }}?>
            <!--
            <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#templatemo-carousel" data-slide-to="1"></li>
            <li data-target="#templatemo-carousel" data-slide-to="2"></li>
            -->
        </ol>
        <div class="carousel-inner">
            <?php if(!empty($mainGallery->galleryItems)){
                foreach($mainGallery->galleryItems as $key=>$val){?>
                    <div class="item <?php echo $key==0 ?' active':'' ?>">
                        <div class="">
                            <img src="<?php echo $val['content']?>" style='width:100%;height:500px'/>
                        </div>
                    </div>

            <?php } }?>
        <!--
            <div class="item active">
                <div class="item">
                    <img src="img1.jpg" style='width:100%;'/>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <img src="img2.jpg" style='width:100%'/>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <img src="img3.jpg" style='width:100%'/>
                </div>
            </div>
-->

        </div>
        <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /#templatemo-carousel -->
</div>

<div class="templatemo-welcome" id="templatemo-welcome">
    <div class="container">
        <div class="templatemo-slogan text-center">
            <span class="txt_darkgrey"><?php echo Yii::t('app','Dobrodošli')?> </span><span class="txt_orange"></span>
           <!-- <p class="txt_slogan"><i>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero mauriec ignissim fermentum.</i></p> -->
        </div>
    </div>
</div>



<div class="templatemo-team" id="templatemo-about">
    <div class="container">
        <div class="row">
            <div class="templatemo-line-header">
                <div class="text-center">
                    <hr class="team_hr team_hr_left"/><span style="text-transform: uppercase"><?php echo Yii::t('app','O NAMA')?></span>
                    <hr class="team_hr team_hr_right" />
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div style='padding-right:70px;text-align:left;margin-top:40px;font-size:15px;text-align: justify'>
            <?php if(!empty($aboutUs)){?>
                <?php echo Yii::t('app',$aboutUs->content)?>
            <?php }?>
        </div>

        <!--
            <ul class="row row_team">
                <li class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="text-center">
                        <div class="member-thumb">
                            <img src="images/member1.jpg" class="img-responsive" alt="member 1" />
                            <div class="thumb-overlay">
                                <a href="#"><span class="social-icon-fb"></span></a>
                                <a href="#"><span class="social-icon-twitter"></span></a>
                                <a href="#"><span class="social-icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-inner">
                            <p class="team-inner-header">TRACY</p>
                            <p class="team-inner-subtext">Designer</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="text-center">
                        <div class="member-thumb">
                            <img src="images/member2.jpg" class="img-responsive" alt="member 2" />
                            <div class="thumb-overlay">
                                <a href="#"><span class="social-icon-fb"></span></a>
                                <a href="#"><span class="social-icon-twitter"></span></a>
                                <a href="#"><span class="social-icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-inner">
                            <p class="team-inner-header">MARY</p>
                            <p class="team-inner-subtext">Developer</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="text-center">
                        <div class="member-thumb">
                            <img src="images/member3.jpg" class="img-responsive" alt="member 3" />
                            <div class="thumb-overlay">
                                <a href="#"><span class="social-icon-fb"></span></a>
                                <a href="#"><span class="social-icon-twitter"></span></a>
                                <a href="#"><span class="social-icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-inner">
                            <p class="team-inner-header">JULIA</p>
                            <p class="team-inner-subtext">Director</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="text-center">
                        <div class="member-thumb">
                            <img src="images/member4.jpg" class="img-responsive" alt="member 4" />
                            <div class="thumb-overlay">
                                <a href="#"><span class="social-icon-fb"></span></a>
                                <a href="#"><span class="social-icon-twitter"></span></a>
                                <a href="#"><span class="social-icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-inner">
                            <p class="team-inner-header">LINDA</p>
                            <p class="team-inner-subtext">Manager</p>
                        </div>
                    </div>
                </li>
            </ul>

            -->
    </div>
</div><!-- /.templatemo-team -->

<div id="templatemo-portfolio" >
    <div class="container">
        <div class="row">
            <div class="templatemo-line-header" >
                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey" style="text-transform: uppercase"><?php echo Yii::t('app','GALERIJA')?></span>
                    <hr class="team_hr team_hr_right hr_gray" />
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                <div class="text-center">

                </div>
            </div>
        </div> <!-- /.row -->

        <div class="clearfix"></div>
        <div class="text-center">

            <ul class="templatemo-project-gallery" >

                <?php if(!empty($productGallery)){
                        foreach($productGallery as $product){?>
                            <li class="col-lg-2 col-md-2 col-sm-2 gallery <?php echo 'gallery-'.$product->id ?>">
                                <a class="colorbox" href="<?php echo $product->content ?>" data-group="<?php echo 'gallery-'.$product->id ?>">
                                    <div class="templatemo-project-box">
                                        <img src="<?php echo $product->content?>" class="img-responsive" alt="gallery" style='height:100%;width:100%' /> <!-- main img -->
                                    </div>
                                </a>
                            </li>
                            <div class="hidden">
                                <?php if(!empty($product->galleryItems)){
                                    foreach($product->galleryItems as $key=>$val){?>
                                        <a class="colorbox" href="<?php echo $val['content'] ?>" data-group="<?php echo 'gallery-'.$product->id ?>"></a>
                                <?php }} ?>
                            </div>
                <?php }}?>
                <!--
                                            <li class="col-lg-2 col-md-2 col-sm-2  gallery  graphic" >
                                                <a class="colorbox" href="img1.jpg" data-group="graphic">
                                                    <div class="templatemo-project-box">

                                                        <img src="img1.jpg" class="img-responsive" alt="gallery" style='height:100%' />


                                                    </div>
                                                </a>
                                            </li>

                                                            <div class="hidden">
                                                                <a class="colorbox" href="img1.jpg" data-group="graphic"></a>
                                                                <a class="colorbox" href="img2.jpg" data-group="graphic"></a>
                                                                <a class="colorbox" href="img3.jpg" data-group="graphic"></a>
                                                            </div>


                                                                                     <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-2.jpg" data-group="gallery-creative">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-2.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Creative</h5>
                                                                                                     <hr />
                                                                                                     <h4>BREAKFAST</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >

                                                                                         <a class="colorbox" href="images/full-gallery-image-3.jpg" data-group="gallery-inspiration">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-3.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Inspiration</h5>
                                                                                                     <hr />
                                                                                                     <h4>GREEN COLORS</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>

                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-4.jpg" data-group="gallery-design">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-4.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Web Design</h5>
                                                                                                     <hr />
                                                                                                     <h4>CAMERA</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>
                                                                                     <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-5.jpg" data-group="gallery-inspiration">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-5.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Inspiration</h5>
                                                                                                     <hr />
                                                                                                     <h4>PLANT</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>
                                                                                     <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Inspiration</h5>
                                                                                                     <hr />
                                                                                                     <h4>CABLE TRAIN</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-7.jpg" data-group="gallery-design">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Web Design</h5>
                                                                                                     <hr />
                                                                                                     <h4>CITY</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-8.jpg" data-group="gallery-creative">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Creative</h5>
                                                                                                     <hr />
                                                                                                     <h4>BIRDS</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Graphic</h5>
                                                                                                     <hr />
                                                                                                     <h4>NATURE</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>

                                                                                     <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                                                                                         <a class="colorbox" href="images/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                                                                             <div class="templatemo-project-box">
                                                                                                 <img src="images/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                                                                                 <div class="project-overlay">
                                                                                                     <h5>Inspiration</h5>
                                                                                                     <hr />
                                                                                                     <h4>DOGGY</h4>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </a>
                                                                                     </li>
                                                                                     -->

            </ul><!-- /.gallery -->
        </div>
        <div class="clearfix"></div>

    </div><!-- /.container -->
</div> <!-- /.templatemo-portfolio -->



<div id="templatemo-contact" style='margin-bottom:30px;'>
    <div class="container">
        <div class="row">
            <div class="templatemo-line-header head_contact">
                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey" style="text-transform: uppercase"><?php echo Yii::t('app','Kontakt')?></span>
                    <hr class="team_hr team_hr_right hr_gray"/>
                </div>
            </div>

            <div class="col-md-8">
                <div class="templatemo-contact-map" id="map-canvas"> </div>
                <div class="clearfix"></div>

            </div>
            <div class="col-md-4 contact_right">
                <?php if(!empty($contact)){?>
                    <p><img src="/images/location.png" alt="icon 1" /><?php echo Yii::t('app',$contact->title)?></p>
                    <p><img src="/images/phone1.png"  alt="icon 2" /><?php echo Yii::t('app',$contact->content) ?></p>
                    <p><img src="/images/globe.png" alt="icon 3" /><a class="link_orange" href="<?php echo $contact->excerpt?>" target="_blank"><span class="txt_orange"><?php echo Yii::t('app',$contact->excerpt)?></span></a></p>
                    <form class="form-horizontal" action="<?php echo Url::toRoute('site/contact')?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="ContactForm['name']" class="form-control" placeholder="Your Name..." maxlength="40" />
                        </div>
                        <div class="form-group">
                            <input type="email"  name="ContactForm['email']" class="form-control" placeholder="Your Email..." maxlength="40" />
                        </div>
                        <div class="form-group">
                            <textarea  class="form-control"  name="ContactForm['body']" style="height: 130px;" placeholder="Write down your message..."></textarea>
                        </div>
                        <?php if(Yii::$app->session->hasFlash('error')){?>
                            <p style="color:red"><?php echo Yii::t('app',Yii::$app->session->getFlash('error')) ?></p>
                        <?php }?>
                        <?php if(Yii::$app->session->hasFlash('success')){?>
                            <p style="color:green"><?php echo Yii::t('app',Yii::$app->session->getFlash('success')) ?></p>
                        <?php }?>
                        <button id="bottom" type="submit" class="btn btn-orange pull-right">Pošalji</button>
                    </form>
                <?php }?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#templatemo-contact -->

<script>
    window.onload = function(){
        $('#language').change(function(){
            var lang = $('#language').val();
            chnageLang(lang);
        });

       function chnageLang(lang){
           $.ajax({
               type: 'POST',
               dataType:'JSON',
               url: '<?php echo Url::toRoute('site/change-language')?>',
               data: {
                   id:lang,
               }
           }).done(function(r){
               if(r.success){
                   location.reload();

               }else{
                   alert(r.message);
               }
           })
       }
    }

</script>
