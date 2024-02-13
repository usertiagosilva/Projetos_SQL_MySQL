<!-- HEADER -->
<?php

    include_once "templates/header.php";

?>


<body>
    <div>
        <div id="title-container">
        <h1>Página de contato</h1>
        <p>contato@gmail.com.br</p>
        <p>41 99999-9999</p>
        </div>
        <div class="contact-container">
                <h2>Mande sua mensagem!</h2>
                <form>
                    <input type="text" name="name" id="name" placeholder="Seu nome">
                    <input type="text" name="email" id="email" placeholder="Seu e-mail">
                    <textarea name="message" id="message" placeholder="Escreva aqui sua duvida ou sugestão..."></textarea>
                    <input type="submit" value="Enviar">
                </form>
        </div>
    </div>
<!-- FOOTER -->
<?php

    include_once "templates/footer.php";

?>