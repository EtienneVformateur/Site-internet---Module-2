<html>
    <head></head>
    <body> 
        <p> 
            <?php
            $nb = $_GET['nb'];
            function fibonnacci($x){

                if($x == 0)
                {
                    return 0;
                }
                elseif ($x < 3){
                  return 1;
                }
                else{
                  return fibonnacci($x-2) + fibonnacci($x-1);
                }
              };
              for ($i=0; $i < $nb; $i++) {
                echo " "; 
                echo fibonnacci($i);
              }
              ?> 
       </p>
    </body>
</html>