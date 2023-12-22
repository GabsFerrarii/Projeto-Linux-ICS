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
      <h2 class="font-[Knewave] text-black text-4xl my-12">CRIAR HAMBÚRGUER</h2>
      <div class="m-0-auto bg-[#17BDB9]">
        <form action="criar-h.php" method="post" class="flex flex-col items-start p-8 m-auto h-auto"> 
            <label class="font-semibold text-2xl" for="nome">Nome</label>
            <input class="w-full p-1 rounded mb-4 outline-none text-2xl" type="text" name="nome" />
            <label class="font-semibold text-2xl" for="preco">Preço</label>
            <input class="w-full p-1 rounded mb-4 outline-none text-2xl" type="number" name="preco" />
            <label class="font-semibold text-2xl" for="descricao">Descrição</label>
            <textarea name="descricao" class="w-full p-1 rounded mb-4 outline-none text-2xl h-12"></textarea>
            <!-- <input class="w-full p-1 rounded mb-4 outline-none text-2xl" type="text" name="descricao" /> -->
            <input class="mx-auto" type="submit" value="Criar" />
        </form>
      </div>
    </section>
  </main>
  <footer>
    <p>© Copyright 2023. Scooby Burg</p>
  </footer>
</body>

</html>
