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
			
		}
	}

}