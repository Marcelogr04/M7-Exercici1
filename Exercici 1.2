<!DOCTYPE html>
    <html>
    <head>
        <title>Battleship Game</title>
        <style>
            body {
                background-image: url('fondo.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
    
            h1 {
                text-align: center;
                font-size: 50px;
                color: silver;
                margin-top: 0px;
                text-shadow: 4px 4px 6px #14385a;
            }
    
            table {
                border-collapse: collapse;
                background-size: cover;
                box-shadow: 8px 8px 12px #14385a;
            }
    
            th, td {
                width: 50px;
                height: 50px;
                text-align: center;
                border: 1px solid black;
                background-color: rgba(192, 192, 192, 0.7);
            }
            
            .coordinates {
                background-color: rgba(199, 199, 199, 1);
            }
    
            .submarine {
                background-image: url('submarine.png');
                background-size: 100% 100%;
            }
        </style>
    </head>
    
    <body>
        <h1>Battleship</h1>
        <table>
            <?php
            $measure = 10;
            $submarines = [];
    
            for ($i= 0; $i < 3; $i++) {
                $orientation = rand(0, 1);
                $x = rand(0, $measure - 2);
                $y = rand(0, $measure - 2);
                $freepositions = true;
                for ($j = 0; $j < 2; $j++) {
                    if ($orientation == 0) {$newX = $x + $j;}
                    else {$newX = $x + 0;}
                    
                    if ($orientation == 1) {$newY = $y + $j;}
                    else {$newY = $y + 0;}                              
                    foreach ($submarines as $submarine) {
                        if ($submarine['x'] == $newX && $submarine['y'] == $newY) {
                            $freepositions = false;
                            break 2;}
                    }
                }
                if ($freepositions) {
                    for ($j = 0; $j < 2; $j++) {
                        if ($orientation == 0) {$newX = $x + $j;}
                        else {$newX = $x + 0;}
                        
                        if ($orientation == 1) {$newY = $y + $j;}
                        else {$newY = $y + 0;}
                        $submarines[] = ["x" => $newX, "y" => $newY];
                    }
                } else {
                    $i--;
                }
            }
    
            echo "<tr>";
            echo "<td></td>";
            $N = 10;
            $M = "J";
            $colour = 'coordinates';
    
            for ($i = 0, $j = "A"; $i < $N; $i++, $j++) {
                echo "<th class='$colour'>$j</th>";
            }
            echo "</tr>";
    
            for ($row = 1; $row <= $N; $row++) {
                echo "<tr>";
                echo "<th class='$colour'>$row</th>";
                for ($column = 1; $column <= 10; $column++) {
                    $classe = '';
                    foreach ($submarines as $submarine) {
                        if ($submarine['x'] == $column - 1 && $submarine['y'] == $row - 1) {
                            $classe = 'submarine';
                            break;}
                    }
                    echo "<td class='$classe'></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>
