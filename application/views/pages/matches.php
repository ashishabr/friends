<div class="contact-area">
        <div class="container">
            <div class="row">
            <?php
            if ($userdata != NULL) 
            {
                // print_r($userdata);
                // die();
            foreach($userdata as $userval)
            {
            ?>       
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list mg-t-30">
                                <div class="contact-win">
                                    <div class="contact-img">
                                        <img src="<?= base_url($userval['data']->user_image); ?>" alt="" />
                                    </div>
                                    <div class="conct-sc-ic">
                                        <a class="btn" href="#"><i class="notika-icon notika-facebook"></i></a>
                                        <a class="btn" href="#"><i class="notika-icon notika-twitter"></i></a>
                                        <a class="btn" href="#"><i class="notika-icon notika-pinterest"></i></a>
                                    </div>
                                </div>
                                <div class="contact-ctn">
                                    <div class="contact-ad-hd">
                                        <h2><?= $userval['data']->user_name; ?></h2><a class="prof_view_btn btn btn-success notika-btn-success waves-effect" href="<?= base_url(); ?>dashboard/userprofile/<?= $userval['data']->user_id; ?>">view profile</a>
                                        <p class="ctn-ads"><?= $userval['data']->user_country; ?></p>
                                    </div>
                                    <p class="ctn-ads"><?= $userval['data']->designation; ?></p>
                                    <p class="ctn-ads"><?= $userval['prcnt']."% Matched profile"; ?></p>
                                    <br>
                                </div>
                                <div class="social-st-list">
                                    <div class="social-sn">
                                        <h2>Favourite Actor:</h2>
                                        <p><?= $userval['data']->fav_actor; ?></p>
                                    </div>
                                    <div class="social-sn">
                                        <h2>Favourite Color:</h2>
                                        <p><?= $userval['data']->fav_color; ?></p>
                                    </div>
                                    <div class="social-sn">
                                        <h2>Gender:</h2>
                                        <p><?= $userval['data']->user_gender; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            <?php } } ?>
            </div>
        </div>
</div>