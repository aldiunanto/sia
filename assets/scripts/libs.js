LIBS = {

	callModal: function(el, args){
		$el = $(el);
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
	callAjax: function(toUrl, toData){
		var finalUrl = (!/^(f|ht)tps?:\/\//i.test(toUrl) ? (options.siteUrl + toUrl) : toUrl);
		return $.ajax({
			type	: 'post',
			url		: finalUrl,
			async	: false,
			data	: toData,
			cache	: false
		}).responseText;
	}

}