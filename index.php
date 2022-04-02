<?php
  include "html.php";
  $page = new html();
  $page -> head();
?>
  <body class="text-center">
      <form class="form-signin" action="login.php" method="POST">
         <img class="mb-4" src="imagem/computericon.png" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal">Login</h1>
         <label for="inputEmail" class="sr-only">Login</label>
         <input type="text" name="usuario" id="usuario" class="form-control" placeholder="login" required>
         <label for="inputPassword" class="sr-only">Senha</label>
         <input type="password" name="senha" id="senha" class="form-control" placeholder="senha" required>
        <div class="checkbox mb-3">
          <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

  </body>
</html>