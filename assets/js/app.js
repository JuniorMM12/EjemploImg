// Variables
let mensaje = document.querySelector(".mensaje");
const formulario = document.querySelector("#formulario-publicacion");
const Inputimg = document.querySelector(".img > input");

//Clases

class Api {
    setImagenes(datosEnviar) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'controlador/navegacion.php?c=Formulario&a=RegistrarImagenes', true);
        xhr.onload = function () {
            if (this.status === 200) {
                //  console.log(this.responseText);
                const resultado = JSON.parse(this.responseText);
                const P = document.createElement('p');
                if (resultado.Estado) {
                    P.innerHTML = `
                        ${resultado.Mensaje}
                    `;
                    mensaje.appendChild(P);
                    mensaje.style.display = 'block';
                }
            }
        }
        xhr.send(datosEnviar);
    }
}

// funciones
eventListener();

function eventListener() {
    formulario.addEventListener('submit', insertarimagenes);
}

function insertarimagenes(e) {
    e.preventDefault();
    const img1 = document.querySelector('#img1');
    const img2 = document.querySelector('#img2');
    const img3 = document.querySelector('#img3');
    const datosEnviar = new FormData();
    datosEnviar.append('Img1', img1.files[0]);
    datosEnviar.append('Img2', img2.files[0]);
    datosEnviar.append('Img3', img3.files[0]);
    const api = new Api();
    api.setImagenes(datosEnviar);
}