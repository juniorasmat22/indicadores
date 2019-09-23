<ul class="pagination  m-0 justify-content-center">
  <?php
    $link="?";
    if($respuesta->respuesta){
      $paginas=$respuesta->resultado->paginas;
      $pagina=$respuesta->resultado->pagina;
      foreach ($_GET as $key => $value) {
        if($key!='p')
          $link.=$key.'='.$value.'&';
      }
      $linkMenos=$link.'p='.(intval($pagina)-1);
      $linkMas=$link.'p='.(intval($pagina)+1);
      if($pagina<=1){
  ?>
      <li class="page-item disabled"><a class="page-link" <?php echo "href='$linkMenos'" ?> >Anterior</a></li>
  <?php
      }
      else{
        ?>
      <li class="page-item "><a class="page-link" <?php echo "href='$linkMenos'" ?> >Anterior</a></li>
        <?php

      }
      for ($i=1; $i <=$paginas ; $i++) {
        $linka=$link.'p='.$i;
        if($i==$pagina){
        ?>
        <li class="page-item active"><a class="page-link" <?php echo "href='$linka'" ?> ><?php echo $i ?></a></li>
        <?php
        }
        else{
        ?>
        <li class="page-item "><a class="page-link" <?php echo "href='$linka'" ?> ><?php echo $i ?></a></li>
        <?php
        }
      }
      if($pagina>=$paginas){
        ?>
        <li class="page-item disabled"><a class="page-link" <?php echo "href='$linkMas'" ?>>Siguiente</a></li>
        <?php
      }
      else{
        ?>
        <li class="page-item"><a class="page-link" <?php echo "href='$linkMas'" ?>>Siguiente</a></li>
        <?php
      }
    }
  ?>
</ul>
