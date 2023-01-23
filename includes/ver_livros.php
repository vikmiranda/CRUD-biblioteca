<?php
    $resultados = '';
    foreach($livros as $livro){
        $resultados .= '    <div class="wrapper">
                                <div class="box">
                                    <div class="header-box">
                                        <h3 class="font-vinho">'.$livro->titulo.'</h3> <hr>
                                    </div>
                                <H4>Isbn:'.$livro->isbn.' </H4> <hr>
                                <H4>Autor:'.$livro->autor.' </H4><hr>
                                <H4>Ano de lançamento:'.$livro->ano_lancamento.' </H4><hr>
                                <H4>Resumo:'.$livro->resumo.' </H4><hr>
                                <H4>IDLIVRO:'.$livro->ID_livro.' </H4><hr>

                                <a href="editar.php?id='.$livro->ID_livro.'"><button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluir.php?id='.$livro->ID_livro.'"><button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                                </div>  
                            </div>';
                  
    }
 
?>

<div class="col-md">
        <?=$resultados?>
   
</div> 

