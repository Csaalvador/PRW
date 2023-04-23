<?php

$x = readline();


if($x == 'vertebrado'){
   $y = readline();
   
   if($y == 'ave'){
   
    $z = readline();
    
    if($z == 'carnivoro'){
        echo("aguia\n");
    }
    else if($z == 'onivoro'){
        echo("pomba\n");
    }
   }
        } if($x == 'invertebrado'){
    $u = readline();
    
    if($u == 'inseto'){
        $t = readline();
        if($t == 'hematofago'){
            echo("pulga\n");
        } else if($t == 'herbivoro'){
            echo("lagarta\n");
        }
    }
    if($u == 'anelideo'){
        $p = readline();
        
        if($p == 'hematofago'){
            echo("sanguessuga\n");
        } else if($p == 'onivoro'){
            echo("minhoca\n");
        }
    }
    
}
        if($y == 'mamifero'){
            $z = readline();
            if($z == 'onivoro'){
                echo("homem\n");
            }else if($z == "herbivoro"){
                echo("vaca\n");
            }
            
        }

    
?>
