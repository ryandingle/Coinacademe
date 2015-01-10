<?php echo $notice;?>
<div class="container">
    <div class="row" style="padding-top: 11.5%;padding-bottom: 10%">
        <div class="span4" style="margin: 0px auto">
            <div class="span4">
                <?php echo form_open('home/acounts/login?action=validate&user=user');?>
                <header style="margin-bottom: 20px"><h1 class="size6">Login</h1></header>
                <div class="input-control text">
                    <input name="user-email" type="email" value="<?php echo set_value('user-email');?>" placeholder="Email" required="required" autofocus="autofocus"
                    data-hint="Type your email address ex.(myname@ex.com)"
                    data-hint-position="left"
                    />
                    <button class="btn-clear"></button>
                </div>
                <div class="input-control password">
                    <input name="user-password" type="password" placeholder="Password" required="required"
                    data-hint="Type your password."
                    data-hint-position="right"
                    />
                    <button class="btn-reveal"></button>
                </div>
                <div class="input-control checkbox">
                    <label>
                        <input name="r-me" type="checkbox" />
                        <span class="check"></span>
                        Remember me ?
                        
                    </label>
                </div>
                <button class="image-button primary place-right" style="margin-top: 8px">
                    Login
                    <i class="bg-cobalt icon-enter"></i>
                </button>
                <div class="input-control checkbox">
                    </label>
                    <label>
                        Dont have an acount ? <a href="<?php echo base_url();?>home/register">Register/Signup</a>
                    </label>
                    <label>
                        <a href="<?php echo base_url();?>password/reset_password">Forgot Password ?</a>
                    </label>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>