products = {

	index: {
		init: function(){
			this._dataTables();
		},
		_dataTables: function(){
			$('#product-list').DataTable({
				'aoColumnDefs': [
					{ 'bSortable' : false, 'aTargets' : [0] }
				]
			});
		}
	}

}