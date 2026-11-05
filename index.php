
<?php

// Classe base Funcionario
class Funcionario {

    protected $nome;
    protected $salario;

    // Construtor
    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Método de pagamento
    public function calcularPagamento() {
        return $this->salario;
    }
}

// Classe filha FuncionarioCLT
class FuncionarioCLT extends Funcionario {

    // Sobrescrevendo o método
    public function calcularPagamento() {
        return $this->salario + 300;
    }
}

// Classe filha FuncionarioPJ
class FuncionarioPJ extends Funcionario {

    // Sobrescrevendo o método
    public function calcularPagamento() {
        return $this->salario;
    }
}

// Criando os funcionários
$funcionario1 = new FuncionarioCLT("Ana", 2500);
$funcionario2 = new FuncionarioPJ("Carlos", 4000);

// Exibindo os pagamentos
echo "<h2>Funcionários</h2>";

echo "Funcionária CLT: " . $funcionario1->calcularPagamento() . "<br>";

echo "Funcionário PJ: " . $funcionario2->calcularPagamento() . "<br>";

//RESPOSTAS DAS PERGUNTAS:
//1. Herança é quando uma classe filha recebe características e métodos de uma classe principal, podendo aproveitar o código existente.
//2. private: só pode ser acessado dentro da própria classe.
//protected: pode ser acessado dentro da própria classe e também pelas classes filhas.
//3. Significa criar novamente um método que já existe na classe pai, modificando seu funcionamento na classe filha.
//4. O polimorfismo acontece quando diferentes classes utilizam o mesmo método, mas cada uma possui seu próprio funcionamento. Nesse caso, todas possuem calcularPagamento(), mas podem calcular valores diferentes.
//5. DESAFiO:
//1- Sim, pois podemos adicionar uma nova classe filha para representar o Cliente Internacional.
//2- Criar uma nova classe que herde da classe principal e implementar seu próprio método calcularPagamento().


?>