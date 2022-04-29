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
                <h1><?=$content['banner_heading']?></em></h1>
                <p><?=$content['banner_detail']?></p>
            </div>
        </div>
    </section>
    <section class="outeService">
        <?php foreach($services as $index => $s): ?>
            <div class="innerService">
                <div class="contain">
                    <div class="flex" data-aos="fade-in" data-aos-duration="1000">
                        <div class="col">
                            <div class="sec_heading">
                                <h2><?=$s->name?></h2>
                            </div>
                            <?=$s->detail?>
                            <div class="bTn">
                                <a href="<?=base_url()?>contact-us" class="webBtn colorBtn">Contact Us</a>
                            </div>
                                
                        </div>
                        <div class="col">
                            <div class="image">
                                <img src="<?= get_site_image_src("services", $s->image, '500p_'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>