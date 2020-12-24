<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas de Multiplicar</title>
        <style>
            table{
                border: 1px solid black;
            }
            th, td {
                border: 1px solid black;
                width: 10px;
                height: 10px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            // put your code here
        
        // Version válida de las tablas de multiplicar
        function tablasMultiplicar2() {
            $output = "";
            $i = 0;
            $j = 0;

            $output .= "<table>";
            for ($i;$i<10;$i++) {
                $output .= "<th>" . $i . "</th>";
            }
            $i = 0;
            
            while ($j <= 10) {
                while ($i <= 10) {
                    
                    if ($i == 0 && $j != 0){
                        //$output .= "<tr><td></td></tr>";
                        //$output .= "<tr></tr>";
                        $output .= "<tr><th> $j </th>";
                    } else {
                        if ($i >1 && $j != 0) {
                            $output .= "<td>" . ($i-1)*$j . "</td>";
                        }
                    }
                    $i++;
                }
                $output .= "</tr>";
                $j++;
                $i = 0;
            }
            
            $output .= "</table>";

            echo $output;
        }
        
        // primera version de las tablas de multiplicar
        
        function tablasMultiplicar1() {
            $output = "";
            $i = 1;
            $j = 1;

            $output .= "<table>";
            while ($i <= 10) {
                while ($j <= 10) {
                    $output .= "<tr><td>" . $i . " X " . $j . "</td> <td>" . $i*$j . "</td></tr>";
                    $j++;
                }
                if ($i < 10) {
                    $output .= "<tr><td>--------------</td></tr>"; 
                }
                $i++;
                $j = 0;
            }
            $output .= "</table>";

            echo $output;
        }
        
        
        //tablasMultiplicar1();
        tablasMultiplicar2();
        ?>
    </body>
</html>