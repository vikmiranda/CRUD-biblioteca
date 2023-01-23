<div class="col-md">
                    <div class="wrapper">
                        <div class="box">
                            <div class="header-box">
                                <h3 class="font-vinho"><?=TITLE?></h3>
                                <hr>
                            </div>
                            <div class="body-box">
                                <form action="" method="POST" enctype='multipart/form-data'>            
    
                                    <span>Título do Livro:<span>
                                    <input type="text" class="form-control" name="titulo" placeholder="Digite o título do livro..." value="<?=$livro->titulo ?>">
                                    <br>

                                    <span>Isbn<span>
                                    <input type="text" class="form-control" name="isbn" placeholder="Informe o ISBN do livro..." value="<?=$livro->isbn ?>">
                                    <br>

                                    <span>Autor<span>
                                    <input type="text" class="form-control" name="autor" placeholder="Informe o nome do Autor..." value="<?=$livro->autor ?>">
                                    <br>

                                    <span>Resumo:<span>
                                    <textarea class="form-control" name="resumo" placeholder="Faça um breve resumo sobre o livro..."><?=$livro->resumo ?></textarea>
                                    <br>

                                    <span>Ano de Lançamento<span>
                                    <input type="text" class="form-control" name="ano_lancamento" placeholder="Informe o ano de lançamento..." value="<?=$livro->ano_lancamento ?>">
                                    <br> <br>
                      

                                    <input type="submit" value="ENVIAR" class="btn-custom-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
     