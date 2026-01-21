
let titulo = document.getElementById("titulo")
let botao = document.getElementById("btn")
let valor = 0;

botao.addEventListener("click", function () {



  
      if(valor  == 0){

        titulo.textContent = "";
        titulo.textContent = "Titulo nao estilizado"
        titulo.classList.toggle("titulo");
        valor = 1;

    } else if(valor  == 1){

        titulo.textContent = "";
        titulo.textContent = "Titulo nao estilizado"
         titulo.classList.toggle("titulo");
        valor = 0;

    }

});