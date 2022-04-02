<link rel="stylesheet" href="css/style.css">
<script>
function phone_mask() {
    document.getElementById("telCliente").addEventListener("input", function () {
        var x = document.getElementById("telCliente").value.replace(/\D/g, "").match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
        document.getElementById("telCliente").value = !x[2] ? x[1] : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
    });
}
   </script>
<script>
function cpf_mask() { 
    document.getElementById("cpfCliente").addEventListener("input", function () {
        var x = document.getElementById("cpfCliente").value.replace(/\D/g, "").match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        document.getElementById("cpfCliente").value = !x[2] ? x[1] : x[1] + "." + x[2] + (x[3] ? "." + x[3] : "") + (x[4] ? "-" + x[4] : "");
    });
}
</script>

<section>
   <div class="divbox">
    <div class="addcliente">
     <h1>Cadastro de Clientes</h1>
        <form action="insertClientes.php" method="POST">
            <label for="exampleFormControlInput1">Nome:</label>
            <input type="text" name="nomeCliente" id="nomeCliente" class="form-control" placeholder="Nome Completo" style="width:600px; height: 40px;">
            <label for="exampleFormControlInput1">CPF:</label>
            <input type="text" oninput="cpf_mask(this)" name="cpfCliente" id="cpfCliente" class="form-control" placeholder="000.000.000-21" maxlength="14" id="CPF" style="width:165px; height: 40px;">
            <label for="exampleFormControlInput1">Endereço:</label>
            <input type="text" name="endCliente" id="endCliente" class="form-control" placeholder="Rua, endereço,numero e CEP. " style="width:600px; height: 40px;">
            <label for="exampleFormControlInput1">Telefone:</label>
            <input type="text" oninput="phone_mask(this)" name="telCliente" id="telCliente" class="form-control" placeholder="(99)1234-5678" style="width:165px; height: 40px;">
            <label for="exampleFormControlInput1">Email:</label>
            <input type="text" name="emailCliente" id="emailCliente" class="form-control" placeholder="exemplo@infoservices.com.br" style="width:300px; height: 40px;"><br>
            <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
        </form>
</div>
        <?php
          if (isset($_SESSION['auth'])) {
          if ($_SESSION['auth'] == true) { 
            echo "Inserido com sucesso!"; 
          }
          else { 
            echo "NÃO foi inserido."; 
          }
          unset($_SESSION['auth']);
          }
          ?>
    </div>
</section>
