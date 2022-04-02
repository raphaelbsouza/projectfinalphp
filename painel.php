<?php
  include 'verifica_login.php';
  include "html.php";
  $page = new html($_SESSION['usuario'][0],$_SESSION['usuario'][1]);
  $page -> head();
?>

<body>
    <?php $page -> item1(); ?>
    <?php $page -> topo(); ?>
    <div class="item2">
    <?php $page -> item2(); ?>
    </div>    
    <?php $page -> footer(); ?>
</body>
</html>