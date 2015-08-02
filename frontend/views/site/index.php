<?php

use yii\helpers\Url;

?>
<style>
    #header{
        font-size:40px;
        font-family: ‘Metrophobic’, Arial, serif;
        font-weight: 400;
        position:relative;
        top:200px;
        color:white;
        z-index: 2;

    }
</style>
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
                 <!--   <a href="#" class="navbar-brand"><img src="/images/templatemo_logo.png" alt="Urbanic template" title="Urbanic Template" /></a> -->

                </div>
                <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                        <li class="active"><a href="#templatemo-carousel" style="text-transform: uppercase"><?php echo Yii::t('app','Početna')?></a></li>
                        <li><a href="#templatemo-about" style="text-transform: uppercase"><?php echo Yii::t('app','O nama')?></a></li>
                        <?php if(!empty($history)){?>
                        <li><a href="#templatemo-history" style="text-transform: uppercase"><?php echo Yii::t('app','Istorijat')?></a></li>
                        <?php }?>
                        <?php if(!empty($servicing)){?>
                            <li><a href="#templatemo-servicing" style="text-transform: uppercase"><?php echo Yii::t('app','Održavanje')?></a></li>
                        <?php }?>
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

<div style="width: 100%;text-align: center;">
    <h3 id="header">Reparacija - popravka persijskih tepiha</h3>
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

    </div>
</div><!-- /.templatemo-team -->

<?php if(!empty($history)){?>
    <div class="templatemo-tweets" id="templatemo-history" style="background: white!important;color:#333333;margin-top:0">
        <div class="container">
            <div class="row">
                <div class="templatemo-line-header">
                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray" /><span style="text-transform: uppercase"><?php echo Yii::t('app','Istorijat tepiha')?></span>
                        <hr class="team_hr team_hr_right hr_gray"  />
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div style='padding-right:70px;text-align:left;margin-top:40px;font-size:15px;text-align: justify'>
                <?php if(!empty($history)){?>
                    <?php echo Yii::t('app',$history->content)?>
                <?php }?>
            </div>

        </div>
    </div><!-- /.templatemo-team -->

<?php }?>

<?php if(!empty($servicing)){?>
    <div class="templatemo-tweets" id="templatemo-servicing">
        <div class="container">
            <div class="row">
                <div class="templatemo-line-header">
                    <div class="text-center">
                        <hr class="team_hr team_hr_left"/><span style="text-transform: uppercase"><?php echo Yii::t('app','Održavanje')?></span>
                        <hr class="team_hr team_hr_right" />
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div style='padding-right:70px;text-align:left;margin-top:40px;font-size:15px;text-align: justify'>
                <?php if(!empty($servicing)){?>
                    <?php echo Yii::t('app',$servicing->content)?>
                <?php }?>
            </div>

        </div>
    </div><!-- /.templatemo-team -->

<?php }?>

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
            <ul class="templatemo-project-gallery" >
                <?php foreach($productGallery as $product){?>
                            <li class="col-lg-2 col-md-2 col-sm-2 gallery <?php echo 'gallery-'.$product->id ?>">
                                <a class="colorbox" href="<?php echo $product->content ?>" data-group="<?php echo 'gallery-'.$product->id ?>">
                                    <div class="templatemo-project-box">
                                        <img src="<?php echo $product->content?>" class="img-responsive" alt="gallery" style='height:100%;width:100%' /> <!-- main img -->
                                        <div class="project-overlay">
                                            <h4><?php echo Yii::t('app',$product->title)?></h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <div class="hidden">
                                <?php if(!empty($product->galleryItems)){
                                    foreach($product->galleryItems as $key=>$val){?>
                                        <a class="colorbox" href="<?php echo $val['content'] ?>" data-group="<?php echo 'gallery-'.$product->id ?>"></a>
                                <?php }} ?>
                            </div>
                <?php }?>
            </ul><!-- /.gallery -->

    </div><!-- /.container -->
</div> <!-- /.templatemo-portfolio -->

<div id="templatemo-contact" style='margin-bottom:30px;border:none'>
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
                    <p><img src="/images/fb.png"  alt="fb" /><a href="<?php echo $contact->excerpt?>" style="color:rgb(51, 51, 51);margin-left:3px;" target="_blank"><?php echo Yii::t('app','reparacija-popravka persijskih tepiha')?></a></p>

                    <form class="form-horizontal" action="<?php echo Url::toRoute('site/contact')?>" method="POST">
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name..." maxlength="40" />
                        </div>
                        <div class="form-group">
                            <input type="email"  name="email" class="form-control" placeholder="Your Email..." maxlength="40" />
                        </div>
                        <div class="form-group">
                            <textarea  class="form-control"  name="body" style="height: 130px;" placeholder="Write down your message..."></textarea>
                        </div>
                        <?php if(Yii::$app->session->hasFlash('error')){?>
                            <p style="color:red"><?php echo Yii::t('app',Yii::$app->session->getFlash('error')) ?></p>
                        <?php }?>
                        <?php if(Yii::$app->session->hasFlash('success')){?>
                            <p style="color:green"><?php echo Yii::t('app',Yii::$app->session->getFlash('success')) ?></p>
                        <?php }?>
                        <button id="bottom" type="submit" class="btn btn-orange pull-right"><?php echo Yii::t('app','Pošalji')?></button>
                    </form>
                <?php }?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#templatemo-contact -->

<?php if(!empty($partners)){?>
<div class="templatemo-partners" style="border:none" >
    <div class="container">
        <div class="row">


            <div class="templatemo-line-header" >
                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey" style="text-transform: uppercase;"><?php  echo Yii::t('app','Naši partneri')?></span>
                    <hr class="team_hr team_hr_right hr_gray" />
                </div>
            </div>
            <div class="clearfix"></div>


            <div class="text-center">

                <div style="margin-top:60px;">
                    <ul class="list-inline">
                        <?php foreach($partners as $partner){?>
                            <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                <a href="<?php echo $partner['content']?>" style="font-size: 30px;color:#ff7600" target="_blank"><?php echo $partner['excerpt']?></a>
                            </li>
                        <?php }?>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>

<?php }?>
<div class="templatemo-footer" style="">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="footer_container">
                    <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top" style="text-transform: uppercase"><?php echo Yii::t('app','Vrati se na početak')?></a>
                    <div class="height30"></div>
                </div>
            </div>
        </div>
    </div>
</div>

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
