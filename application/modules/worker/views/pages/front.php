<?php echo $notice;?>
<div class="container padding20">
    <h1 class="span5" style="margin: auto;border-bottom: 1px solid #ccc;margin-top: 15%">Workers <small>Secure Login</small></h1>
	<div class="span5 padding20" style="margin: auto;border-bottom: 1px solid #ccc">
    	<?php echo form_open('worker/acounts/login?user=worker');?>
    	<div class="input-control text">
            <input name="user-email" type="email" value="<?php echo set_value('user-email');?>" autofocus="autofocus" 
            placeholder="Your Email Address" 
            data-hint="Type your Email Address" data-hint-position="right" />
            <button class="btn-clear"></button>
        </div>
        <div class="input-control password">
            <input name="user-password" type="password" value="" placeholder="Your Password" 
            requir" 
            data-hint="Type your Password" data-hint-position="right" />
            <button class="btn-reveal"></button>
        </div>
        <div class="input-control checkbox">
            <label>
                <input type="checkbox" name="r-me"/>
                <span class="check"></span>
                Remember me ?
            </label>
        </div>
        <button class="image-button info place-right" style="margin-top: 8px">
	        Login
            <i class="bg-cobalt icon-enter"></i>
        </button>
        <?php echo form_close();?>
    </div>
    <div class="padding20 span5" style="margin: 0px auto;border-bottom: 1px solid #ccc">
        <small>Don't have an acount ? <a href="<?php echo base_url();?>worker/register">Register.</a></small>
    </div>
    <div class="span5 margin20 padding20" style="margin: 0px auto">
    	<small>&copy;<?php echo date("Y"); ?><a href="<?php echo base_url();?>"> coinacademe.com</a></small>
    </div>
</div>