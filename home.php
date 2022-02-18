<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QG - Kudya | Home </title>

    <!-- font awesome cdn link  -->
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>comida feita com amor </h3>
        <h3>Adicionar Restaurante</h3>
        <div>
            <form id="form1" method="post" action="inserir.php" enctype="multipart/form-data">
                <div>
                    <label class="texto">Nome do Restaurente</label>
                    <input type="text" name="nome" id="nomeRes" placeholder="Nome Restaurante" class="caixa_text"/>
                </div>

                <div>
                    <label class="texto">Localização do Restaurente</label>
                    <input type="text" name="local" id="localizacao" placeholder="Localização Restaurante" class="caixa_text"/>
                </div>

                <div>
                    <label class="texto">Email do Restaurante</label>
                    <input type="email" name="email" id="email" placeholder="Email Restaurante" class="caixa_text"/>
                </div>

                <div>
                    <label class="texto">Foto do Restaurente</label>
                    <input type="file" name="pic" class="caixa_text"/>   
                </div>
                <input type="submit" form="form1" value="Salvar" class="btn"/>
                
            </form>
        </div>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

    <section class="speciality" id="speciality">
        <div class="parte">
            <div>
                <table class="tabela" id="tabela" onclick="ver()">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome do Restaurante</td>
                            <td>Localização</td>
                            <td>Email</td>
                        </tr>
                    </thead>
                    <tbody id="tbcorpo">

                    </tbody>
                </table>            
            </div>
            <div style="width:80%">
                <form id="form2" method="post" action="inserirComida.php" enctype="multipart/form-data">
                    <div>
                        <label class="texto">Nome da Comida</label>
                        <input type="text" name="nomeComida" id="nomeComida" placeholder="Nome Comida" class="caixa_text"/>
                    </div>

                    <div>
                        <label class="texto">Preço da Comida</label>
                        <input type="number" name="precoComida" id="precoComida" placeholder="Preço Comida" class="caixa_text"/>
                    </div>

                    <div>
                        <label class="texto">Modo De Preparo</label>
                        <input type="text" name="preparo" id="preparo" placeholder="Modo de Prepraro" class="caixa_text"/>
                    </div>
                    
                    <div>
                        <label class="texto">Código Restaurante</label>
                        <input type="text" name="cod" id="cod"  placeholder="Codigo Restaurante" class="caixa_text"/>
                    </div>
                    
                    <div>
                        <label class="texto">Ingrendientes</label>
                        <input type="text" name="ingrediente" id="ingrediente" placeholder="Modo de Prepraro" class="caixa_text"/>
                    </div>
                    
                    <div>
                        <label class="texto">Foto da Comida</label>
                        <input type="file" id="pic" name="pic" class="caixa_text"/>   
                    </div>
                    <input type="submit" form="form2" value="Salvar" class="btn"/>                
                </form>
            </div>
        </div>
    </section>

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> Criado por <span> EINF 4º ano </span> | Gestão de Projecto Informáticos! </h1>

</section>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="script.js"></script>
    <script src="escript.js"></script>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
        .tabela {
          border-collapse: initial;
          width: 50em;
          border: 1px solid #666;
        }
        thead{
          background-color: #eee;
            padding: 16px;
            font-size: 14px;
        }
        tbody{
            padding: 23px;
            font-size: 17px;
            background-color: #fff;
        }
        .parte{
            display: inline-flex;
        }
        .parte div{
            margin: 5px;
        }
</style>
    <script>
         function ver(){
            var table=document.getElementById("tabela");
            for(var i=0; i<table.rows.length; i++){
                table.rows[i].onclick = function(){
                    var index = this.rowIndex;
                    document.getElementById("cod").value = table.rows[index].cells[0].innerHTML;
                }
            }
        }
    </script>
    
    
    
    
    
    
    
    

























