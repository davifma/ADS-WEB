<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Simples</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
			background-color: #f4f4f9;
		}

		#chat-container {
			width: 80%;
			border: 1px solid #ccc;
			border-radius: 5px;
			overflow: hidden;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			background-color: #fff;
		}

		#message-area {
			height: 400px; /*400px;*/
			overflow-y: auto;
			padding: 10px;
			border-bottom: 1px solid #ccc;
		}

		#input-area {
			display: flex;
			padding: 10px;
		}

		#message-input {
			flex: 1;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-right: 5px;
		}

		#send-button {
			padding: 5px 10px;
			border: none;
			border-radius: 3px;
			background-color: #007bff;
			color: white;
			cursor: pointer;
		}

		#send-button:hover {
			background-color: #0056b3;
		}
	</style>
</head>
<body>
    <div id="chat-container">
        <div id="message-area">
            <!-- As mensagens serão exibidas aqui -->
			<?php
				session_start();
				require("class/view/Chat.php");
				$sala = new Chat();
				
				if(isset($_POST["message-input"])){	
					$_SESSION["msg".count($_SESSION)]= $_POST["message-input"];
				}
				if(isset($_SESSION)){
					$sala->mostrarChat($_SESSION);
				}
			?>
        </div>
        <form id="input-area" method="post">
            <input type="text" id="message-input" name="message-input"  placeholder="Digite sua mensagem...">
            <input id="send-button" type="submit" value="enviar">
        </form>
    </div>
</body>
</html>