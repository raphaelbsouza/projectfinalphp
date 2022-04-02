<link rel="stylesheet" href="css/style.css">
<section>
  <div class="divbox">
    <div class="addcliente">
     <h1>Cadastro de Vendas</h1>
        <form action="insertVendas.php" method="POST">
            <label for="exampleFormControlInput1">ID do Produto Vendido</label>
            <input type="text" name="idProduto" id="idProduto" class="form-control" placeholder="Digitar [ID] do Produto Vendido" style="width:350px; height: 40px;">
            <label for=exampleFormControlInput2>Id do Cliente</label>
            <input type="text" name="idCliente" id="idCliente" class="form-control" placeholder="Digitar [ID] do Cliente" style="width:350px; height: 40px;">
            <label for=exampleFormControlInput1>Id do Vendedor</label>
            <input type="text" name="idFuncionario" id="idFuncionario" class="form-control" placeholder="Digitar [ID] do Vendedor" style="width:350px; height: 40px;">
            <br></br>
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
        </form>
</div>
        <?php
          if (isset($_SESSION['auth4'])) {
          if ($_SESSION['auth4'] == true) { 
            echo "Inserido com sucesso!"; 
          }
          else { 
            echo "NÃO foi inserido. " . $_SESSION['msg']; 
          }
          unset($_SESSION['auth4']);
          unset($_SESSION['msg']);
          }
          ?>
    </div>
    <div class="page2">Fazer Consulta de [IDs] dentro de suas Listas</div>
</section>