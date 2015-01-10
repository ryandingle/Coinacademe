<?php echo $notice;?>
<div class="container" style="padding-top: 11.1%;padding-bottom: 8.8%;">
    <div class="row span5" style="margin: 0px auto;">
        <div class="span5">
            <?php echo form_open('home/acounts/register?action=process');?>
            <header style="margin-bottom: 20px;"><h1>Register</h1></header>
            <div class="input-control text size5">
                <input name="user-email" type="email" value="<?php echo set_value('user-email');?>" placeholder="Email Address" required="required"
                data-hint="Type your Emaill Address"
                data-hint-position="right"
                />
                <button class="btn-clear"></button>
            </div>
            <div class="input-control password size5">
                <input name="user-password" type="password" value="" placeholder="Password" required="required"
                data-hint="Type your password."
                data-hint-position="right"
                />
                <button class="btn-reveal"></button>
            </div>
            <div class="input-control password size5">
                <input name="user-password2" type="password" placeholder="Repeat Password" required="required"
                data-hint="Repeat typing your password."
                data-hint-position="right"
                />
                <button class="btn-reveal"></button>
            </div>
            <button class="image-button primary place-right" style="margin-top: 8px">
                Register
                <i class="bg-cobalt icon-checkmark"></i>
            </button>
            <div class="input-control checkbox">
                    </label>
                    <label>
                        Have an acount ? <a href="<?php echo base_url();?>home/login">Login</a>
                    </label>
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>