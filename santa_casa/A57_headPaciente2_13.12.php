<?php

echo"<!DOCTYPE html>
<html lang='pt'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>

    <link
    href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    rel='stylesheet'
    integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN'
    crossorigin='anonymous'
  />
  <link rel='stylesheet' href=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css integrity=sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO crossorigin=anonymous/>

  <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js integrity=sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL crossorigin=anonymous></script>

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

  <script type='text/javascript' src='A42_produtos_21.11.js'></script>
<style>
  datalist {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      writing-mode: vertical-lr;
      width: 100%;
  }
</style>

</head>";


"<body>
      <br><br>

      <hr>

      <div class='card container mt-5 pb-5' style='border: none;'>
        <h1 style='text-align: center;' class='mt-0'>Cadastro de Produtos</h1>
            <form class='shadow p-3' action='A42_produtos_21.11.php' method='POST'>
                <div class='mb-3 mt-4'>
                    <label class='form-label'>Produto*</label>
                    <input type='text' class='form-control' id='produto' name='produto' onblur='V_produto(this)' required>
                    <div id='alertaProduto' class='form-text'></div>
                </div>
                <div class='mb-3'>
                    <label class='form-label'>Valor*</label>
                    <input [type=number]::-webkit-inner-spin-button, input[type=number]::- 
                    webkit-outer-spin-button { -webkit-appearance: none; margin: 0;} class='form-control' id='valor' name='valor'  step='0.010' onblur='V_valor(this)' required>
                    <div id='alertaValor' class='form-text'></div>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Quantidade*</label>
                        <input [type=number]::-webkit-inner-spin-button, input[type=number]::- 
                        webkit-outer-spin-button { -webkit-appearance: none; margin: 0;} class='form-control' id='quantidade' name='quantidade' onblur='V_quantidade(this)' required>
                        <div id='alertaQuantidade' class='form-text'></div>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Validade*</label>
                            <input type='date' class='form-control' id='validade' name='validade' onblur='V_validade(this)' required>
                            <div id='alertaValidade' class='form-text'></div>
                          </div>
                          <div class='mb-3'>
                            <input type='submit' class='btn btn-primary' value='Cadastrar' onclick='V_cadastrar()'>
                          </div>
                    </div>
                </div>
            </form>
      </div>";
