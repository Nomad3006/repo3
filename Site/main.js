function toogleLightBox(){
	document.getElementById("light-box").classList.toggle('hiddenBox');
	document.body.classList.toggle('disableScroll')
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
