<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="entypo-doc-text"></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about_us') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about_us') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'services') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/services') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Services Content</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'opportunities') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/opportunities') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Opportunities Content</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'services' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/services') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Services</span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'opportunities' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/opportunities') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Opportunities</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/contact') ?>">
                    <i class="fa fa-usd"></i>
                    <span class="title">Manage Contact Messages</span><span class="badge badge-danger"><?=new_messages()?></span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'newsletter' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/newsletter') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Newsletter Subscriptions</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/meta-info') ?>">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>