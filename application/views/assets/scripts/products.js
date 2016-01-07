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

				self._callModal({
					'title'		: 'Ini judul',
					'body'		: 'Ini body',
					'doAction'	: function(){
						alert('You clicked OK');
					}
				});
			});
		}
	}

}