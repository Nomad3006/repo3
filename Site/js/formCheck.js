var regmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var regname = new RegExp ('^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{1,50}$');
var regtel = new RegExp('^0[1-9][0-9]{8}$');
var regmsg = new RegExp('^[0-9a-zA-Zaàâªæáäãåā -“,?;./:$*€]{1,1000}$');
inputs = null;
err=0;

function check(elem){
	console.info(document.getElementById('mail'));
	if(elem.tagName =='FORM'){
		err=0;
		inputs = document.getElementsByClassName('form-control');
		for(var i=0;i<inputs.length;i++){
			tests(inputs[i]);
		}
		if(err){
			console.info("ko")
			return false;
		}
		else{
			console.info("ok")
			return true;
		}
	}
	else{
		tests(elem)
	}
}

function tests(e){
	if(e.id.includes("mail")){
		reg=regmail;
	}
	if(e.id.includes("tel")){
		reg=regtel;
	}
	if(e.id.includes("name")){
		reg=regname;
	}
	if(e.id.includes("msg")){
		reg=regmsg;
	}
	if(reg.test(e.value)){
		e.classList.add("form-control-success");
		e.classList.remove("form-control-danger");
		e.parentNode.classList.add("has-success");
		e.parentNode.classList.remove("has-danger");
	}
	else{
		err=1;
		e.classList.add("form-control-danger");
		e.classList.remove("form-control-success");
		e.parentNode.classList.add("has-danger");
		e.parentNode.classList.remove("has-success");
	}
}
