<div class="h-screen flex flex-col items-center  justify-center border  rounded">


<form method="POST" enctype='multipart/form-data'>
  <div class="mb-6">
    <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
    <input type="text" id="titulo" name="titulo" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Título do Livro" required value="<?=$livro->titulo ?>">
  </div>

  <div class="mb-6">
    <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isbn</label>
    <input type="text" id="isbn" name="isbn" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Informe o ISBN do livro" required value="<?=$livro->isbn ?>">
  </div>

  <div class="mb-6">
    <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
    <input type="text" id="autor" name="autor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Autor do Livro" required  value="<?=$livro->autor ?>">
  </div>

<div class="mb-6">
    <label for="resumo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resumo</label>
    <textarea id="resumo" name="resumo" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descrição do Livro"><?=$livro->resumo ?></textarea>
</div>

    <div class="mb-6">
    <label for="ano_lancamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano de Lançamento</label>
    <input type="text" id="ano_lancamento" name="ano_lancamento" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Ano de Lançamento" required value="<?=$livro->ano_lancamento ?>">
  </div>
 

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>
</form>

</div>  