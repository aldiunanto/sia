products = {

	index: {
		init: function(){
			this._dataTables();
			this._deleteProducts();
		},
		_callModal: function(args){
			$el = $('.modal');
			$el.on('show.bs.modal', function(){
				$el.find('.modal-title').html(args.title);
				$el.find('.modal-body').html(args.body);

				$el.find('button.true').on('click', function(){
					args.doAction();
				});

				if(typeof args.doSomething === 'function'){
					args.doSomething();
				}
			});

			$el.modal('show');
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
			var self = this;
			$('a.delete').on('click', function(e){
				e.preventDefault();
				var el = $(this);

				self._callModal({
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
	}

}