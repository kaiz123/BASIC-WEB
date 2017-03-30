function RateViewModel(){
	var self=this;
	this.img=ko.observable("");
	this.onAdd=function(){
		alert("hi");
		$("#visible").show();
	};
}
ko.applyBindings(new RateViewModel());
