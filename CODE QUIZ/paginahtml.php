<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Introdução a HTML - Code Quiz</title>

    <link rel="stylesheet" href=".//CSS/paginahtml.css">
</head>

<body>

   <header>
    <nav class="navbar">

        <a href="home.php" class="logo">
            <img src="./img/code-quiz.png" alt="CodeQuiz">
        </a>

        <ul>
            <li><a href="#">Services</a></li>
            <li><a href="quiz.php">Quiz</a></li>
        </ul>

    </nav>
</header>

    <main>

        <section class="inicio">
            <h1>Introdução ao HTML</h1>

            <p>
                HTML é a linguagem usada para estruturar o conteúdo de uma página web.
            </p>
        </section>


        <section class="sobre">

            <div class="texto">
                <h2>O que significa HTML?</h2>

                <p>
                     A sigla HTML significa HyperText Markup Language, que em português significa Linguagem de Marcação de Hipertexto.

                </p><br>


                <h2>Como funciona o HTML?</h2>
                <p>O HTML utiliza tags para organizar os elementos de uma página.

Uma tag normalmente possui uma abertura e um fechamento:

<p>Olá, mundo!</p>

<p>Nesse exemplo:</p>

<p>

é a tag de abertura.

</p>
<p>
é a tag de fechamento.
</p>

<p>
Olá, mundo!

é o conteúdo.

Juntos, eles formam um elemento HTML.</p><br>

                <h2>Primeiros passos</h2>

                <p>Para começar a aprender PHP, é importante conhecer alguns conceitos básicos:</p>
                <div class="linhas">
<ol>
                <li>Variáveis</li><br>
                <li>Tipos de dados</li><br>
                <li>Condições</li><br>
                <li>Repetições</li><br>
                <li>Funções</li><br>
                <li>Formulários</li><br>
                <li>Conexão com banco de dados</li><br>
</div>
                
</ol>
                <h2>Variáveis</h2>
                <p>As variáveis são usadas para armazenar informações que podem ser utilizadas durante a execução do programa.
                Por exemplo, podemos guardar o nome de uma pessoa, sua idade ou sua pontuação em um quiz.
                No PHP, as variáveis começam com o símbolo $.</p>


                <h3>Exemplo:</h3>

                <p> Declarando variáveis de diferentes tipos:</p><br>
                <p>$nome = "Maria";       // String (texto)</p><br>
                <p>$idade = 30;           // Inteiro (número inteiro)</p><br>
                <p>$altura = 1.75;        // Float (número decimal)</p><br>
                <p>$estudando = true;     // Booleano (verdadeiro ou falso)</p><br>
                <p> // Exibindo os valores na tela</p><br>
                <p>echo "Nome: $nome ";</p><br>
                <p>echo "Idade: $idade anos ";</p><br>
                <p>echo "Altura: $altura m ";</p><br>



                <h2>Condições</h2>
                <p>As condições permitem que o programa tome decisões.
                Por exemplo, em um quiz podemos verificar se a resposta
                do usuário está correta e mostrar uma mensagem diferente para cada situação.</p>

                <h2>Repetições</h2>
                <p>As estruturas de repetição permitem executar uma determinada ação várias vezes.
                Elas são úteis quando precisamos percorrer uma lista de informações ou repetir uma 
                tarefa sem escrever o mesmo código várias vezes.</p>

                <h2>Por que aprender PHP?</h2>
                <p>PHP é uma boa linguagem para quem deseja começar a entender como funciona a programação no lado 
                do servidor. Ele também pode ser utilizado junto com HTML e CSS para criar sites e sistemas completos.</p>

                <h2>Dica para iniciantes</h2>
                <p>Não tente aprender tudo de uma vez. Comece entendendo variáveis, condições e repetições. Depois, avance para funções, 
                formulários e banco de dados. Aprenda aos poucos, pratique bastante e use seus próprios projetos para testar o que aprendeu!</p><br><br>


                <P>Se quiser se aprofundar mais nos conceitos clique no link para a documentação do PHP</P>


                <h3>Documentação HTML:</h3>
                <a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML" target="_blank" class="botao">
                HTML
                </a>

            </div>

            

        </section>


        <section class="objetivo">

            <h2>Seu objetivo</h2>

            <p>
                Estudar as atividades diárias
            </p>

        </section>


        <section class="recursos">

            <h2>O que você encontra aqui?</h2>

            <div class="cards">

                <div class="card">
                    <span>📚</span>
                    <h3>Conteúdos</h3>
                    <p>
                        Explicações sobre conceitos e linguagens de programação.
                    </p>
                </div>

                <div class="card">
                    <span>💡</span>
                    <h3>Exemplos</h3>
                    <p>
                        Exemplos práticos para ajudar na compreensão.
                    </p>
                </div>

                <div class="card">
                    <span>❔</span>
                    <h3>Quizzes</h3>
                    <p>
                        Teste seus conhecimentos e veja o quanto aprendeu.
                    </p>
                </div>

            </div>

        </section>


        <section class="final">

            <h2>Continue sua jornada!</h2>

            <p>
                Aprender programação é uma jornada. Comece com o básico,
                pratique seus conhecimentos e evolua cada vez mais.
            </p>

            <a href="cursos.html" class="botao">
                avançar para próximo passo
            </a>

        </section>

    </main>
</body>

</html>