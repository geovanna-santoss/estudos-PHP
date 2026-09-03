<?php
class Funcionario {
    public $nome;
    protected $salario;
    private $senhaAcesso;

    public function __construct($nome, $salario) {
        $this->nome    = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function exibirResumo() {
        return "Nome: $this->nome, Salário: $this->salario";
    }
}
?>

<!-- Perguntas -->
1. O método `exibirResumo()` vai funcionar sem erros? Por quê? 
Sim, já que os objetos chamados podem ser acessados por classes estendem a "Funcionario", sendo $nome um dado público, que é indicado pelo "public", e $salario um dado que se estende para si e suas classes filhas(que herdam determinadas informações), indicado pelo protected. 

2. Seria possível acessar `$senhaAcesso` de dentro da classe `Gerente`? Justifique. 
Não, pois $senhaAcesso foi definida como private o que impossibilita qualquer outra classe que não seja a classe 'Funcionario' de acessar esses dados.

3. Se você criasse uma terceira classe, `Diretor`, que **não** estendesse `Funcionario`, ela teria acesso a `$salario`?
Não. Seu acesso seria barrado já que sem a extensão da classe "Funcionario", os dados de $salario ficariam protegidos de outras classes não relacionadas a sua própria (protected só compartilha informações com si e com suas classes filhas).
