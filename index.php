<!DOCTYPE html>
<html>
<head>
    <title>Practica 15</title>
    <meta charset="utf-8"/>
    <script>
        function mensaje(){
            alert ("Hola mundo Javascript");
            enviar();
        }
        function enviar(){
            var _nombre=document.getElementById("nom").value;
            var _edad=document.getElementById("ed").value;
            
        if(_nombre=="")
            {
                alert("Te Falta El Nombre");
                return;
            }
        if(_edad=="")
            {
                alert("Te Falta La edad");
                return;
            }
            document.getElementById("miForm").submit();
        }
        
    </script>
</head>
<body>
    <form method="POST" action="validacion.php" id="miForm">
            
            <p> Nombre <input type="text" name="nombre" ID="nom"/><br/>
                Edad   <input type="text" name="edad" ID="ed"/><br/>    
                       <input type="BUTTON" value="Enviar" onclick="mensaje()"/><br/>
            </p>
        
    </form>
</body>
</html>