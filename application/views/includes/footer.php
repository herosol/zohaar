<section class="newsletter">
            <div class="contain">
                <div class="cntnt" data-aos="fade-in" data-aos-duration="1000">
                    <div class="sec_heading text-center">
                        <h2><?=$site_settings->site_pre_footer_heading?></h2>
                    </div>
                    <p><?=$site_settings->site_pre_footer_tagline?></p>
                    <form action="<?= base_url('newsletter')?>" method="post" autocomplete="off" class="formAjax" id="newsletterFrm">
                        <div class="relative">
                            <input type="email" name="email" id="email" placeholder="<?=$site_settings->site_pre_footer_field_text?>" class="txtBox">
                            <button class="webBtn colorBtn" type="submit"><i class="spinner hidden"></i><?=$site_settings->site_pre_footer_button_text?></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<footer>
    <div class="contain">
        <div class="flexRow flex">
            <div class="col">
                <h5><?=$site_settings->site_first_section_heading?></h5>
                <p><?=$site_settings->site_footer_text?></p>
                <ul class="inline_listing_footer">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="<?=base_url()?>about-us">About Us</a></li>
                    <li><a href="<?=base_url()?>services">Services</a></li>
                    <li><a href="<?=base_url()?>opportunities">Opportunities</a></li>
                    <li><a href="<?=base_url()?>contact-us">Contact Us</a></li>
                </ul>
                <ul class="social flex">
                    <li><a href="<?=$site_settings->site_instagram?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-instagram.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_facebook?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-facebook.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_youtube?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-youtube.svg')?>" alt=""></a></li>
                    <li><a href="<?=$site_settings->site_twitter?>" target="_blank" style="display: block;"><img src="<?=asset('images/social-twitter.svg')?>" alt=""></a></li>
                   
                </ul>
            </div>
            
            <div class="col">
                <h5><?=$site_settings->site_first_section_heading?></h5>
                <ul class="lst infoLst">
                    
                        <li>
                            <img src="<?=asset('images/icon-map-marker.svg')?>" alt="">
                            <span><?=$site_settings->site_address?></span>
                        </li>
                        <li>
                            <img src="<?=asset('images/icon-envelope-fill.svg')?>" alt="">
                            <a href="mailto:<?=$site_settings->site_email?>"><?=$site_settings->site_email?></a>
                        </li>
                        <li>
                            <img src="<?=asset('images/icon-phone.svg')?>" alt="">
                            <a href="tel:<?=$site_settings->site_phone?>"><?=$site_settings->site_phone?></a>
                        </li>
                </ul>
                
            </div>
            
        </div>
    </div>
    <div class="copyright relative">
        <div class="contain">
            <div class="inner">
                <p><?=$site_settings->site_copyright?></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- Main Js -->
<?php $this->load->view('includes/commonjs'); ?>