exec = {
	init: function(){
		var controller 	= $('body').attr('data-controller');
		var method		= $('body').attr('data-method');
		
		if(typeof window[controller]['__construct'] === 'function'){
			window[controller].__construct();
		}
		
		window[controller][method].init();
	}
};

$(exec.init);