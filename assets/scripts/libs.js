LIBS = {

	callModal: function(args){
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
	}

}