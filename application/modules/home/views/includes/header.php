<div class="navigation-bar white fixed-top" <?php if($this->uri->segment(2) == 'register' || $this->uri->segment(2) == 'login' || $this->uri->segment(2) == 'acounts') echo 'style="border-bottom: 1px solid #ddd"';?>>
    <div class="navigation-bar-content container">
        <a href="<?php echo base_url();?>" class="element bg-hover-transparent fg-hover-black" style="margin-right: 50px">
        	COINACADEME <sup><span class="icon-coins"></span></sup>
        </a>
        <a class="element1 pull-menu" href="#"></a>
        <ul class="element-menu place-right">
			<span class="element-divider"></span>
            <?php
			if($this->uri->segment(2) == 'login' || $this->uri->segment(3) == 'login'){
            	echo '
					<li>
						<a title="Register" href="'.base_url().'home/register" class="element place-right bg-hover-white fg-hover-dark">
						Register <span class="icon-checkmark"></span>
						</a>
					</li>
					';
			}else if($this->uri->segment(2) == 'register'){
				echo '
					<li>
					   <a title="Login" href="'.base_url().'home/login" class="element place-right bg-hover-white fg-hover-dark">
					   Login <span class="icon-enter"></span>
					   </a>
					</li>';
			}else if($this->uri->segment(2) == '' || 'social' || 'cycle' || 'help'){
				echo '
					<li>
					   <a title="Login" href="'.base_url().'home/login" class="element place-right bg-hover-white fg-hover-dark">
					   Login <span class="icon-enter"></span>
						</a>
					</li>
					';
			}
			;?>
        </ul>
        
        <ul class="element-menu place-left no-tablet no-phone"  style="max-height: 50px;padding: 0">
        	<li class="bg-hover-transparent fg-hover-black" style="max-height: 50px">                
            <a href="javascript:void(0);" style="padding: 0;margin-top: 12px">
            	<div class="g-plusone" data-size="medium"  style="max-height: 50px;padding: 0"></div>
            </a>
            </li>
            
            <li class="bg-hover-transparent fg-hover-black" style="max-height: 50px;margin-top: 12px">                
            <a class="twitter-share-button" href="https://twitter.com/share"
              data-related="twitterdev"
              data-size="small"
              data-count="horizontal">
            Tweet
            </a>
            </li>
            
            <li class="bg-hover-transparent fg-hover-black" style="max-height: 50px;margin-top: 12px">
                <a href="javascript:void(0)" style="max-height: 50px;padding: 0">
                	<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                </a>
            </li>
        </ul>
            
        <ul class="element-menu place-right"> 
            <li title="Coinpal Privacy" class="bg-hover-transparent fg-hover-black">
            	<a href="http://www.coin-cast.io" target="_blank">Coincast</a>
            </li>
           
            <?php if($this->uri->segment(2) == 'login' || $this->uri->Segment(2) ==  'register'){?>
            <?php echo '
				<li title="Coinpal Social" class="bg-hover-transparent fg-hover-black">
					<a data-go="social" href="'.base_url().'home/social">Social</a>
				</li>
				<li title="Coinpal Cycle" class="bg-hover-transparent fg-hover-black">
					<a data-go="cycle" href="'.base_url().'home/cycle">Cycle</a>
				</li>
				<li title="Coinpal Help" class="bg-hover-transparent fg-hover-black">
					<a data-go="help" href="'.base_url().'home/help">Help</a>
				</li>
			';?>
            <?php }else{?>
            <?php echo '
				<li title="Coinpal Social" class="bg-hover-transparent fg-hover-black">
					<a class="go" data-go="social" href="'.base_url().'home/social">Social</a>
				</li>
				<li title="Coinpal Cycle" class="bg-hover-transparent fg-hover-black">
					<a class="go" data-go="cycle" href="'.base_url().'home/cycle">Cycle</a>
				</li>
				<li title="Coinpal Help" class="bg-hover-transparent fg-hover-black">
					<a class="go" data-go="help" href="'.base_url().'home/help">Help</a>
				</li>
			';?>
            <?php };?>
            <li style="margin-right: 10px" title="Coinpal Give | View Feedback" class="bg-hover-transparent fg-hover-black">
                <a href="#" class="dropdown-toggle">Feedback </a>
                <ul class="dropdown-menu opacity" data-role="dropdown" style="display: none;">
                    <li><a id="createWindow" href="#">Give Feedback</a></li>
                    <li><a href="#">Show website Feedback</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>