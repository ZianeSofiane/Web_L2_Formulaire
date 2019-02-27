var val = 0;

function validation() {
	if(val!=1){
		window.alert("Vous devez accepter les conditions d'utilisation pour continuer");
	}
}

function accepte(){
	if(val!=1){
		val = 1;
	}
	else if(val==1){
		val = 0;
	}
}