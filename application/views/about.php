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
    <section class="opertunities_sec after_abt_opertunitines">
           <div class="contain">
               
               <div class="flex">
                   <div class="colL">
                       <div class="image" data-aos="fade-in" data-aos-duration="1000">
                           <img src="<?= get_site_image_src("images", $content['image2'], '500p_'); ?>" alt="">
                       </div>
                   </div>
                   <div class="colR" data-aos="fade-in" data-aos-duration="1000">
                        <div class="sec_heading">
                            <h2><?=$content['ceo_heading']?></h2>
                        </div>
                        <?=$content['ceo_detail']?>
                   </div>
               </div>
           </div>
       </section>
       <section class="we-offer">
            <div class="contain">
                <div class="flex">
                    
                    <div class="colR" data-aos="fade-in" data-aos-duration="1000">
                        <ul class="flex">
                            <?php for($i=1; $i<=4; $i++): ?>
                                <li>
                                    <div class="_inner flex">   
                                        <div class="inner-cntnt">
                                            <h4><?=$content['wln_card_heading'.$i]?></h4>
                                            <p><?=$content['wln_card_desc'.$i]?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="colL" data-aos="fade-in" data-aos-duration="1000">
                        <div class="cntnt">
                            <div class="sec_heading">
                                <h2><?=$content['wln_heading']?></h2>
                            </div>
                            <?=$content['wln_detail']?>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </section>
        <section class="history_sec">
            <div class="contain">
                <div class="cntnt text-center">
                    <div class="sec_heading">
                        <h2><?=$content['sec4_heading']?></h2>
                    </div>
                    <?=$content['sec4_detail']?>
                    <div class="bTn">
                        <a href="<?=cms_button($content['sec4_button_link'])?>" class="webBtn colorBtn"><?=$content['sec4_button_title']?></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>