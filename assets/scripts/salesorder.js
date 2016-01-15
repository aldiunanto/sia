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
			this._generateSONumb();
			this._openCustomers();
			this._salesRemoveStyle();
			this._openProducts();
			this._removeProd();
			this._addItem();
		},
		_datePickerInit: function(){
			$('.date-picker').datepicker({
	            autoclose: true
	        });
		},
		_generateSONumb: function(){
			$('select[name="so_type"]').on('change', function(){
				var soNumb = LIBS.callAjax('/salesorder/generateSONumb', 'so_type=' + $(this).val());
				$('input[name="so_number"]').val(soNumb);
			})
		},
		_openCustomers: function(){
			var self = this;

			$('.open-cust').on('click', function(){
				$salesId = $('select[name="sales_id"]');

				if($salesId.val() == ''){
					$salesId.css('border', '1px solid #ff0000');
				}else{
					$salesId.removeAttr('style');

					LIBS.callModal('#basic', {
						'title'			: 'Choose a Customer',
						'body'			: LIBS.callAjax('/customers/getData', 'sales_id=' + $salesId.val()),
						'doAction'		: function(){ },
						'doSomething'	: function(){
							$('#basic button.true').hide();
						}
					});

					self._customerFilter();
					self._custTakeMeOut();
				}
			})
		},
		_salesRemoveStyle: function(){
			$('select[name="sales_id"]').on('change', function(){
				$(this).removeAttr('style');
				$('input[name="cust_name"], input[name="cust_id"]').val('');
			})
		},
		_customerFilter: function(){
			var doFilter = function(){
				var val = $('input[name="filter"]').val();
		    	    	
		        if(val == ''){ $('tr.cust-item').show(); }
		        else{
		        	$('tr.cust-item[data-cust-name*="' + val.toUpperCase() + '"]').show();
		            $('tr.cust-item:not([data-cust-name*="' + val.toUpperCase() + '"])').hide();
		        }
			};

	    	var timer = null;
	        $('input[name="filter"]').keydown(function(){
	        	clearTimeout(timer);
	            timer = setTimeout(doFilter, 700);
	        });
		},
		_custTakeMeOut: function(){
			$('button.take-me-out').on('click', function(){
				var el = this;
				var cust = {
					custId		: $(el).attr('data-id'),
					custName 	: $(el).parent().prev().html()
				};

				$('input[name="cust_name"]').val(cust.custName);
				$('input[name="cust_id"]').val(cust.custId);

				$('#basic').modal('hide');
			})
		},
		_openProducts: function(){
			var self = this;

			$('#so-sub').on('click', '.open-prod', function(e){
				e.preventDefault();
				var el = $(this);

				LIBS.callModal('#large.modal', {
					'title'			: 'Choose a Product',
					'body'			: LIBS.callAjax('/products/getData'),
					'doAction'		: function(){},
					'doSomething'	: function(){
						self._prodTakeMeOut(el);
					}
				});

				//self._prodDataTables(el);
			});
		},
		/*_prodDataTables: function(opener){
			var self = this;

			$('#large.modal').on('shown.bs.modal', function(){
				table = $('#products-list').DataTable({
					'pageLength'	: 20,
					'sPageButton'	: 'btn btn-default',
					'aoColumnDefs'	: [
						{ 'bSortable' : false, 'aTargets' : [0, 10] }
					]
				});

				self._prodTakeMeOut(opener, table);
			})
		},*/
		_removeProd: function(){
			$('.remove-prod').on('click', function(){
				$(this).closest('tr').remove();
			})
		},
		_addItem: function(){
			var self = this;

			$('.add-item').on('click', function(e){
				e.preventDefault();

				var newTr = LIBS.callAjax('/salesorder/newtr');
				$('#so-sub').append(newTr);

				$('html, body').animate({ scrollTop: $(document).height() }, 500);
				self._removeProd();
			})
		},
		_prodTakeMeOut: function(opener){
			$('#products-list').on('click', '.prod-take-me-out', function(){
				var data = LIBS.callAjax('/products/getInfo', 'prod_id=' + $(this).attr('data-id'));
				var row = JSON.parse(data);

				opener.parent().prev().val(row.prod_name)
					  .prev().val(row.prod_id)
					  .closest('td').next().html(row.cat_name)
					  .next().html(row.st_name)
					  .next().html(row.pack_name)
					  .next().html(row.prod_width)
					  .next().html(row.prod_guzzet)
					  .next().html(row.prod_length)
					  .next().html(row.prod_thickness)
					  .next().html((row.prod_emboss == 1 ? 'YES' : 'NO'));

				$('#large.modal').modal('hide');
				//table.destroy();
			})
		}
	}

}