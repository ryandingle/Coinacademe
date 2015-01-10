//variables
var outside_vars = {
	go : '.go',
	go2 : '.go2',
	to_cycle : '.to-cycle',
	to_help : '.to-help',
	to_feedback : '.to-feedback',
	window : '#createWindow',
}

//Prototyping begin
;(function(){
	var front_end_Conf = {
		header_link1 : function(){
			return this.delegate(outside_vars.go,'click',function(event){
				window.history.pushState('obj', 'Welcome to Coinacademe', ''+window.location.protocol+'//'+window.location.host+'/project1/home/'+$(this).attr('data-go')+'');
				event.preventDefault();
				$('html, body').animate({
					scrollTop: $('#'+$(this).attr('data-go')+'').offset().top
				},500);
			});	
		},
		header_link2 : function(){
			return this.delegate(outside_vars.go2,'click',function(){
				window.history.pushState('obj', 'Welcome to Coinacademe', ''+window.location.protocol+'//'+window.location.host+'/project1/home/'+$(this).attr('data-go')+'');
				event.preventDefault();
				$('html, body').animate({
					scrollTop: $('#'+$(this).attr('data-go')+'').offset().top
				},500);
			});	
		},
		feedback : function(){
			return this.delegate(outside_vars.window,'click',function(){
				event.preventDefault();
				$.Dialog({
					overlay: false,
					shadow: true,
					flat: false,
					draggable : true,
					icon: '<i class="icon-feed"></i>',
					title: 'Giving us your feeback.',
					content: '',
					onShow: function(_dialog){
					var content = _dialog.children('.content');
					content.html(
						'<form class="padding20">' +
							'<label>Full Name<sup>*</sup></label>' +
							'<div class="input-control text">'+
							'<input type="text" name="Fullname" required="required" autofocus="autofocus" />'+
							'<button class="btn-clear"></button>'+
							'</div> ' +
							'<label>Website</label>' +
							'<div class="input-control text">'+
							'<input type="text" name="Website" placeholder="Optional" />'+
							'<button class="btn-clear"></button>'+
							'</div> ' +
							'<label>Email Address<sup>*</sup></label>' +
							'<div class="input-control text">'+
							'<input type="email" name="Email" required="required" />'+
							'<button class="btn-clear"></button>'+
							'</div> ' +
							'<div class="input-control textarea">'+
							'<label>FeedBack<sup>*</sup></label>' +
							'<textarea required="required"></textarea>'+
							'</div>'+
							'<div class="form-actions">' +
							'<button class="button primary">Send</button> '+
							'<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
							'</div>'+
						'</form>');
					}
				});
			});
		},		
	}
	$.extend(Global_config.doc,front_end_Conf);
	Global_config.doc.header_link1();
	Global_config.doc.header_link2();
	Global_config.doc.feedback();
}(jQuery,window,document));