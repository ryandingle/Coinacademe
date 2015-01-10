<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample</title>
<?php
    	echo '<link rel="icon" href="'.base_url().'assets/css/images/icon-logo.png">';
		$this->carabiner->css('metro-bootstrap.min.css');
		$this->carabiner->css('metro-bootstrap-responsive.min.css');
		$this->carabiner->css('iconFont.min.css');
		$this->carabiner->css('custom.css');
		$this->carabiner->display('css');
		$this->carabiner->css('gridster.css');
		//$this->carabiner->empty_cache('both','yesterday');
	?>
    <style type="text/css" rel="stylesheet">
.bg-blue       {background-color: #2d89ef;}
.bg-blueLight  {background-color: #eff4ff;}
.bg-blueDark   {background-color: #2b5797;}
.bg-green      {background-color: #00a300;}
.bg-greenLight {background-color: #99b433;}
.bg-greenDark  {background-color: #1e7145;}
.bg-red        {background-color: #b91d47;}
.bg-yellow     {background-color: #ffc40d;}
.bg-orange     {background-color: #e3a21a;}
.bg-orangeDark {background-color: #da532c;}
.bg-pink       {background-color: #9f00a7;}
.bg-pinkDark   {background-color: #7e3878;}
.bg-purple     {background-color: #603cba;}
.bg-darken     {background-color: #1d1d1d;}
.bg-lighten    {background-color: #d5e7ec;}
.bg-white      {background-color: #ffffff;}
.bg-grayDark   {background-color: #525252;}
#def_button {
background : #84FF49
font-size: 25px;
opacity: 1;
width: 200px;
height: 40px
}

#li1 {
background: url('http://gridsterbymaharshi.appspot.com/images/1.png') no-repeat center;    
}
#li2 {
background: url('http://gridsterbymaharshi.appspot.com/images/2.png') no-repeat left;    
}
#li3 {
background: url('http://gridsterbymaharshi.appspot.com/images/3.png') no-repeat center;    
}
#li4 {
background: url('http://gridsterbymaharshi.appspot.com/images/4.png') no-repeat center;    
}
#li5 {
background: url('http://gridsterbymaharshi.appspot.com/images/5.png') no-repeat center;    
}
#li6 {
background: url('http://gridsterbymaharshi.appspot.com/images/6.png') no-repeat center;    
}
#li7 {
background: url('http://gridsterbymaharshi.appspot.com/images/7.png') no-repeat center;    
}
#li8 {
background: url('http://gridsterbymaharshi.appspot.com/images/8.png') no-repeat center;    
}
#li9 {
background: url('http://gridsterbymaharshi.appspot.com/images/9.png') no-repeat center;    
}
#li10 {
background: url('http://gridsterbymaharshi.appspot.com/images/10.png') no-repeat center;    
}
#li11 {
background: url('http://gridsterbymaharshi.appspot.com/images/11.png') no-repeat center;    
}
#li12 {
background: url('http://gridsterbymaharshi.appspot.com/images/12.png') no-repeat center;    
}
#li13 {
background: url('http://gridsterbymaharshi.appspot.com/images/13.png') no-repeat center;    
}
#li14 {
background: url('http://gridsterbymaharshi.appspot.com/images/14.png') no-repeat center;    
}
#li15 {
background: url('http://gridsterbymaharshi.appspot.com/images/15.png') no-repeat center;    
}
#li16 {
background: url('http://gridsterbymaharshi.appspot.com/images/16.png') no-repeat center;    
}
#li17 {
background: url('http://gridsterbymaharshi.appspot.com/images/17.png') no-repeat center;    
}
#li18 {
background: url('http://gridsterbymaharshi.appspot.com/images/18.png') no-repeat center;    
}
#li19 {
background: url('http://gridsterbymaharshi.appspot.com/images/20.jpg') no-repeat center;    
}
#li20 {
background: url('http://gridsterbymaharshi.appspot.com/images/21.png') no-repeat center;    
}
#li21 {
background: url('http://gridsterbymaharshi.appspot.com/images/22.png') no-repeat center;    
}




body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-size: x-small;
   }

ul, ol {
    list-style: none;
}

h1 {
  margin-bottom: 12px;
  text-align: center;
  font-size: 30px;
  font-weight: 400; 
}

h3 {
  font-size: 25px;
  font-weight: 600;
  color: white; 
}


