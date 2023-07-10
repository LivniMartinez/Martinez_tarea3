<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Tarea_3</title>
    <style>
    body {
        background-color: #e6e6fa;
    }
    
    h1 {
        color: #9370db;
    }

    input[type="text"] {
        background-color: #d8bfd8; 
        padding: 5px; 
    }
    
    #output {
        background-color: #e0b0ff; 
        padding: 15px; 
    }
    
    .div {
        background-color: #e0b0ff; 
        padding: 20px; 
    }
</style>
</head>
<body>
<h1>Evento de Teclado</h1>

    <label for="textBox">Ingrese su información personal:</label>
    <input type="text" id="textBox">
    <div class="output-container">
        <p id="output"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>