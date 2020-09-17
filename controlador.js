let masa = document.getElementById("peso");
let mas1 = document.getElementById("peso1");
let altura1 = document.getElementById("altura");
let alt1 = document.getElementById("altr1");




let validar = function(e) {

    if (masa.value === "" || altura1.value === "") {

        e.preventDefault();


        masa.classList.add("is-invalid");
        altura1.classList.add("is-invalid");
        alert("Campo Obligatorio");


    } else {

        masa.classList.remove("is-invalid");
        altura1.classList.remove("is-invalid");
        ayuda.textContent = "";
        ayuda.classList.remove;
    }


};
let confirmar = document.getElementById('validar');
confirmar.addEventListener("click", validar);