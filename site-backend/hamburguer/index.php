<?php
    include '../../Persistencia/DAL/hamburguerDAL.php';

    $dao = new HamburguerDAL();
    $lista = $dao->listar(); 

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Scooby Burg Backend - Hambúrgueres</title>
  <link href="../principal.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Karantina:wght@300;400;700&family=Knewave&display=swap" rel="stylesheet">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="flex justify-around items-center border-b-8 border-[#17BDB9] py-4 bg-white text-[#17BDB9]">
    <div class="w-[70rem] flex justify-between items-center">
      <h1>
      <a href="../index.html">
          <img src="../imagens/logo.svg">
        </a>
      </h1>
      <ol class="flex justify-between text-2xl font-bold">
        <li class="mx-5 hover:underline"><a href="../index.html">Home</a></li>
        <li class="mx-5 underline text-[#8D2F0D]"><a href="#">Hambúrgueres</a></li>
        <li class="mx-5 hover:underline"><a href="../bebida/index.php">Bebidas</a></li>
        <li class="mx-5 hover:underline"><a href="../sobre-nos.html">Sobre nós</a></li>
      </ol>
    </div>
  </header>
  <main>
    <section class="pb-12">
      <h2>HAMBÚRGUERES</h2>
      <div class="w-[70rem] flex flex-wrap justify-between">
        <?php
            foreach ($lista as $obj){
            ?>
            <div class="flex flex-col items-start">
                <img src="../imagens/hamburguer.png" class="min-w-[420px]">
                <h3 class="font-bold text-[#17BDB9] text-5xl"><?php echo $obj->nome ?></h3>
                <p class="font-[Inter] font-semibold"><?php echo $obj->descricao ?></p>
                <div class="mt-4 flex justify-between items-center w-full">
                <a href="detalhes-hamburguer.php?id=<?php echo $obj->id?>"><h3 class="font-bold"><?php echo $obj->preco ?></h3></a>
                <ul class="flex">
                    <a href="editar-hamburguer.php?id=<?php echo $obj->id?>"><li class="mr-4"><img src="../imagens/edit-icon.svg" /></li></a>
                    <a href="deletar-h.php?id=<?php echo $obj->id?>"><li><img src="../imagens/delete-icon.svg" /></li></a>
                </ul>
                </div>
            </div>
            <?php
            }
        ?>
        
      </div>
      <button class="bg-[#F9E014] text-[#8D2F0D] p-8 text-5xl mt-6 hover:underline" onclick="location.href='criar-hamburguer.php'">Adicionar Hambúrguer</button>
    </section>
  </main>
  <footer>
    <p>© Copyright 2023. Scooby Burg</p>
  </footer>
</body>

</html>
