<div class="container margin20">
	<div class="grid">
        
        <div class="row padding20" style="max-width: 73%;margin: 0px auto">
            <div class="span3 place-right no-phone no-tablet timer">
                <div class="bg-white" style="border: 1px solid #ccc;margin-bottom: 10px;height: 300px">Time here</div>
                <div>
                	<button class="image-button primary">Submit<i class="bg-cobalt icon-checkmark"></button></i></button>
                </div>
            </div>
                <?php 
				for($a = 1;$a <=15;$a++){
					echo 
					'
						<div class="span7 bg-white padding10" style="margin-bottom: 10px;float:right;padding-top: 0px;border: 1px solid #ccc">
							<div class="button-dropdown no-phone" style="position: absolute;margin-left: 500px">
								<a href="javascript:void(0)" class="dropdown-toggle link">&nbsp;</a>
								<ul class="dropdown-menu" data-role="dropdown">
									<li><a href="#">Report <i class="icon-camera-2"></i></a></li>
								</ul>
							</div>
							<div style="margin-top: 20px">
								<div style="margin-top: 20px;margin-bottom: 20px">
									<fieldset>
									<legend>
									<h5 class="subheader">Question no. '.$a.'<br><br>
										<p>What is your pet ?</p>
									</h5>
									</legend>
									<p>
									<div class="input-control radio">
										<label>
											<input type="radio" name="a'.$a.'" value="1" />
											<span class="check"></span>	
										</label>
									</div>
									feferjgreghekj
									</p>
									<p>
									<div class="input-control radio">
										<label>
											<input type="radio" name="a'.$a.'" value="2" />
											<span class="check"></span>	
										</label>
									</div>
									feferjgreghekj
									</p>
									<p>
									<div class="input-control radio">
										<label>
											<input type="radio" name="a'.$a.'" value="3" />
											<span class="check"></span>	
										</label>
									</div>
									feferjgreghekj
									</p>
									<p>
									<div class="input-control radio">
										<label>
											<input type="radio" name="a'.$a.'" value="4" />
											<span class="check"></span>	
										</label>
									</div>
									feferjgreghekj
									</p>
									</fieldset>
								</div>    
							</div>
                		</div>
					';
				}
				;?>
        </div>
    </div>
</div>