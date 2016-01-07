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
			$('a.delete').on('click', function(e){
				e.preventDefault();
				$('.modal').modal('show');
			});
		}
	}

}