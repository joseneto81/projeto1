<?php
class Pessoa{
	private $nome;

	public function Pessoa($nome='')
	{	
		$this->nome = $nome;
	}
	
	public function getNome()
	{	
		return $this->nome;
	}

	public function setNome($value)
	{	
		$this->nome = $value;
	}
}

$p = new Pessoa();
$p->setNome("Joao Carlos");
print $p->getNome()."\n";
?>
