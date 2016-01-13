salesorder = {

	index: {
		init: function(){
			this._dataTables();
			this._deleteSO();
		},
		_dataTables: function(){
			$('#so-list').DataTable({
				'pageLength'	: 20,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0, 7] }
				]
			});
		},
		_deleteSO: function(){
			$('#so-list').on('click', 'a.delete', function(e){
				e.preventDefault();
				var el = $(this);

				LIBS.callModal('.modal', {
					'title'			: 'Confirmation',
					'body'			: 'Do you really want to delete this Sales Order?',
					'doAction'		: function(){
						window.location.href = el.attr('href');
					},
					'doSomething'	: function(){
						$('.modal button.true').removeClass('blue').addClass('red').html('<i class="fa fa-trash-o"></i> Delete');
					}
				});
			});
		}
	}

}