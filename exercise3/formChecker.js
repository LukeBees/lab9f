
var err = document.getElementById("error");

function reset()
{
	document.getElementById("userN").value = "";
	document.getElementById("userP").value = "";
	document.getElementById("nva").value = "";
	document.getElementById("ncda").value = "";
	document.getElementById("ncds").value = "";
	document.getElementById("uva").value = "";
	document.getElementById("ucda").value = "";
	document.getElementById("ucds").value = "";
	document.getElementById("ut").value = "";
}

function checker()
{
	let check = true;
	let id = document.getElementById("userN");
	let pass = document.getElementById("userP").value;

	//check username if valid
	atIn =  id.indexOf("@")
	if(atIn > -1)
	{
		if(id.indexOf(".com") < atIn)
		{
			check = false;
		}
	}
	else
	{
		check = false;
	}
	//check password if valid
	if(pass = "")
	{
		check = false;
	}


	console.log(check);

}
