var quebrada = false;
function mudaLampada(tipo) {
	if (tipo == 1){
		arquivo = "lampada-acesa.jpg";
	}
	if (tipo == 2){
		arquivo = "lampada-apagada.jpg";
	}
	if (tipo == 3){
		arquivo = "lampada-quebrada.jpg";
	}
	if (!quebrada){
		document.getElementById("luz").src = arquivo;
		if (tipo == 3){
			quebrada = true;
		}
	}
}