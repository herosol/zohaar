<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
    <main index>
    <section class="about_banner" style="background:url(<?= get_site_image_src("images", $content['image1'], '2000p_'); ?>)">
        <div class="contain">
            <div class="cntnt" data-aos="fade-in" data-aos-duration="1000">
                <h1><?=$content['banner_heading']?></h1>
                <p><?=$content['banner_detail']?></p>
            </div>
            
        </div>
    </section>
    <section id="contact">
        <div class="contain">
            <div class="info_row flex_row text-center flex" data-aos="fade-in" data-aos-duration="1000">
                <div class="col">
                    <div class="inner">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <h5><?=$content['l_heading_1']?></h5>
                        <span><?=$content['l_detail_1']?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h5><?=$content['l_heading_2']?></h5>
                        <a href="tel:<?=$content['l_detail_2']?>"><?=$content['l_detail_2']?></a>
                    </div>
                </div>
                <div class="col">
                    <div class="inner">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <h5><?=$content['l_heading_3']?></h5>
                        <a href="mailto:<?=$content['l_detail_3']?>"><?=$content['l_detail_3']?></a>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="colL" data-aos="fade-in" data-aos-duration="1000">
                    <form action="" method="POST" class="formAjax" id="">
                        <h3 class="heading text-center"><?=$content['form_heading']?></h3>
                        <div class="form_row row">
                            <div class="col-xs-6">
                                <h6><?=$content['field_text1']?> <sup>*</sup></h6>
                                <div class="form_blk">
                                    <input type="text"name="name" id="name" class="txtBox" placeholder="<?=$content['field_placeholder1']?>">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h6><?=$content['field_text2']?> <sup>*</sup></h6>
                                <div class="form_blk">
                                    <input type="text" name="phone" id="phone" class="txtBox" placeholder="<?=$content['field_placeholder2']?>">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h6><?=$content['field_text3']?> <sup>*</sup></h6>
                                <div class="form_blk">
                                    <input type="text" name="email" id="email" class="txtBox" placeholder="<?=$content['field_placeholder3']?>">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h6><?=$content['field_text4']?> <sup>*</sup></h6>
                                <div class="form_blk">
                                    <input type="text" name="subject" id="subject" class="txtBox" placeholder="<?=$content['field_placeholder4']?>">
                                </div>
                            </div>
                            
                            <div class="col-xs-12">
                                <h6><?=$content['field_text5']?></h6>
                                <div class="form_blk">
                                    <textarea name="msg" id="msg" class="txtBox" placeholder="<?=$content['field_placeholder5']?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk form_btn text-center"><button type="submit" class="webBtn colorBtn roundBtn"><i class="spinner hidden"></i><?=$content['button_text']?></button></div>
                    </form>
                </div>
                <div class="colR" data-aos="fade-in" data-aos-duration="1000">
                    <div class="map_blk">
                        <div id="map">
                            <iframe src="<?=$content['iframe_link']?>" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
                

                
        </div>

        
    </section>
       
    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>