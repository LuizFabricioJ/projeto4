<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>M&R | Hair </title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> <!--Font txt-->
    </head>
    <body>
        <header>
            <div id="box">
                <h1><img src="img/logo.png" alt="logo do Salão"></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="loginprincipal.php">Login</a></li>
                        <li><a href="formulario.php">Cadastro</a></li>
                    </ul>
                </nav>    
            </div>
        </header>
        <main>
            <form>
                <fieldset>
                    <label for="name">Nome: </label>
                    <input type="text" id="name" class="input-pattern" required>

                    <label for="email">Email: </label>
                    <input type="email" id="email" class="input-pattern" required>

                    <label for="tel">Número de telefone: </label>
                    <input type="number" id="tel" class="input-pattern" required>

                    <label for="message">Mensagem: </label>
                    <textarea id="message" cols="90" rows="10" class="input-pattern"></textarea>
                </fieldset>
                <fieldset>
                    <legend>Como você prefere nosso contato?</legend>
                    <label for="email-radio"><input type="radio" id="email-radio" value="email" name="radio-contact" checked>Email</label>

                    <label for="telephone-radio"><input type="radio" id="telephone-radio" value="telephone" name="radio-contact">Telefone</label>

                    <label for="whatsapp-radio"><input type="radio" id="whatsapp-radio" value="whatsapp" name="radio-contact">Whatsapp</label>

                </fieldset>

                <label class="checkbox"> <input type="checkbox" checked> Gostaria de receber nossas novidades por e-mail?</label>
                <label for="sim"><input type="radio" id="sim-radio" value="sim" name="radio-caontact">sim</label>
                <label for="não"><input type="radio" id="não-radio" value="não" name="radio-caontact">não</label>

                <input type="submit" value="ENVIAR" class="save">
            </form>

        </main>
        <footer>
            <img src="img/logo.png" alt="logo of Salão">
            <p class="copyright">&copy; <strong>Copyright: Projeto Uninove 2022<strong></p> 
        </footer>
    </body>
</html>