products = {

	index: {
		init: function(){
			this._dataTables();
			this._deleteProducts();
		},
		_dataTables: function(){
			$('#product-list').DataTable({
				'pageLength'	: 20,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0, 10] }
				]
			});
		},
		_deleteProducts: function(){
			$('#product-list').on('click', 'a.delete', function(e){
				e.preventDefault();
				var el = $(this);

				LIBS.callModal('.modal', {
					'title'			: 'Confirmation',
					'body'			: 'Do you really want to delete this Product?',
					'doAction'		: function(){
						window.location.href = el.attr('href');
					},
					'doSomething'	: function(){
						$('.modal button.true').removeClass('blue').addClass('red').html('<i class="fa fa-trash-o"></i> Delete');
					}
				});
			});
		}
	},

	add: {
		init: function(){
			this._doSubmit();
		},
		_doSubmit: function(){
			$('.portlet form').on('submit', function(e){
				e.preventDefault();
				var error = false;
				var setFalse = function(name, text){
					$('.numeric-error-msg').show().find('strong').html(text);
					$('input').removeAttr('style');
					$('input[name="' + name + '"]').attr('style', 'border: 1px solid #ff0000;');

					$('html,body').animate({ scrollTop: 0 }, 'slow');
					error = true;
				};

				if(isNaN($('input[name="prod_width"]').val())){
					setFalse('prod_width', 'Width');
				}else if(isNaN($('input[name="prod_guzzet"]').val())){
					setFalse('prod_guzzet', 'Guzzet');
				}else if(isNaN($('input[name="prod_length"]').val())){
					setFalse('prod_length', 'Length');
				}else if(isNaN($('input[name="prod_thickness"]').val())){
					setFalse('prod_thickness', 'Thickness');
				}

				if(! error) this.submit();
			});
		}
	},

	edit: {
		init: function(){
			products.add._doSubmit();
		}
	}

}