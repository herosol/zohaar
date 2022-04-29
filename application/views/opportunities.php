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
                <h1>Opportunities</h1>
                <p>Dr Beatrice A. Ramsey one of the best Cardiology in Bangladesh, In the world, In the Galaxy.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
        </div>
    </section>
        <section class="opper_sec">
            <div class="contain">
                <div class="flex">
                    <?php foreach($opportunities as $index => $o): ?>
                        <div class="col" data-aos="fade-in" data-aos-duration="1000">
                            <div class="inner">
                                <div class="sec_heading">
                                    <h2><?=$o->name?></h2>
                                </div>
                                <?=$o->detail?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>