// var arreglo = ['HTML', '15',true];
// console.log(arreglo[0]);


// let objeto = {
// 	nombre: 'HTML',
// 	duracion: 15,
// 	estado: true,
// 	capitulos: {
// 		nombre: 'Introduccion',
// 		videos: 20
// 	}
// };

// console.log(objeto.capitulos.nombre);

let arrayObjetos = [
	{
		nombre: 'HTML',
		estado: true
	},
	{
		nombre: 'CSS',
		estado: true
	},
	{
		nombre: 'JS',
		estado: false
	}
]

// console.log(arrayObjetos[0].nombre);
// console.log(arrayObjetos[1].nombre);
// console.log(arrayObjetos[2].nombre);

for (let i of arrayObjetos) {
	console.log(i.nombre);
}