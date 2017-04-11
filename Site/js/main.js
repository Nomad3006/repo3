function expand(x){
	if(x.classList.contains("expand"))
		x.classList.remove("expand");
	else
		x.classList.add("expand");
}

window.onscroll = function(ev) {
    if (window.scrollY >= document.getElementById('network').offsetHeight) {
		document.getElementById('main-nav').classList.add('nav-scrolled');
	}
	else{
		document.getElementById('main-nav').classList.remove('nav-scrolled');
	}
};

function handleBurger(x){
	if(x.checked)
		document.getElementById("links").style.height = "auto";
	else
		document.getElementById("links").style.height = "0";
}
