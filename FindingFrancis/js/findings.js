$(document).ready(function()
{

function Finding(age,height,address)
{
this.age=age;
this.height=height;
this.address=address;

}


function FindingsViewModel()
{
var self=this;
self.age=ko.observable("");
self.height=ko.observable("");
self.address=ko.observable("");
self.findings=ko.observableArray([]);
self.getFindings=function()
{

	$.ajax(
		{

		url:"get_findings.php",
		type:"get",
		
		success:function(data)
		{
			for(var i=0;i<data.length;i++)
			{
				self.findings.push(new Finding(data[i].age,data[i].height,data[i].address));
			}

			

		},
		error:function(xhr,textStatus,errorThrown)
		{
			alert(textStatus);
		}

	}
);

}
self.onSave=function()
{

	alert(self.age()+self.height()+self.address());
	//$ is way of accessing jquery object 
	$.ajax(
		{

		url:"save_findings.php",
		type:"post",
		data:"age="+self.age()+"&height="+self.height()+"&address="+self.address(),
		success:function(data)
		{
			if(data==="1")
			{	self.findings.unshift(new Finding(self.age(),self.height(),self.address()));
				self.age("");
				self.height("");
				self.address("");

			}

		},
		error:function(xhr,textStatus,errorThrown)
		{
			alert(textStatus);
		}

	}
);
};


}
var vm=new FindingsViewModel();
vm.getFindings();//get data from servers
ko.applyBindings(vm);
})//end of ready