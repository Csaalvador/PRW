<?php
$x = readline();

switch ($x){
    case 61:
        echo ("Brasilia\n");
        break;
        
        case 71:
            echo ("Salvador\n");
            break;
            
            case 11:
                echo("Sao Paulo\n");
                break;
                
                case 21:
                    echo("Rio de Janeiro\n");
                    break;
                    
                    case 32:
                        echo("Juiz de Fora\n");
                        break;
                        
                        case 19:
                            echo("Campinas\n");
                            break;
                            
                            case 27:
                                echo("Vitoria\n");
                                break;
                                
                                case 31: 
                                    echo("Belo Horizonte\n");
                                    break;
                                
}

if( $x != 61 &&  $x != 71 &&  $x != 11 &&  $x != 21 &&  $x != 32 &&  $x != 19 &&  $x != 27 &&  $x != 31 ){
    echo("DDD nao cadastrado\n");
    
};

?>
