<html>
        <head>
                <title>PHP TEST</title>
        </head>
        <body>
    
                <?php
                        $time = array("Maria", "José", "Ana");
                        echo $time[2];
                        echo "<br />";
                        print_r($time);
                        echo "a: [" . TRUE . "]<br /> ";
                        echo "a: [" . FALSE . "]<br /> ";
                        echo "a: [" . (20 > 9) . "]<br /> ";
                        echo "b: [" . (5 == 6) . "]<br /> ";
                        echo "c: [" . (1 == 0) . "]<br /> ";
                        echo "d: [" . (1 == 1) . "]<br /> ";

                        
                        $nome = "Maria";
                        echo 'f: [' . $nome . '] <br />';

                        $menu = 'sobre';
                        switch ($menu) {
                                case 'index':
                                        echo 'Escolha a página Inicial.';
                                        break;
                                case 'sobre':
                                        echo 'Escolheu a página Sobre.';
                                        break;
                                case 'novidades':
                                        echo 'Escolheu a página Novidades.';
                                        break;
                                case 'link':
                                        echo 'Escolheu a página Links.';
                                        break;
                                default:
                                        echo 'Página não encontrada.';
                                        break;
                        };

                                /*
                        
                        $primeiro_nome = "Maria";
                        echo $primeiro_nome;
                        echo '<br />';
                        $ultimo_nome = "Lourdes";
                        echo $ultimo_nome; """
                        */


                ?>
                <?php 
                                        function strconcat($palavra1, $palavra2) {
                                                return $palavra1 . $palavra2;
                                        }
                                        echo strconcat('olá', ' a todos!');
                ?>

                <?php
                $a = 3;
                function teste()
                {$a += 2; 
                }

                teste();
                echo $a
                ?>

                <?php 
                        function contador()
                        {
                                static $total = 0;
                                return $total++;
                        }

                        for ($i = 1; $i <=5; $i++){
                                echo contador();
                        }
                
                ?>

                <?php 
                        function dobro(&$numero)
                        {$numero = $numero * 2;
                        }
                        $a = 4;
                        dobro($a);
                        echo $a;
                
                ?>

                <?php
                        function pagamento($desconto=50)
                        {echo 'O desconto foi de ' . $desconto . '%';}
                        pagamento();
                ?>
        </body>
</html>