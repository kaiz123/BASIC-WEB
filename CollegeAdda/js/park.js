$(document).ready(function(){	
	
	function Place(a,b)
	{
		this.place=a;
		this.timeslot=b;
	}
	function ParkViewModel()
	{	 
		
		var self=this;
		this.t=ko.observable("");
		this.parking=ko.observableArray([]);
		this.setCurrent=function()
		{
			var current=new Date();
			//alert(current.getHours());
			$("#timepicker").html(""+(current.getHours()));
		};
		
		this.allParking=function(){
				$.ajax({
				url: "allparking.php",
				type: "get",
				success: function(data) {
					for(var i=0;i<data.length;i++){
						self.parking.push(new Place(data[i].place,data[i].timeslot+" - "+data[i].time_end));
					}
				},
				error: function(xhr, textStatus, errorThrown){
					alert("Something went wrong . Try again later");
				}
			});		

		};
		this.onSub=function()
		{
			
				if(self.t()==="")
				{alert("Enter time slot");}
					else{	
								$.ajax
									({
										url: "parkrequest.php",
										type: "post",
										data: "time="+self.t(),
										success: function(data)
										 {
												$("#setTime").html("The best parking spot is "+data);			
																	  },
										error: function(xhr, textStatus, errorThrown)
										{
											alert("Something went wrong . Try again later");
										}
									});
									}
						
			
		
	};
	};
	ko.applyBindings(new ParkViewModel());
});