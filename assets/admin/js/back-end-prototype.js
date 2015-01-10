var variables = {

	publish :'.to-add',

	add_category_link : '.add_category_link',

	category_input_click: '.category-input-click',

	category_input_enter: '.category-input-enter',

	q_count: '.q-show',
	
	input_checker : '.check_all',
	
	delete_input_checker : '.action,.action_bottom',
	
	update_worker_settings_acount : '.updatesettings-form',
	
	quick_action : '.quick_action',
	
	sort_by : '.show_by',
	
	answer : '.answer',

}

//Prototyping begin

;(function(){

	var back_end_Conf = 

	{
		answer : function(){
			return this.delegate(variables.answer,'keyup',function(){
				
			});
		},

		sort_by : function()
		{
			return this.delegate(variables.sort_by,'change',function(){
				if($(this).val() != '')
				{
					$('.s_date_hidden').val($('.s_date').val());
				}
			});
		},
		
		publish_article : function()

		{

			return this.delegate(variables.publish,'click',function(e){

				var status = $(this).attr('data-status');
				$('#article-content').html($('.nicEdit-main').html());

				e.preventDefault();
				
				//if(($('.answer').val() == 'a') || ($('.answer').val() == 'b') || ($('.answer').val() == 'c') || ($('.answer').val() == 'd') || ($('.answer').val() == 'A') || ($('.answer').val() == 'B') || ($('.answer').val() == 'C') || ($('.answer').val() == 'D'))
				//{
					$.ajax({
	
						type : "POST",
	
						url : $('.article-form').attr('action'),
	
						data : $('.article-form').serialize(),
	
						dataType : "json",
	
						cache : false,
	
						success : function(data){
	
							if(data.st == 0)
	
							{
	
								$('#error').show().html(data.msg);
	
								$('.alert-info,.alert-success').hide();
	
								$('html, body').animate({
	
									scrollTop: $('body').offset().top
	
								},500);
	
							}
	
							else
	
							{
								if($('.to-add').attr('data-action') == 'insert')
								{
									var error = '<div class="alert alert-danger">';
									error +='<strong>Failed to Published!</strong><br />';
									error +='<p>';
									error +='<small>Please select featured image.</small>';
									error +='</p>';
									error +='</div>';
									if($('.userfile').val() != '')
									{
										$('.article-form').attr('action',Global_config.base_url+'/worker/in/action?command=insert&do='+status);
										$('.article-form').submit();
									}
									else
									{
										$('#error').show().html(error);
										$('html, body').animate({
		
											scrollTop: $('body').offset().top
			
										},500);
										$('.userfile').focus();
										
									}
								}
								else
								{
									$('.article-form').attr('action',Global_config.base_url+'/worker/in/action?command=update&do='+status);
									$('.article-form').submit();
								}
								
	
							}
	
						}
	
					});
				//}
				//else
				//{
					//$('.answer').focus();
					//alert('Please put letters a - d');
				//}
					

			});	

		},

		add_category : function(){

			return this.delegate(variables.add_category_link,'click',function(e){

				e.preventDefault();

				$(this).hide();

				$('.category_box_input,.parent_selector').show();

			});

		},	

		category_input_add_click : function(){

			return this.delegate(variables.category_input_click,'click',function(e){

				e.preventDefault();

					var input = $('#category');

					if(input.val() == '')

					{

						alert('Please write down a category!');

						input.focus();

					}

					else

					{ 

						jQuery.ajax({

						   type: "POST",

						   url: Global_config.base_url+'/worker/ajax/action_request/?action=insert&define=category',

						   data: {'category':$('#category').val(),'category_parent':$('.parent_category').val()},

						   cache : false,
						   
						   dataType: "json",

						   success: function(data){

								var lis = '';
							    
								$.getJSON(Global_config.base_url+'/worker/ajax/action_request/?action=getdata&define=category',function(data){

									var newselect = '';
									
									var new_row;

										list = '';

										newselect += '<option value="0">Parent______</option>';
										
										new_row = '';

									$.each(data,function(key, val){

										newselect += '<option value="'+val.category_id+'">'+val.category_name+'</option>';

									});

									$('.parent_category').html(newselect);

								});
								$.each(data,function(key, val){

									lis += '<div class="checkbox" style="margin: 0;padding-left: 0;">';

									lis += '<label>';

									lis += '<input name="category[]" checked="checked" type="checkbox" value="'+val.category_id+'">'+val.category_name+'';

									lis += '</label>';

									lis += '</div>';

								});
								$('.category_list').append(lis);

								$('#category').val('');

						   }

						});	

				}

			});

		},

		category_input_add_enter : function(){

			return this.delegate(variables.category_input_enter,'keypress',function(e){

				if(e.which == 13){

					e.preventDefault();

					var input = $('#category');

					if(input.val() == '')

					{

						alert('Please write down a category!');

						input.focus();

					}

					else

					{ 

						jQuery.ajax({

						   type: "POST",

						   url: Global_config.base_url+'/worker/ajax/action_request/?action=insert&define=category',

						   data: {'category':$('#category').val(),'category_parent':$('.parent_category').val()},

						   cache : false,
						   
						   dataType: "json",

						   success: function(data){

								var lis = '';
							    
								$.getJSON(Global_config.base_url+'/worker/ajax/action_request/?action=getdata&define=category',function(data){

									var newselect = '';
									
									var new_row;

										list = '';

										newselect += '<option value="0">Parent______</option>';
										
										new_row = '';

									$.each(data,function(key, val){

										newselect += '<option value="'+val.category_id+'">'+val.category_name+'</option>';

									});

									$('.parent_category').html(newselect);

								});
								$.each(data,function(key, val){

									lis += '<div class="checkbox" style="margin: 0;padding-left: 0;">';

									lis += '<label>';

									lis += '<input name="category[]" checked="checked" type="checkbox" value="'+val.category_id+'">'+val.category_name+'';

									lis += '</label>';

									lis += '</div>';

								});
								$('.category_list').append(lis);

								$('#category').val('');

						   }

						});	

					}

				}

			});

		},

		add_question : function(){

			return this.delegate(variables.q_count,'click',function(e){

				e.preventDefault();

				if(isNaN($('.question-count').val()))alert('Not a number');

				/*else if($('.question-count').val() < 20)alert('Minimum is 20 questions');

				else if($('.question-count').val() > 30)alert('Maximum is 30 questions');

				else{*/

					var all_count = parseInt($('.question-count').val());

					var qs = '<div class="panel panel-info questions_list">';;

					for(var count=1;count<=all_count;count++)

					{

						qs += '<div class="panel-heading">Quesion #: '+count+'</div>';

						qs += '<div class="panel-body">';

						qs += '<div class="form-group">';

                    	qs += '<label>Question</label>';

                        qs += '<textarea class="form-control" name="question_'+count+'" rows="5"></textarea>';

						qs += '</div>';

						qs += '<div class="form-group">';

						qs += '<label>Choice A</label>';

						qs += '<textarea class="form-control" name="question_choice_a'+count+'" rows="2"></textarea>';

						qs += '</div>';

						qs += '<div class="form-group">';

						qs += '<label>Choice B</label>';

						qs += '<textarea class="form-control" name="question_choice_b'+count+'" rows="2"></textarea>';

						qs += '</div>';

						qs += '<div class="form-group">';

						qs += '<label>Choice C</label>';

						qs += '<textarea class="form-control" name="question_choice_c'+count+'" rows="2"></textarea>';

						qs += '</div>';

						qs += '<div class="form-group">';

						qs += '<label>Choice D</label>';

						qs += '<textarea class="form-control" name="question_choice_d'+count+'" rows="2"></textarea>';

						qs += '</div>';

						qs += '<div class="form-group" style="width: 27%">';

						qs += '<label>Real Choice Answer (A/B/C/D)</label>';

						qs += '<input type="text" class="form-control answer" name="real_answer_'+count+'" />';

						qs += '</div>';

						qs += '</div>';

					}

					qs += '</div>';

					$('.question_area').html(qs);

				//}

			});

		},
		
		input_checker : function(){
			return this.delegate(variables.input_checker,'click',function(){
				if($(this).is(':checked')) $('.checker').prop('checked',true);
				else $('.checker').prop('checked',false);
			});
		},
		
		delete_checker : function(){
			return this.delegate(variables.delete_input_checker,'change',function(){
				var path;
				if($(this).attr('data-selection') == 'category'){
				path = Global_config.base_url+'/worker/ajax/action_request/?action=delete&define=category';
				}
				if($(this).attr('data-selection') == 'article'){
				path = Global_config.base_url+'/worker/ajax/action_request/?action=delete&define=article';
				}
				if($('.action').val() == 'delete' || $('.action_bottom').val() == 'delete')
				{
					if($('.checker').is(':checked'))
					{
						if(confirm("Are you sure you want to delete this item ?"))
						{
							var cbs = [];
							$('.checker').each(function(){
								if($(this).is(':checked'))
								{
									cbs.push($(this).val());
								}
							});
							jQuery.ajax({
								type: "POST",
								url : path,
								data :{'checker':cbs},
								success : function(data){
									location.reload();
								}
							});	
							if($('.check_all').is(':checked')) $('.check_all').prop(':checked');
							else $('.check_all').prop(':checked',false);
						}
						else
						{
							$('.action option[value="none"],.action_bottom option[value="none"]').prop('selected',true);
						}
					}
				}
			});
		},
		
		update_worker_acount : function()

		{

			return this.delegate(variables.update_worker_settings_acount,'submit',function(e){

				e.preventDefault();

				$.ajax({

					type : "POST",

					url : $('.updatesettings-form').attr('action'),

					data : $('.updatesettings-form').serialize(),

					dataType : "json",

					cache : false,

					success : function(data){

						if(data.st == 0)

						{

							$('.update_acount_validation_message').html(data.msg);

						}

						else

						{
							$('.update_acount_validation_message').html(data.msg).delay(500).fadeOut(function(){
								location.reload();
							});
						}

					}

				});	

			});	

		},
		
		quick_action : function(){
			return this.delegate(variables.quick_action,'click',function(){
				var action = $(this).attr('data-action');
				var item_id = $(this).attr('data-item-id');
				var path = '';
				
				if($(this).attr('data-selection') == 'category')
				path = Global_config.base_url+'/worker/ajax/action_request/?action=delete&define=category_seperate_delete';
				if($(this).attr('data-selection') == 'article')
				path = Global_config.base_url+'/worker/ajax/action_request/?action=delete&define=article_seperate_delete';
				
				if(action == 'delete')
				{
					if(confirm("Are you sure you want to delete this item ?"))
					{						
						$.ajax({
							type : "POST",
							url : path,
							data :{'delete':item_id},
							cache : false,
							success : function(){
								location.reload();
							}
						});	
					}		
				}
				else
				{
					$('.categories').attr('action',Global_config.base_url+'/worker/ajax/action_request/?action=update&define=category&id='+item_id);
					$.getJSON(Global_config.base_url+'/worker/ajax/action_request/?action=getdata&define=category_to_update', 
						{'item_id':item_id},function(data){
						 $.each(data, function(key, val){
							$('#category_edit').val(val.category_name);
						});
					});
				}
			});
		}

		

	}

	$.extend(Global_config.doc,back_end_Conf);

	Global_config.doc.publish_article();
	
	Global_config.doc.update_worker_acount();

	Global_config.doc.add_category();

	Global_config.doc.category_input_add_click();

	Global_config.doc.category_input_add_enter();

	Global_config.doc.add_question();
	
	Global_config.doc.input_checker();
	
	Global_config.doc.delete_checker();
	
	Global_config.doc.sort_by();
	
	Global_config.doc.quick_action();
	
	Global_config.doc.answer();

}(jQuery,window,document));