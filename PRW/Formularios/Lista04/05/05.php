<fieldset>

    <?php
   
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $area = $n1 * $n2;

    echo "A área do retângulo é:<mark>$area</mark>";
    echo "<br>";

    ?>
    <style>
        button {
            background-color: black;
            color: white;
            border: 2px solid white;
            border-radius: 5px;
            padding: 6px 10px;
        }

        button:hover {
            background-color: white;
            color: white;
            border: 2px solid white;
        }

        body {
            color: white;
            background-color: black;
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            font-size: 20px;

        }
    </style>
    <br>
    <a href="05.html"><button>Voltar</button></a>


</fieldset>