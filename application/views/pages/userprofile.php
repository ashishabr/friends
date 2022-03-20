 <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2><?= $userdata->user_name; ?></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-4">Email :</p><input type="text" class="col-lg-6" value="<?= $userdata->user_email; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-4">Gender :</p><input type="text" class="col-lg-6" value="<?= $userdata->user_gender; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-4">DOB :</p><input type="text" class="col-lg-6" value="<?= $userdata->dob; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-6">Designation</p><input type="text" class="col-lg-6" value="<?= $userdata->designation; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-6">Country</p><input type="text" class="col-lg-6" value="<?= $userdata->user_country; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-6">Favourite Color</p><input type="text" class="col-lg-6" value="<?= $userdata->fav_color; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <p class="col-lg-6">Favourite Actor</p><input type="text" class="col-lg-6" value="<?= $userdata->fav_actor; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div id="btn_add_frnd">
                                <?php 
                                if ($addedfrnd == 1) 
                                {
                                    ?>
                                    <div class="prof_view_btn_after btn notika-btn-bluegray btn-reco-mg btn-button-mg waves-effect" onclick="addedfriend()">Added</div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <a class="prof_view_btn btn btn-success notika-btn-success waves-effect" onclick="addfriend(<?= $userdata->user_id; ?>)" >Add Friend</a>    
                                    <?php
                                }
                                ?>
                                    
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>