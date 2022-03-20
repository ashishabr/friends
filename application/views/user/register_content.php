
        <div class="nk-block" id="l-register">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input name="user_name" type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input name="user_pass" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input name="user_country" type="text" class="form-control" placeholder="Country">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="email" name="user_email" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-refresh"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="designation" class="form-control" placeholder="Designation">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-form"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="fav_actor" class="form-control" placeholder="Favourit Actor">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-search"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="fav_color" class="form-control" placeholder="Favourit Color">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <select name="user_gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro reg_icon"><i class="notika-icon notika-up-arrow"></i></span>
                    <label class="reg_label">Profile Picture</label>
                    <div class="nk-int-st">
                        <input id="user_image" type="file" name="user_image" class="form-control" placeholder="Profile image">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro reg_icon"><i class="notika-icon notika-menus"></i></span>
                    <label class="reg_label">Date of birth</label>
                    <div class="nk-int-st">
                        <input type="date" name="dob" class="form-control" placeholder="Date of birth">
                    </div>
                </div>
                

                <div class="fm-checkbox">
                    <label><input name="ragree" type="checkbox" class="i-checks"> <i></i> Agree the <a href="">terms and policy</a></label>
                </div>
                <button type="submit" name="reg_user" href="#" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></button>
            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <!-- <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a> -->
            </div>
        </div>
        <img id="loading_gif" width="100" src="<?= base_url(); ?>/assets/img/loading.gif">

        <style type="text/css">
            #loading_gif
            {
                display: none;
            }
        </style>