.gridster {
    width: 100%;
	padding: 4%;
	height: 100%;
    margin: 0 ;

    opacity: .8;

    -webkit-transition: opacity .6s;
    -moz-transition: opacity .6s;
    -o-transition: opacity .6s;
    -ms-transition: opacity .6s;
    transition: opacity .6s;
}

.gridster .gs_w {
    //background: #FFF;
    cursor: pointer;
    -webkit-box-shadow: 0 0 5px rgba(0,0,0,0.3);
    box-shadow: 0 0 5px rgba(0,0,0,0.3);
}
 [data-col="12"] { left:1279px;}  [data-col="11"] { left:1163px;}  [data-col="10"] { left:1047px;}  [data-col="9"] { left:931px;}  [data-col="8"] { left:815px;}  [data-col="7"] { left:699px;}  [data-col="6"] { left:583px;}  [data-col="5"] { left:467px;}  [data-col="4"] { left:351px;}  [data-col="3"] { left:235px;}  [data-col="2"] { left:119px;}  [data-col="1"] { left:3px;}  [data-row="22"] { top:2439px;}  [data-row="21"] { top:2323px;}  [data-row="20"] { top:2207px;}  [data-row="19"] { top:2091px;}  [data-row="18"] { top:1975px;}  [data-row="17"] { top:1859px;}  [data-row="16"] { top:1743px;}  [data-row="15"] { top:1627px;}  [data-row="14"] { top:1511px;}  [data-row="13"] { top:1395px;}  [data-row="12"] { top:1279px;}  [data-row="11"] { top:1163px;}  [data-row="10"] { top:1047px;}  [data-row="9"] { top:931px;}  [data-row="8"] { top:815px;}  [data-row="7"] { top:699px;}  [data-row="6"] { top:583px;}  [data-row="5"] { top:467px;}  [data-row="4"] { top:351px;}  [data-row="3"] { top:235px;}  [data-row="2"] { top:119px;}  [data-row="1"] { top:3px;}  [data-sizey="1"] { height:110px;} [data-sizey="2"] { height:226px;} [data-sizey="3"] { height:342px;} [data-sizey="4"] { height:458px;} [data-sizey="5"] { height:574px;} [data-sizey="6"] { height:690px;} [data-sizey="7"] { height:806px;} [data-sizey="8"] { height:922px;} [data-sizey="9"] { height:1038px;} [data-sizey="10"] { height:1154px;} [data-sizey="11"] { height:1270px;} [data-sizey="12"] { height:1386px;} [data-sizey="13"] { height:1502px;} [data-sizey="14"] { height:1618px;} [data-sizey="15"] { height:1734px;} [data-sizey="16"] { height:1850px;} [data-sizey="17"] { height:1966px;} [data-sizey="18"] { height:2082px;} [data-sizey="19"] { height:2198px;} [data-sizey="20"] { height:2314px;} [data-sizey="21"] { height:2430px;} [data-sizex="1"] { width:110px;} [data-sizex="2"] { width:226px;} [data-sizex="3"] { width:342px;} [data-sizex="4"] { width:458px;} [data-sizex="5"] { width:574px;} [data-sizex="6"] { width:690px;}
</style>


</head>
<body>
	
    <div class="gridster">
        <ul id="hello">
        
        <li id="li1" data-row="1" data-col="1" data-sizex="1" data-sizey="1"></li>
        <li id="li2" data-row="2" data-col="1" data-sizex="1" data-sizey="1"></li>
        <li id="li3" data-row="3" data-col="1" data-sizex="1" data-sizey="1"></li>
        <li id="li4" data-row="4" data-col="1" data-sizex="2" data-sizey="1"></li>
        <li id="li5" data-row="1" data-col="2" data-sizex="1" data-sizey="1"></li> 
        <li id="li6" data-row="2" data-col="2" data-sizex="1" data-sizey="1"></li>
        <li id="li7" data-row="3" data-col="2" data-sizex="1" data-sizey="1"></li>
        
        <li id="li8" data-row="1" data-col="3" data-sizex="2" data-sizey="1"></li> 
        <li id="li9" data-row="2" data-col="3" data-sizex="2" data-sizey="1"></li>
        <li id="li10" data-row="3" data-col="3" data-sizex="2" data-sizey="1"></li>
        <li id="li11" data-row="4" data-col="3" data-sizex="2" data-sizey="1"></li>
        
        
        <li class="bg-blue shadow" id="li12" data-row="1" data-col="5" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li13" data-row="2" data-col="5" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li14" data-row="3" data-col="5" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li15" data-row="4" data-col="5" data-sizex="1" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li16" data-row="4" data-col="6" data-sizex="1" data-sizey="1"></li>
        
        <li class="bg-blue shadow" id="li17" data-row="1" data-col="8" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li18" data-row="2" data-col="8" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li19" data-row="3" data-col="8" data-sizex="2" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li20" data-row="4" data-col="8" data-sizex="1" data-sizey="1"></li>
        <li class="bg-blue shadow" id="li21" data-row="4" data-col="9" data-sizex="1" data-sizey="1"></li>
        
        </ul>
	</div>
