function expand(x){
	if(x.classList.contains("expand"))
		x.classList.remove("expand");
	else
		x.classList.add("expand");
}


function handleBurger(x){
	if(x.checked)
		document.getElementById("links").style.height = "252px";
	else
		document.getElementById("links").style.height = "0";
}
