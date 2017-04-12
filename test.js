h1 = document.getElementById("id_section_1");
h2 = document.getElementById("id_section_2");
h3 = document.getElementById("id_section_3");
nav = document.getElementById('id_de_la_nav');

window.onscroll = function(ev) {
	if (window.scrollY >= h1.offsetTop && window.scrollY <= (h1.offsetHeight + h1.offsetHeight))  {
		nav.classList.add('couleur à ajouter');
		nav.classList.remove('couleur à retirer');
	}
	else if (window.scrollY >= h2.offsetTop && window.scrollY <= (h2.offsetHeight + h2.offsetHeight))  {
		nav.classList.add('couleur à ajouter');
		nav.classList.remove('couleur à retirer');
	}
	else if (window.scrollY >= h3.offsetTop && window.scrollY <= (h3.offsetHeight + h3.offsetHeight))  {
		nav.classList.add('couleur à ajouter');
		nav.classList.remove('couleur à retirer');
	}
	else{
		nav.classList.remove('couleur à retirer');
		nav.classList.remove('couleur à retirer');
	}
};
