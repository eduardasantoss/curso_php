<!DOCTYPE html>
<html lang="en">
<head> <!--parte que não é exibida no navegador da Web quando a página é carregada.-->
    <meta charset="UTF-8">
    <!--link da fonte que será usada na aplicação-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
<!--link da fonte com minha página css-->
<link rel="stylesheet" href="assets/css/estilo.css">
   
    <title>Curso PHP</title> <!--título da página-->
</head> <!--fechamento do meu head-->
<body> <!---elemento que contém tudo o que é exibido como parte de uma página de um site-->
    <header class="cabecalho"> <!--header: O elemento header é um bloco de conteúdo que pode conter um ou mais elementos h1 até , h6-->
        <h1>Curso PHP</h1> <!--Título-->
        <h2>índice dos Exercicios</h2> <!--Título-->
    </header><!--Fechamento do header-->
    <main class="principal"> <!--define o conteúdo principal dentro do <body>-->
        <div class="conteudo">
            <nav class="modulos"> <!--uma seção com links de navegação.-->
                
                <div class="modulo aqua">
                    <h3>Módulo 01</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                   
                </div>

                <div class="modulo dark ">
                    <h3>Módulo 02</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

                <div class="modulo turquise">
                    <h3>Módulo 03</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

                <div class="modulo medium">
                    <h3>Módulo 04</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

                <div class="modulo light">
                    <h3>Módulo 05</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

                <div class="modulo teal">
                    <h3>Módulo 06</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

                <div class="modulo aquamarine">
                    <h3>Módulo 07</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>


                <div class="modulo mediumaquamarine">
                    <h3>Módulo 08</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>


                <div class="modulo cadet">
                    <h3>Módulo 09</h3>
                    <ul> <!-- uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes.-->
                        <li><a href="#">Exercício A</a></li> <!--(li ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista.-->
                        <li><a href="#">Exercício B</a></li> <!-- a é para gerar link-->
                        <li><a href="#">Exercício C</a></li>

                        
                    </ul>

                </div>

             </nav>
        </div>
    </main>
    <footer class="rodape"><!--(<footer>) representa um rodapé para o seu sectioning content (conteúdo de seção).-->
        COD3R & ALUNOS  <?= date('Y'); ?>
    </footer>
    
</body> <!--fim do body-->
</html>