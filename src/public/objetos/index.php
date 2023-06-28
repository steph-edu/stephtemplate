<?php
class Car {
    public $marca = "";
    public $modelo = "";
    public $cor = "";
    public $placa = "";

    //metodo ligar

    function ligar(){
        echo "O carro está ligado\n ";
    }

    function desligar(){
        echo "O carro está desligado\n ";
    }

    function acelerar(){
        echo "O carro acelera\n ";
    }
}

$car1 = new Car();
$car2 = new Car();

$car1->marca="Tesla ";
$car1->modelo="Roadster ";
$car1->cor="Vermelho ";
$car1->placa="MARTE01 ";

$car2->marca = "Volkswagen ";
$car2->modelo = "Fusca ";
$car2->cor = "Azul ";
$car2->placa = "HERBIE53 ";

echo $car1->marca;
echo $car2->marca;

$car1->desligar();
$car2->acelerar();

class Pessoa {

    #metodo construtor
    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Um objeto foi criado <br>';
    }

    function perfil(){
        echo 'Eu sou ' . $this->nome . '<br>';
        echo 'Eu tenho ' . $this->idade . ' anos de idade. <br>';
    }
}

$p1 = new Pessoa('Maria', 22);
$p1->perfil();


class FahrenheitToCelsius {
    public $temperatura;

    //metodo construtor
    function __construct($temp){
        $this->temperatura = $temp; 
    }

    //metodo para exibir a tempetura
    function getTempetura(){
        return 5.0 / 9.0 * ($this->temperatura - 32.0);
    }
}

$x = new FahrenheitToCelsius(-68);
echo $x->getTempetura() . '<br>';
?>
