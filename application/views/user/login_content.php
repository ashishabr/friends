        
            <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input name="lemail" type="text" class="form-control" placeholder="User Email">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input name="lpass" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <!-- <div class="fm-checkbox">
                    <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
                </div> -->
                <button name="login_user" href="#" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>

            <div class="nk-navigation nk-lg-ic">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                <!-- <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a> -->
            </div>
        </div>
        <img id="loading_gif" width="100" src="<?= base_url(); ?>/assets/img/loading.gif">
        <!-- </form> -->
        <style type="text/css">
            #loading_gif
            {
                display: none;
            }
        </style>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#login_user").click(function(){
              $("#loading_gif").show();

            });
        });
        </script>



