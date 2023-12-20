function V_nome(campo) {
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaNome").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertaNome").style.color = "red";
    }
    else {
        document.getElementById("alertaNome").innerHTML = '';
    }
}

function V_cpf(campo) {
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaCpf").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertaCpf").style.color = "red";
    }
    else {
        document.getElementById("alertaCpf").innerHTML = '';
    }
}
function V_dataNascimento(campo) {
    if (campo.value.trim() == '') {
        p = document.getElementById("alertadataNascimento").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertadataNascimento").style.color = "red";
    }
    else {
        document.getElementById("alertadataNascimento").innerHTML = '';
    }
}

function V_cadastrar() {
    n = document.getElementById("nome");
    c = document.getElementById("cpf");
    d = document.getElementById("dataNascimento");
    
    V_nome(n);
    V_cpf(c);
    V_dataNascimento(d);
}