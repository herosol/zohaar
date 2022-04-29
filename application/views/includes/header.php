<header class="ease">
    
    <div class="contain">
        <div class="logo">
            <a href="<?=base_url()?>">
                <img src="<?= get_site_image_src("images", $site_settings->site_logo); ?>" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <ul id="nav" nav>
                <li class="<?php if ($page == "" || $page == "index") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li class="<?php if ($page == "about-us") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url()?>about-us">About Us</a>
                </li>
                <li class="<?php if ($page == "services") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url()?>services">Services</a>
                </li>
                <li class="<?php if ($page == "opportunities") {
                                echo 'active';
                            } ?>">
                    <a href="<?=base_url()?>opportunities">Opportunities</a>
                </li>
                <li class="<?php if ($page == "contact-us") {
                                echo 'active';
                            } ?> btnLi">
                    <a href="<?=base_url()?>contact-us" class="webBtn roundBtn">Contact Us</a>
                </li>
            
                
                
            </ul>
            
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->
<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>