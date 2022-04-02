<link rel="stylesheet" href="css/style.css">
<script>
function phone_mask() {
    document.getElementById("telFuncionario").addEventListener("input", function () {
        var x = document.getElementById("telFuncionario").value.replace(/\D/g, "").match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
        document.getElementById("telFuncionario").value = !x[2] ? x[1] : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
    });
}
   </script>
<script>
function cpf_mask() { 
    document.getElementById("cpfFuncionario").addEventListener("input", function () {
        var x = document.getElementById("cpfFuncionario").value.replace(/\D/g, "").match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        document.getElementById("cpfFuncionario").value = !x[2] ? x[1] : x[1] + "." + x[2] + (x[3] ? "." + x[3] : "") + (x[4] ? "-" + x[4] : "");
    });
}
</script>

<section>
   <div class="divbox">
    <div class="addcliente">
     <h1>Cadastro de Funcionários</h1>
        <form action="insertFuncionarios.php" method="POST">
            <label for="exampleFormControlInput1">Nome:</label>
            <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control" placeholder="Nome Completo" style="width:600px; height: 40px;">
            <label for="exampleFormControlInput1">CPF:</label>
            <input type="text" oninput="cpf_mask(this)" name="cpfFuncionario" id="cpfFuncionario" class="form-control" placeholder="000.000.000-21" maxlength="14" id="CPF" style="width:165px; height: 40px;">
            <label for="exampleFormControlInput1">Endereço:</label>
            <input type="text" name="endFuncionario" id="endFuncionario" class="form-control" placeholder="Rua, endereço,numero e CEP." style="width:600px; height: 40px;">
            <label for="exampleFormControlInput1">Telefone:</label>
            <input type="text" oninput="phone_mask(this)" name="telFuncionario" id="telFuncionario" class="form-control" placeholder="(99)1234-5678" style="width:165px; height: 40px;">
            <label for="exampleFormControlInput1">Email:</label>
            <input type="text" name="emailFuncionario" id="emailFuncionario" class="form-control" placeholder="exemplo@infoservices.com.br" style="width:300px; height: 40px;"><br>
            <button type="submit" class="btn btn-primary mb-2" style="text-align:right;">Cadastrar</button>
        </form>
</div>
        <?php
          if (isset($_SESSION['auth2'])) {
          if ($_SESSION['auth2'] == true) { 
            echo "Inserido com sucesso!"; 
          }
          else { 
            echo "NÃO foi inserido."; 
          }
          unset($_SESSION['auth2']);
          }
          ?>
    </div>

</section>