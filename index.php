<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body class="container">
        <?php 
        function TongN($n){
            $tong=0;
            for($i=1; $i<=$n; $i++) $tong+=$i;
            return $tong;
        }
        if(!isset($_GET['n'])){?>
        <ul class="list-group">
        <?php
            $values = array(10, 20, 30, 40);
            for($i=0; $i<count($values); $i++)
                echo "<li class='list-group-item'>
                    <a href='?n=".$values[$i]."'>Value $values[$i]</a></li>";
        ?>
        </ul>
        <?php }
        else  echo "<div class='jumbotron'>
            1+2+...+".$_GET['n']."=".TongN($_GET['n'])."</div>";
        ?>
    </body>
</html>