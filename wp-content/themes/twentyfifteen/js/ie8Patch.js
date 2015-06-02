function changeImgSrc() {
	var imgs = document.getElementsByTagName("img");

	for (var i = 0; i < imgs.length; i++) {
		if(imgs[i].getAttribute('ng-src')) {
	    	imgs[i].src = imgs[i].getAttribute('ng-src');
		}
	}
}

changeImgSrc();