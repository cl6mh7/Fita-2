<html>
    <head>
        <?php
        if(isset($_GET)) {
            if($_GET["elements"] == "Foc"){
                echo "<link rel=\"stylesheet\" href = \"foc.css\">";
            }
            
            if($_GET["elements"] == "Aigua"){
                echo "<link rel=\"stylesheet\" href = \"aigua.css\">";
            }

            if($_GET["elements"] == "Terra"){
                echo "<link rel = \"stylesheet\" href = \"terra.css\">";
            }
        }
        ?>
    </head>

    <body>
        <form method = "GET">
            <label>Selecciona un element:</label>
            <select name = "elements">
                <option value = "Foc">Foc!</option>
                <option value = "Aigua">~aIGuA~</option>
                <option value = "Terra">terra</option>
            </select>
            <input type = "submit" value = "Tramita">
        </form>
    </body>
</html>