<div class="h-screen flex flex-col  items-center  justify-center border  rounded">

<form action="" method="POST" enctype='multipart/form-data'>            
                                    <div class="form-group">
                                        <p>Você tem certeza que deseja remover o livro <strong><?=$livro->titulo?></strong> da sua estante?</p>
                                    </div>
                                    
                                    <div class="form-group">

                                    <a href="index.php"> 
                                        <button class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Cancelar</button>
                                        
                                    <button type="submit" name="excluir"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Confirmar</button>
                                
                                    </div>


                                </form>
</div>