<!--
	<div class="container">
    
        <div class="grid">
            <div class="row">
                <div class="span10">
                	<form>
                        <label><h2>Article Title</h2></label>
                    	<div class="input-control text">
                            <input type="text" value="" placeholder="Enter Article Title"/>
                            <button class="btn-clear"></button>
                        </div>
                        <label><h2>Article Body</h2></label>
                        <div class="input-control textarea">
                            <textarea>media plugin content here</textarea>
                        </div>
                        <label><h2>Article Summary</h2></label>
                        <div class="input-control textarea">
                            <textarea>summary</textarea>
                        </div>
                    </form>
                </div>
                <div class="span4">
                	<div class="panel">
                        <div class="panel-header">
                            Publish
                        </div>
                        
                        <div class="panel-content">
                            <div class="input-control select">
                            	<label><small>Privacy</small></label>
                                <select>
                                    <option>--</option>
                                    <option>Private</option>
                                    <option>Public</option>
                                </select>
                            </div>
                            <div class="input-control select">
                            	<label><small>Category</small></label>
                                <select>
                                    <option>--</option>
                                    <option>Private</option>
                                    <option>Public</option>
                                </select>
                            </div>
                            <label><small>Price</small></label>
                            <div class="size2 input-control text">
                                <input type="text" value="" placeholder="Enter Price"/>
                                <button class="btn-clear"></button>
                            </div>
                            <button class="primary place-right large"> Publish </button>
                        </div>
                        
                    </div>
                    
                    <div>
                    	<label><small>Tags</small></label>
                        <div class="input-control text">
                            <input type="text" value="" placeholder="Enter Tag"/>
                            <button class="btn-clear"></button>
                        </div>
                    </div>
                    
                    
                
                <div class="panel">
                	<div class="panel-header">
                    	Cover Image
                    </div>
                    
                    <div class="panel-content">
                    	<label><small>Image canvas must be(380x250) or larger.</small></label>
                    	<div class="input-control file">
                            <input type="file" />
                            <button class="btn-file"></button>
                        </div>
                        <img  src="<?php echo base_url();?>assets/css/images/cover1.jpg"/>
                    </div>
                   
                </div>	
                    
                </div>
            </div>
        </div>
        
        
    </div>-->
<?php 
$this->carabiner->js('core/core.js');
$this->carabiner->js('jquery.ui.widget.js');
$this->carabiner->js('jquery.mousewheel.min.js');
$this->carabiner->js('metro-dropdown.js');
$this->carabiner->js('metro-listview.js');
$this->carabiner->js('metro-scroll.js');
$this->carabiner->js('metro.min.js');
$this->carabiner->js('scrollbar.js');
$this->carabiner->js('site/global_config.js');

$this->carabiner->js('site/global_vars.js');
$this->carabiner->js('site/front-end-animation.js');
$this->carabiner->js('site/back-end-animation.js');
$this->carabiner->js('site/back-end-prototype.js');
$this->carabiner->js('assets/js/do.js');

	$this->carabiner->js('gridster.js');

$this->carabiner->display('js');
//$this->carabiner->empty_cache('both','yesterday');
?>
<script type="text/javascript">
   $(function(){

      $(".gridster>ul").gridster({
			widget_margins: [12.5, 12.5],
			widget_base_dimensions: [75, 75],
		
				serialize_params: function($w, wgd) {
				return {
					x: wgd.col,
					y: wgd.row,
					width: wgd.size_x,
					height: wgd.size_y,
					id: $($w).attr('id'),
					class: $($w).attr('class')
				};
			},
		
			draggable: {
						stop: function(event, ui){
						  //console.log(this.$player.attr('id'));
						  //console.log(this.$player.attr('class'));
						  //console.log(this.$player.coords().grid);
		
						  $oWidgets = this.serialize_changed();
						  saveWidgets($oWidgets);
						}
					}
		
		  });
  });

</script>
</body>
</html>