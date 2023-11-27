function V_nome (campo){
    if (campo.value.trim() == '') {
    document.getElementById("alertaNome").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertaNome").style.color = "red";
    }
    else {
        document.getElementById("alertaIdade").innerHTML = '';
    }
}
function V_idade (campo){
    if (campo.value.trim() == '') {
     document.getElementById("alertaIdade").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertaIdade").style.color = "red";
    }
    else {
        document.getElementById("alertaIdade").innerHTML = '';
    }
}
function V_curso (campo){
    if (campo.value.trim() == '') {
     document.getElementById("alertaCurso").innerHTML = '* Campo Obrigatório';
        document.getElementById("alertaCurso").style.color = "red";
    }
    else {
        document.getElementById("alertaCurso").innerHTML = '';
    }
}