<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='img/perfil.jpg' class='imgRedonda'/> UMGBot </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola! soy UMGBot, Estoy para responder preguntas relacionadas con la pagina de zapatos y accesorios. Espero poder ayudarte.<a href="https://globalbmgt.com/gbm/Main.php" target="_blank"> desea ver nuestro catalogo. ]
                        <br> 
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

            <input type=button class="creador" value="creador" onClick="mi_alerta()">
        </div>
    </div>
    
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("UMG"+
               "\n"+
               "\n grupo chatbot"
               
               );
        }
        </SCRIPT>
        
</body>

</html>