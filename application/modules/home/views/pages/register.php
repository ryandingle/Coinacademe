<div class="container" style="padding-top: 8%;padding-bottom: 7.7%">
    <div class="grid span12" style="margin: 0px auto">
        <div class="row">
            <div class="span6">
                <h1>COINACADEME</h1>
                <h2>
                Is an online educational learning school, connecting teachers and students in one system building thier activities, assignments, quizzes and more. While doing thier stuff they can also earn points that can converted to real money. Depending on thier activities level.
                </h2>
            </div>
                
            <div class="span5" style="float: right;">
                <?php echo form_open('home/acounts/register?action=process');?>
                <header style="margin-bottom: 20px;"><h1>Register</h1></header>
                <div class="input-control text">
                    <input name="user-email" type="email" value="<?php echo set_value('user-email');?>" placeholder="Email Address" required="required"
                    data-hint="Type your Emaill Address"
                    data-hint-position="right"
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
                <div class="input-control password">
                    <input name="user-password2" type="password" value="" placeholder="Repeat Password" required="required"
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
</div>