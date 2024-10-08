//Script para mostrar senha caso o usuario queira ve-lá

function show() {
    var b = document.getElementById('senha');
    b.setAttribute('type', 'text');
}

function hide() {
    var b = document.getElementById('senha');
    b.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false); 

function password() {
    const senha = document.queryElementById('senha');
    const confSenha = document.queryElementById('pwd');
    console.log(confSenha);
    debugger
    if (confSenha.value === senha.value) {
        document.getElementById("erro-senha").style.display = "none";
    } else {
        document.getElementById("erro-senha").style.display = "block";
    }
}