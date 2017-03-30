
function MainViewModel()
{ 
	var self=this;
	this.title=ko.observable("");
	
	this.welcome=ko.observable("");
	this.selected=ko.observable("");
	this.imagepath=ko.observable("");
	this.show=ko.observable(false);
	this.djshow=ko.observable(false);
	this.home=ko.observable(true);
	this.serve=ko.observable(true);
	$("#conf").click(function(){

	
	
	if(self.title()=="DJ SANGHVI")	
		{
		$("#img").hide();
		self.imagepath("dj2.jpg");		
		}	
		
	else if(self.title()=="MITHIBAI")	
	{
		$("#img").hide();	
		self.imagepath("mi1.jpg");
		}	
	else if(self.title()=="THADOMAL")	
	{
		$("#img").hide();	
		self.imagepath("tsec.jpg");
		}	
	else if(self.title()=="THAKUR")	
	{
		$("#img").hide();	
		self.imagepath("thakur.jpg");
		}	
					
	
	$("#serve").fadeOut(280);
	$("#img").fadeIn(3000);
	
	self.show(true);
		
	});
}

ko.applyBindings(new MainViewModel());