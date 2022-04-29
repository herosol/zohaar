<?php echo getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?php echo base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Main Banner</h3>
            <?php for($i=1; $i<=3; $i++ ): ?>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Image <?=$i?>
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image'.$i]) ? base_url().UPLOAD_PATH.'images/'.$row['image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image<?=$i?>" accept="image/*" <?php if(empty($row['image'.$i])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <?php if($i === 1): ?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="banner_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="banner_heading<?=$i?>" value="<?= $row['banner_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="banner_detail<?=$i?>" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                    <textarea name="banner_detail<?=$i?>" rows="2" class="form-control" ><?= $row['banner_detail'.$i] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_text<?=$i?>" class="control-label">Button Text<span class="symbol required">*</span></label>
                                    <input type="text" name="banner_button_text<?=$i?>" id="banner_button_text<?=$i?>" value="<?= $row['banner_button_text'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_link<?=$i?>" class="control-label">Button Link<span class="symbol required">*</span></label>
                                    <select name="banner_button_link<?=$i?>" id="banner_button_link<?=$i?>" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach ($pages as $index => $page) { ?>
                                            <option value="<?= $index ?>" <?= ($row['banner_button_link'.$i] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endfor; ?>

            <h3>Section 2</h3>
            <div class="form-group">
                <?php for($i = 1; $i <= 3; $i++):?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Card <?=$i?> Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("images", $row['image'.($i+3)]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image<?=($i+3)?>" accept="image/*" <?php if(empty($row['image'.($i+3)])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="three_card_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="three_card_heading<?=$i?>" value="<?= $row['three_card_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="three_card_desc<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                <textarea name="three_card_desc<?=$i?>" id="three_card_desc<?=$i?>" rows="3" class="form-control" required=""><?= $row['three_card_desc'.$i] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>
            <h3> Section 3</h3>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image7']) ? base_url().UPLOAD_PATH.'images/'.$row['image7'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image7" accept="image/*" <?php if(empty($row['image7'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="au_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="au_colored_heading" value="<?= $row['au_colored_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="au_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="au_heading" value="<?= $row['au_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="au_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="au_detail" rows="4" class="form-control ckeditor" ><?= $row['au_detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="au_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="au_button_title" id="au_button_title" value="<?= $row['au_button_title'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="au_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="au_button_link" id="au_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['au_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 4</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="os_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="os_colored_heading" value="<?= $row['os_colored_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="os_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="os_heading" value="<?= $row['os_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="os_detail" class="control-label">Short Detail <span class="symbol required">*</span></label>
                            <textarea name="os_detail" rows="4" class="form-control" ><?= $row['os_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 5</h3>
            <div class="form-group">
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="wsu_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wsu_colored_heading" value="<?= $row['wsu_colored_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="wsu_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wsu_heading" value="<?= $row['wsu_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="wsu_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="wsu_detail" rows="4" class="form-control ckeditor" ><?= $row['wsu_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image8']) ? base_url().UPLOAD_PATH.'images/'.$row['image8'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image8" accept="image/*" <?php if(empty($row['image8'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 6</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="wwwu_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wwwu_colored_heading" value="<?= $row['wwwu_colored_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="wwwu_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="wwwu_heading" value="<?= $row['wwwu_heading'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image9']) ? base_url().UPLOAD_PATH.'images/'.$row['image9'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image9" accept="image/*" <?php if(empty($row['image9'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="wwwu_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="wwwu_detail" rows="4" class="form-control ckeditor" ><?= $row['wwwu_detail'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="wwwu_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="wwwu_button_title" id="wwwu_button_title" value="<?= $row['wwwu_button_title'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="wwwu_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="wwwu_button_link" id="wwwu_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['wwwu_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>





            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>