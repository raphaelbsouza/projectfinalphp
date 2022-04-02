<link rel="stylesheet" href="css/style.css">
<section>
  <div class="divbox">
    <div class="addcliente">
     <h1>Cadastro de Produtos</h1>
        <form action="insertProdutos.php" method="POST">
            <label for="exampleFormControlInput1">Descrição do Produto:</label>
            <input type="text" name="descProduto" id="descProduto" class="form-control" placeholder="Descrição do Produto" style="width:400px; height: 40px;">
            <label for="exampleFormControlInput1">Marca do Produto:</label>
            <input type="text" name="marcaProduto"  id="marcaProduto" class="form-control" placeholder="Marca do Produto"  style="width:400px; height: 40px;">
            <label for="exampleFormControlInput1">Preço de Compra do Produto:</label>
            <input type="text" name="precoCompraProduto"  id="precoCompraProduto" class="form-control" placeholder="R$100" style="width:110px; height: 40px;">
            <label for="exampleFormControlInput1">Preço de Venda do Produto:</label>
            <input type="text" name="precoVendaProduto"  id="precoVendaProduto" class="form-control" placeholder="R$100" style="width:110px; height: 40px;">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Tempo de Garantia</label>
              <select style="width:110px; height: 40px;" name="garantiaProduto" class="form-control" id="exampleFormControlSelect1" >
                <option name="garantiaProduto1" value="6meses">6 meses</option>
                <option name="garantiaProduto2" value="1ano">1 ano</option>
              </select>
            </div>
        </div>
         <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
         <br><br>
        </form>
        <?php
          if (isset($_SESSION['auth3'])) {
          if ($_SESSION['auth3'] == true) { 
            echo "Inserido com sucesso!"; 
          }
          else { 
            echo "NÃO foi inserido."; 
          }
          unset($_SESSION['auth3']);
          }
          ?>
    </div>

</section>