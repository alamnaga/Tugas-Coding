<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>

        .ganjil{
            background-color: #ccc;
            text-align: center;
        }

        .genap{
            background-color: #346;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Pemrograman Web</h2>
    <?php
    $a="95";
    $b = false;
    if ($a>80 && $b != true) { 
        echo "<div class = ganjil>HTML</div>";
    }
    if ($b!=true) {
        echo "<div class = genap>CSS</div>";
    }
    if ($b==true) {
        echo "<div class = ganjil>Java</div>";
    }else{
        echo "<div class = ganjil>PHP</div>";
    }
    ?>
</body>
</html>
<!-- 
1 membuat ganjil
2 text-align
3 membuat genap
4 color
5 text-align 
6 $a
7 $b
8 true
9 $bS
10 $b
    -->