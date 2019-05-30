var numero = [12,34,32,41,54, 34]; //Declaramos los numeros que tendra el arreglo
var i = 0 // inicializamos la posicion en la que va a empezar 
var valor = "f" //Este valor nos ayudara a que la ejecuc
while(((valor == "f")&&(i <= 5))){
	if(numero[i] === 34){
		valor = "v"
	}
	i++
}
if(valor == "v"){
alert("El numero fue encontrado en la posicion: " + (i-1))
}else if(valor == "f"){
	alert("El numero no fue encontrado");
}
