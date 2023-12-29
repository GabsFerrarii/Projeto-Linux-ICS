<?php
    include '../Persistencia/DAL/comboDAL.php';

    $dao = new ComboDAL();
    $lista = $dao->listar(); 

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Scooby Burg Backend - Página Inicial</title>
  <link href="principal.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="flex justify-around items-center border-b-8 border-[#17BDB9] py-4 bg-white text-[#17BDB9]">
    <div class="w-[70rem] flex justify-between items-center">
      <h1>
        <a href="index.html">
          <img src="imagens/logo.svg">
        </a>
      </h1>
      <ol class="flex justify-between text-2xl font-bold">
        <li class="mx-5 underline text-[#8D2F0D]"><a href="index.html">Home</a></li>
        <li class="mx-5 hover:underline"><a href="hamburguer/index.php">Hambúrgueres</a></li>
        <li class="mx-5 hover:underline"><a href="bebida/index.php">Bebidas</a></li>
        <li class="mx-5 hover:underline"><a href="sobre-nos.html">Sobre nós</a></li>
      </ol>
    </div>
  </header>
  <main>
    <section>
      <picture>
        <img class="w-100" src="imagens/picture.png" />
      </picture>
    </section>
    <section>
      <h2>COMBOS</h2>
      <div class="flex flex-wrap justify-between w-[70rem]">
        <?php
            foreach ($lista as $obj){
            ?>
            <div class="card">
              <img src="imagens/combo.png" />
              <h2 class="text-5xl mb-1"><?php echo $obj->nome ?></h2>
              <div class="flex justify-between">
                <p>Hambúrguer ID: <?php echo $obj->hamburguer_id ?></p>
                <p>Bebida ID: <?php echo $obj->bebida_id ?></p>
              </div>
              <h3>R$<?php echo $obj->preco ?></h3>
              <a href="editar-combo.php?id=<?php echo $obj->id?>"><li class="mr-4"><img src="imagens/edit-icon.svg" /></li></a>
              <a href="deletar-c.php?id=<?php echo $obj->id?>"><li><img src="imagens/delete-icon.svg" /></li></a>
            </div>
            <?php
            }
        ?>
         <button class="bg-[#F9E014] text-[#8D2F0D] p-8 text-5xl mt-6 hover:underline" onclick="location.href='criar-combo.php'">Adicionar Combo</button>
      </div>
    </section>
  </main>
  <footer>
    <p>© Copyright 2023. Scooby Burg</p>
  </footer>
</body>

</html>
