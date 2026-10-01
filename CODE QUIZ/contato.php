<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CodeQuiz - Contato</title>

    <link rel="stylesheet" href="css/contato.css">
</head>

<body>

    <header>
        <a href="home.php" class="voltar">← Voltar</a>

        <h1>Entre em contato conosco</h1>

        <p>
            Tem alguma dúvida, sugestão ou problema?
            Fale com a equipe CodeQuiz!
        </p>
    </header>


    <main class="contato">

        <div class="informacoes">

            <h2>Fale com a gente</h2>

            <p>
                Estamos aqui para ajudar você a ter a melhor
                experiência aprendendo programação.
            </p>

            <div class="info">
                <strong>📧 E-mail</strong>
                <span>contato@codequiz.com</span>
            </div>

            <div class="info">
                <strong>💬 Suporte</strong>
                <span>Respondemos o mais rápido possível.</span>
            </div>

            <div class="info">
                <strong>💡 Sugestões</strong>
                <span>Envie suas ideias para melhorar o CodeQuiz.</span>
            </div>

        </div>


        <div class="formulario">

            <h2>Envie uma mensagem</h2>

            <form>

                <label for="nome">Nome</label>
                <input
                    type="text"
                    id="nome"
                    placeholder="Digite seu nome"
                >

                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Digite seu e-mail"
                >

                <label for="assunto">Assunto</label>
                <input
                    type="text"
                    id="assunto"
                    placeholder="Digite o assunto"
                >

                <label for="mensagem">Mensagem</label>
                <textarea
                    id="mensagem"
                    placeholder="Digite sua mensagem"
                ></textarea>

                <button type="submit">
                    ENVIAR MENSAGEM
                </button>

            </form>

        </div>

    </main>


</body>
</html>