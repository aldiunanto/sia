sales = {

	index: {
		init: function(){
			this._dataTables();
			this._deleteSales();
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
			$('#sales-list').DataTable({
				'pageLength'	: 20,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0, 7] } //menyesuaikan jumlah kolom yang tampil
				]
			});
		},
		_deleteSales: function(){
			var self = this;
			$('#sales-list').on('click', 'a.delete', function(e){
				e.preventDefault();
				var el = $(this);

				self._callModal({
					'title'			: 'Confirmation',
					'body'			: 'Do you really want to delete this Sales?',
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
				if(isNaN($('input[name="sales_phone"]').val())){
					setFalse('sales_phone', 'Phone Number');
				}
				if(! error) this.submit();
			});
		}
	},

	edit: {
		init: function(){
			sales.add._doSubmit();
		}
	}

}