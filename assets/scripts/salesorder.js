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

				LIBS.callModal('#basic', {
					'title'			: 'Confirmation',
					'body'			: 'Do you really want to delete this Sales Order?',
					'doAction'		: function(){
						window.location.href = el.attr('href');
					},
					'doSomething'	: function(){
						$('#basic button.true').removeClass('blue').addClass('red').html('<i class="fa fa-trash-o"></i> Delete');
					}
				});
			});
		}
	},

	add: {
		init: function(){
			this._datePickerInit();
			this._openCustomers();
		},
		_datePickerInit: function(){
			$('.date-picker').datepicker({
	            autoclose: true
	        });
		},
		_openCustomers: function(){
			var self = this;

			$('.open-cust').on('click', function(){
				if($('select[name="sales_id"]').val() == ''){
					$('select[name="sales_id"]').css('border', '1px solid #ff0000');
					self._salesRemoveStyle();
				}else{
					$('select[name="sales_id"]').removeAttr('style');
					
					
				}
			})
		},
		_salesRemoveStyle: function(){
			$('select[name="sales_id"]').on('change', function(){
				$(this).removeAttr('style');
			})
		}
	}

}