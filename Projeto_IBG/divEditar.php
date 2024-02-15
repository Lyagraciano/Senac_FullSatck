<?php

echo "<!DOCTYPE html>
<html lang='pt'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista com Div Sobreposta</title>

    <link
    href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    rel='stylesheet'
    integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN'
    crossorigin='anonymous'
  />

  <script
    src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
    integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'
    crossorigin='anonymous'
  ></script>
  <script
    src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'
    integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49'
    crossorigin='anonymous'
  ></script>
  <script
    src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
    integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy'
    crossorigin='anonymous'
  ></script>


   <body>


   </body>";

?>

<!-- <style> 

/* Estilos básicos para a lista e a div sobreposta */
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Para centralizar verticalmente também */
    margin: 0;



#nome {
    width: 150px;
    padding: 10px;
    box-sizing: border-box;
    
}

li {
    margin-bottom: 10px;
}

.overlay {
    display: absolute;
    position: flex;
    top: 0;
    left: 0;
    width: 200%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Um fundo semi-transparente */
    justify-content: center;
    align-items: center;
    text-align: center;
}

.overlay-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}
</style>


</head>
<body>

-->

<!-- Div Sobreposta (Invisível inicialmente)



<form action='botaoEditar.php'>
<div id='overlay' class='overlay card container mt-5 pb-5 ' style='border: none;'>
<h1 style='text-align: center;' class='mt-0'>Editar Pedidos</h1>
<div class='overlay-content container '>
<label class='form-label'>Nome</label>
<input type='text' class='form-control .nome ' id='nome' name='nome' onblur='V_nome(this)' required>
<div 'id=alertaN' class='form-text'></div>

<label class='form-label'>Contato</label>
<input type='number' class='form-control' id='contato' name='contato' onblur='V_contato(this)' required>
<div 'id=alertaT' class='form-text'></div>

<label class='form-label'>Data Culto</label>
<input type='date' class='form-control' id='dataCulto' name='dataCulto' onblur='V_dataCulto(this)' required>
<div id='alertaD' class='form-text'></div>

<label class='form-label'>Motivo da Oração</label>
<input type='text' class='form-control' id='motivooracao' name='motivooracao' onblur='V_motivooracao(this)' required>
<div 'id=alertaP' class='form-text'></div>

</div>

</div>
</form>

-->

<!-- Botão para Mostrar a Div Sobreposta
<button onclick='mostrarDiv()'>Mostrar Div</button>

<script>
function mostrarDiv() {
var overlay = document.getElementById('overlay');
overlay.style.display = 'flex'; // Altera para 'flex' para centralizar
}
</script>

</body>
</html>";


<td><input type='submit' class='btn btn-primary' name='comando' value='Editar' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'></td>
                <input type='hidden' name='idpedido' value='$linha[idpedido]'>
-->