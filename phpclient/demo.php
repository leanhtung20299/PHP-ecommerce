<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
        <table border="1" >
            <tr>
                <th>ABC</th>
                <th>BAA</th>
            </tr>
            <tr id="1" onmousemove="xuly(1)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="2" onmousemove="xuly(2)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="3"onmousemove="xuly(3)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="4" onmousemove="xuly(4)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="5"onmousemove="xuly(5)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="6" onmousemove="xuly(6)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
            <tr id="7"onmousemove="xuly(7)">
                <td>AUC</td>
                <td>UDC</td>
            </tr>
        </table>
        <script>
            function xuly(m){  
                if(sessionStorage.getItem("id")!=null){
                    document.getElementById(sessionStorage.getItem("id")).style.background = "white";
                }
                document.getElementById(m).style.background = "blue"; 
                sessionStorage.setItem("id",m);
            }
        </script>
    </body>
</html>
