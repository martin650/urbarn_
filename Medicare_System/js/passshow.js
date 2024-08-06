function myFunction(){
	var x = document.getElementById("myInput");
	var y = document.getElementById("show1");
	var z = document.getElementById("show1");

	if(x.type === 'password'){
		x.type="text";
		y.style.display="block";
		z.style.display="block";
	}else{
		x.type="password";
		y.style.display="block";
		z.style.display="block";
	}
}
