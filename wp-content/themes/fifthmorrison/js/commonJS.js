(function Car (win) {
	this.speed = 125;
	this.abs   = true;
	this.clean = true;
	this.created = Date.now();
	
	window.document.addEventListener('scroll', function() {
		console.log('window.scrollY: ', window.scrollY);
	});

	window.document.addEventListener('create:car', function() {
		var car = 
		console.log('window.scrollY: ', window.scrollY);
	});
})(window);