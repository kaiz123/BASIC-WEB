function AddasViewModel(){
	self=this;
	self.imagepath1=ko.observable("");
	self.show=ko.observable(true);
	self.imagepath2=ko.observable("");
	self.imagepath3=ko.observable("");
	self.onSlide=function(){
		alert("hi");
		self.imagepath1="dj.jpg";
		setTimeout(function() {}, 1000);
		self.imagepath1="dj1.jpg";
		setTimeout(function() {}, 1000);
		self.imagepath1="dj2.jpg";
		
		
	};
}

ko.applyBindings(new AddasViewModel());
