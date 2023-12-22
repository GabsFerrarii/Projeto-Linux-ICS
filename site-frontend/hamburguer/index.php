<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Scooby Burg - Hambúrgueres</title>
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
        <a href="index.html">
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
          include_once("config.php");
          // SQL query to retrieve data from the "users" table
          $sql = "SELECT nome, preco, descricao FROM hamburguer"
          $result = $connection->query($sql)
          if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              //echo "Nome: " . $row["nome"] . ", Descrição: " . $row["descricao"] . ", Preço: " . $row["preco"] . "<br>";
              echo '<div class="flex flex-col items-start"><img src="../../imagens/hamburguer.png" class="min-w-[420px]"><h3 class="font-bold text-[#17BDB9] text-5xl">' . $row["nome"] . '</h3><p class="font-[Inter] font-semibold">' . $row["descricao"] . '</p><div class="mt-4 flex justify-between items-center w-full"><h3 class="font-bold">' . $row["preco"] . '</h3></div></div>';
            }
          }
          else{
            echo "No results found";
          }
        ?>
      </div>
    </section>
  </main>
  <footer>
    <p>© Copyright 2023. Scooby Burg</p>
  </footer>
</body>
</html>