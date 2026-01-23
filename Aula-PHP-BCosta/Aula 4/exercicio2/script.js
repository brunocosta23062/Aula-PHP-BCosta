let saidacdd = document.getElementById("saidacdd");
let saidanum = document.getElementById("saidanum");
let saidabairro = document.getElementById("saidabairro");
let saidacep = document.getElementById("saidacep");
let saidacomp = document.getElementById("saidacomp")

let btn = document.getElementById("btn")

let recebecdd = document.getElementById("recebecdd")
let recebenum = document.getElementById("recebenum")
let recebebairro = document.getElementById("recebebairro")
let recebecep = document.getElementById("recebecep")
let recebecomp = document.getElementById("recebecomp")

btn.addEventListener("click", function () {

    
    saidacdd.textContent = "Voce digitou:  " + recebecdd.value
    saidanum.textContent = "Voce digitou: " + recebenum.value
    saidabairro.textContent = "Voce digitou: " + recebebairro.value
    saidacep.textContent = "Voce digitou: " + recebecep.value
    saidacomp.textContent = "Voce digitou: " + recebecomp.value
});