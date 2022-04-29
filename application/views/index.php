<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
<?php $this->load->view('includes/header'); ?>
    <main index>
        <section id="banner">
            <div id="banner_slider"  class="owl-carousel owl-theme">
                <div class="item">
                    <div class="image">
                        <img src="<?= get_site_image_src("images", $content['image1'], '1400p_'); ?>" alt="">
                    </div>
                   
                </div>
                <div class="item">
                    <div class="image">
                        <img src="<?= get_site_image_src("images", $content['image2'], '1400p_'); ?>" alt="">
                    </div>
                    
                </div>
                <div class="item">
                    <div class="image">
                        <img src="<?= get_site_image_src("images", $content['image3'], '1400p_'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="banner_cntnt">
                <div class="contain">
                    <div class="content" data-aos="fade-up" data-aos-duration="1000">
                                
                        <h1><?=$content['banner_heading1']?></h1>
                        <p><?=$content['banner_detail1']?></p>
                        <div class="bTn">
                            <a href="<?=cms_button($content['banner_button_link1'])?>" class="webBtn roundBtn colorBtn"><?=$content['banner_button_text1']?></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- banner -->
        <section class="feature">
            <div class="contain">
                <div class="flex">
                    <?php for($i=1; $i<=3; $i++): ?>
                        <div class="col">
                            <div class="inner" data-aos="fade-in" data-aos-duration="1000">
                                <div class="image">
                                    <img src="<?= get_site_image_src("images", $content['image'.($i+3)], 'thumb_'); ?>" alt="">
                                </div>
                                <h4><?=$content['three_card_heading'.$i]?></h4>
                                <p><?=$content['three_card_desc'.$i]?></p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
       <section class="abt_sec">
           <div class="flex">
               <div class="colL" data-aos="fade-in" data-aos-duration="1000">
                    <div class="image">
                        <img src="<?= get_site_image_src("images/", $content['image7'], '800p_'); ?>" alt="">
                    </div>
               </div>
               <div class="colR">
                    <div class="inner" data-aos="fade-in" data-aos-duration="1000">
                        <div class="sec_heading">
                            <h3><?=$content['au_colored_heading']?></h3>
                            <h2><?=$content['au_heading']?></h2>
                        </div>
                        <?=$content['au_detail']?>
                        <div class="bTn">
                            <a href="<?=cms_button($content['au_button_link'])?>" class="webBtn roundBtn"><?=$content['au_button_title']?></a>
                        </div>
                    </div>
               </div>
           </div>
       </section>
       <section class="services_sec">
           <div class="contain">
               <div class="_cntnt" data-aos="fade-in" data-aos-duration="1000">
                   <div class="sec_heading">
                        <h3><?=$content['os_colored_heading']?></h3>
                        <h2><?=$content['os_heading']?></em></h2>
                    </div>
                    <p><?=$content['os_detail']?></p>
               </div>
               <div id="owl-pro"  class="owl-carousel owl-theme" >
                   <?php foreach($services as $index => $s): ?>
                        <div class="inner" data-aos="fade-in" data-aos-duration="1000">
                            <a href="<?=base_url()?>services" class="_inner">
                                <img src="<?= get_site_image_src("services", $s->image, '300p_'); ?>">
                            </a>
                            <div class="cntnt">
                                <h3><?=$s->name?></h3>
                                <?=short_text($s->detail)?>
                                <div class="bTn">
                                    <a href="<?=base_url()?>services" class="webBtn roundBtn">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
               </div>
           </div>
       </section>

       <section class="abt_sec abt_sec_copy">
           <div class="flex">
               
               <div class="colR">
                    <div class="inner" data-aos="fade-in" data-aos-duration="1000">
                        <div class="sec_heading">
                            <h3><?=$content['wsu_colored_heading']?></h3>
                            <h2><?=$content['wsu_heading']?></h2>
                        </div>
                        <?=$content['wsu_detail']?>
                    </div>
               </div>
               <div class="colL">
                    <div class="image" data-aos="fade-in" data-aos-duration="1000">
                        <img src="<?= get_site_image_src("images/", $content['image8'], '800p_'); ?>" alt="">
                    </div>
               </div>
           </div>
       </section>
       <section class="opertunities_sec">
           <div class="contain">
               <div class="cntnt ">
                    <div class="sec_heading text-center" data-aos="fade-in" data-aos-duration="1000">
                        <h3><?=$content['wwwu_colored_heading']?></h3>
                        <h2><?=$content['wwwu_heading']?></h2>
                    </div>
               </div>
               <div class="flex">
                   <div class="colL">
                       <div class="image" data-aos="fade-in" data-aos-duration="1000">
                            <img src="<?= get_site_image_src("images/", $content['image9'], '800p_'); ?>" alt="">
                       </div>
                   </div>
                   <div class="colR" data-aos="fade-in" data-aos-duration="1000">
                   <?=$content['wwwu_detail']?>
                   <div class="bTn">
                            <a href="<?=cms_button($content['wwwu_button_link'])?>" class="webBtn roundBtn"><?=$content['wwwu_button_title']?></a>
                        </div>
                   </div>
               </div>
           </div>
       </section>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>