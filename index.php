<!DOCTYPE html>
<html>
<head>
	<title>Disparo de e-mail</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body { background: black; font-family: 'Nunito', sans-serif; }
		img { display: block; margin: auto;}
		h1 { color : #ffffff; text-align: center; text-transform: uppercase; }
		p { color : #ffffff; margin-left: 15px; }
		#formulario { width: 300px; margin: auto; border: 1px solid #ffffff; }
		input { width : 100%; height: 30px; }
		fieldset{ border: none; text-align: left;}
		label { color : #ffffff; }
	</style>
</head>
<body>
	<img src="https://prepostattoo.herokuapp.com/imgs/img-1.png">
	<h1>Disparo de E-mail Pré-tattoo</h1>

    <form id="formulario" action="https://prepostattoo.herokuapp.com/pretattoo.php" method="post">
    	<p>Insira os dados do cliente:</p>
        <fieldset>
            <label for="email">E-mail: </label>
            <input required name="email" type="email">
        </fieldset>
        <fieldset>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>