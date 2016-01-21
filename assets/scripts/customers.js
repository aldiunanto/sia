customers = {

	index: {
		init: function(){
			this._dataTables();
			this._deleteCustomers();
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
			$('#customers-list').DataTable({
				'pageLength'	: 20,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0, 9] } //menyesuaikan jumlah kolom yang tampil
				]
			});
		},
		_deleteCustomers: function(){
			var self = this;
			$('#customers-list').on('click', 'a.delete', function(e){
				e.preventDefault();
				var el = $(this);

				self._callModal({
					'title'			: 'Confirmation',
					'body'			: 'Do you really want to delete this Customer?',
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
				// belum bener ==============================
				if(isNaN($('input[name="cust_phone1"]').val())){
					setFalse('cust_phone1', 'Customer Phone Number 1');
				}else if(isNaN($('input[name="cust_phone2"]').val())){
					setFalse('cust_phone2', 'Customer Phone Number 2');
				}else if(isNaN($('input[name="cust_fax1"]').val())){
					setFalse('cust_fax1', 'Customer Fax Number 1');
				}else if(isNaN($('input[name="cust_fax2"]').val())){
					setFalse('cust_fax2', 'Customer Fax Number 2');
				}else if(isNaN($('input[name="cust_zipcode"]').val())){
					setFalse('cust_zipcode', 'Customer Zip Code');
				}else if(isNaN($('input[name="cust_npwp"]').val())){
					setFalse('cust_npwp', 'Customer Taxpayer No. (NPWP)');
				}
				if(! error) this.submit();
			});
		}
	},

	edit: {
		init: function(){
			customers.add._doSubmit();
		}
	}

}