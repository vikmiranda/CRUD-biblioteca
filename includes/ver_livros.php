<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação Executada com Sucesso</div>';
                break;

               case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não Executada</div>';
                break;

        
        }
    }

    $resultados = '';
    foreach($livros as $livro){

    $resultados .= '<div class="h-screen flex flex-col  items-center  justify-center border  rounded">
                                                
                                    <div class=" max-w-4xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex flex-col space-y-2">
                                        <a >
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$livro->titulo.'</h5>
                                        </a>

                                        <H4 >Isbn: '.$livro->isbn.' </H4> 
                                        <H4 >Autor: '.$livro->autor.' </H4><hr>
                                        <H4 >Ano de lançamento: '.$livro->ano_lancamento.' </H4><hr>
                                        <H4 >Resumo: '.$livro->resumo.' </H4><hr>

                                        <div> 
                                        <a href="editar.php?id='.$livro->ID_livro.'" >
                                        <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Editar</button>
                                        </a>

                                        <a href="excluir.php?id='.$livro->ID_livro.'" >
                                        <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Excluir</button>
                                        </a>




                    </div>';
 
    }



    $resultados = strlen($resultados) ? $resultados : '    <div class="h-screen flex flex-col  items-center  justify-center border  rounded">
                                                
                                                        <div class=" max-w-4xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                            
                                                            <a >
                                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sua estante está vazia. Cadastre um Livro</h5>
                                                            </a>
                                                                </div>
                                                                </div>';


?>

<?=$resultados?>


