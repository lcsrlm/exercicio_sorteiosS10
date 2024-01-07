<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prêmio Especial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        p {
            color: #333333;
        }

        .award-details {
            display: inline-block;
            padding: 10px;
            background-color: #3498db;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 4px;
            margin-top: 20px;
        }

        .validity {
            color: #999999;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Parabéns por ganhar um Prêmio Especial!</h1>
        <p>Prezado {{$client->name}},</p>
        <p>É com grande satisfação que anunciamos que você ganhou um prêmio especial. Como forma de agradecimento, aqui estão os detalhes do seu prêmio:</p>
        <div class="award-details">Valor do Prêmio: {{$award->value}}</div>
        <div class="award-details">Local do Prêmio: {{$award->local}}</div>
        <p>Use essas informações para resgatar o seu prêmio e aproveitar os benefícios!</p>

        <p>Parabéns mais uma vez e aproveite!</p>
        <p>Atenciosamente,<br>[Lucas da Rosa Lima]<br>[Patrão]</p>
    </div>
</body>

</html>
