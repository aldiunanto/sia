products = {

	index: {
		init: function(){
			this._dataTables();
		},
		_dataTables: function(){
			$('#product-list').DataTable({
				'pageLength'	: 5,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0] }
				]
			});
		}
	}

}