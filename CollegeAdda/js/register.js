/**
 * @author Yash
 */
function RegisterModel(){
	self=this;
	this.name=ko.observable("");
	this.username=ko.observable("");
	this.password=ko.observable("");
	this.password1=ko.observable("");
	this.phones=ko.observableArray([]);
	var a=["Mobile","Home","Work","Parents","Other"];
	this.onAdd=function(){
		var length=self.phones().length;
		self.phones.push(new PhoneNumber(a.slice(0,1),""));
		a.push(a.slice(0,1));
		a.shift();
		
	};
	this.onDelete=function(){
		//alert(this.numberType());
		/*
		 */
		self.phones.remove(this);
	};
	this.onRegister=function(){
		/*
		if(self.password().length<8)
					{
						$("#passwarning").fadeIn(1000);
					
				if(self.username().trim().length>0)
				{
					 var nameRegex = /^[A-Z]+[0-9]+[@#\$&];
					 if(nameRegex.test(self.username()))
					 {
							 $("#userwarning").fadeIn(1000);
					 }
				}}
				else*/
				var nameRegex = /^(?=.*\d)(?=.*[A-Z])(?!.*[^a-zA-Z0-9@#$^+=])(.{8,15})$/;
		if(self.password().length<8)
		{
			$("#passwarning").fadeIn(1000);
		}	
		else if(self.username().trim().length==0||!nameRegex.test(self.username().trim()))
		{
			$("#userwarning").fadeIn(1000);
					
		}	
		else if(self.password()!==self.password1())
		{
			 $("#confirmwarning").fadeIn(1000);
		}
		else
		{
			$("#passwarning").fadeOut(1000);
			$("#userwarning").fadeOut(1000);
			$("#confirmwarning").fadeOut(1000);
			$.ajax
									({
										url: "adduser.php",
										type: "post",
										data: "username="+self.username()+"&pass="+self.password()+"&confirm="+self.password1()+"&name="+self.name(),
										success: function(data)
										 {
											if(data==='1')
											{
												self.username("");
												self.password("");
												self.name("");
												self.password1("");
											}			
													
													else{
														alert("data is not 1"+data);
													}				  },
										error: function(xhr, textStatus, errorThrown)
										{
											alert("Something went wrong . Try again later");
										}
									});
		}
	};
}
function PhoneNumber(numberType,phoneNumber){
	
	this.numberType=numberType;
	this.phoneNumber=phoneNumber;
}
ko.applyBindings(new RegisterModel());
