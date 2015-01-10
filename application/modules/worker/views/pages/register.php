<div class="container padding20">
    <h1 class="span5" style="margin: auto;border-bottom: 1px solid #ccc;margin-top: 13%">Workers <small>Registration</small></h1>
	<div class="span5" style="padding-top: 20px;margin: auto;border-bottom: 1px solid #ccc">
    	<?php echo form_open('worker/acounts/register');?>
    	<div class="input-control text">
            <input name="user-email" type="email" value="<?php echo set_value('user-email');?>" 
            autofocus="autofocus" placeholder="Your Email Address" required="required"
            data-hint="Type your Email Address" data-hint-position="right"/>
            <button class="btn-clear"></button>
        </div>
        <div class="input-control password">
            <input name="user-password" type="password" value="" placeholder="Your Password"
            data-hint="Type your Password" data-hint-position="right" required="required"/>
            <button class="btn-reveal"></button>
        </div>
        <div class="input-control password">
            <input name="user-password2" type="password" value="" placeholder="Repeat Password"
            data-hint="Repeat typing your Password" data-hint-position="right" required="required"/>
            <button class="btn-reveal"></button>
        </div>
        <div class="input-control text size3">
            <input name="user-key" type="text" value="" placeholder="Registration Key" required="required"
            data-hint="Type your Registration key upon application" data-hint-position="right"/>
            <button class="btn-clear"></button>
        </div>
        <button class="info large span5" style="margin-top: 8px">
	        Register <i class="icon-checkmark"></i>
        </button>
        <?php echo form_close();?>
    </div>
    <div class="span5" style="padding-top:20px;padding-bottom:20px;margin: 0px auto;border-bottom: 1px solid #ccc">
        <small>Have an acount ? <a href="<?php echo base_url();?>worker/login">Login now!</a></small>
    </div>
    <div class="span5" style="padding-top:20px;margin: 0px auto">
    	<small>&copy;<?php echo date("Y"); ?><a href="<?php echo base_url();?>"> coinacademe.com</a></small>
    </div>
</div>