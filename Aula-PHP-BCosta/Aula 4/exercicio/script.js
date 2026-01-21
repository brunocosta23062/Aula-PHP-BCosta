let recebecampo = document.getElementById("recebecampo");
let recebeemail = document.getElementById("recebeemail");
let saidacampo = document.getElementById("saidacampo");
let saidaemail = document.getElementById("saidaemail");
let botao = document.getElementById("btn")

botao.addEventListener("click", function () {

    
    saidacampo.textContent = "Voce digitou:  " + recebecampo.value
    saidaemail.textContent = "Voce digitou: " + recebeemail.value
})