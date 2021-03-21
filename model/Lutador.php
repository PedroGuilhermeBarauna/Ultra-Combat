<?php 
	require_once "../interfaces/Controlador.php";

	class Lutador implements Controlador{
		private $id;
		private $nome;
		private $nacionalidade;
		private $nascimento;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		private $habilidade;
		private $apelido;

		public function __construct ($nacionalidade, $nascimento, $altura, $peso, $vitorias, $derrotas, $empates, $nome,$apelido){
			$this->setNacionalidade($nacionalidade);
			$this->setNascimento($nascimento);
			$this->setAltura($altura);
			$this->setPeso($peso);
			$this->setVitorias($vitorias);
			$this->setDerrotas($derrotas);
			$this->setEmpates($empates);
			$this->setNome($nome);
			$this->setApelido($apelido);

			$this->setCategoria();
			$this->setHabilidade();
		}
		public function getId() {
		    return $this->id;
		}
		 
		public function setId($id) {
		    $this->id = $id;
		}
		public function getNome() {
		    return $this->nome;
		}
		public function setNome($nome) {
		    $this->nome = $nome;
		}
		public function getNacionalidade() {
		    return $this->nacionalidade;
		}
		public function setNacionalidade($nacionalidade) {
		    $this->nacionalidade = $nacionalidade;
		}
		public function getNascimento() {
		    return $this->nascimento;
		}
		public function setNascimento($nascimento) {
		    $this->nascimento = $nascimento;
		}
		public function getAltura() {
		    return $this->altura;
		}
		public function setAltura($altura) {
		    $this->altura = $altura;
		}
		public function getPeso() {
		    return $this->peso;
		}
		public function setPeso($peso) {
		    $this->peso = $peso;
		    $this->setCategoria();
		}
		public function getCategoria() {
		    return $this->categoria;
		}
		public function setCategoria() {
			//inico testa a faixa de peso.
		    $peso = $this->peso;
		    if ($peso < 52.2){
		    	$this->categoria = "invalido";
		    }
		    elseif($peso <=70.3){
		    	$this->categoria = "L";
		    }
		    elseif($peso <=83.9){
		    	$this->categoria = "M";
		    }
		    elseif ($peso <= 120.2) {
		    	$this->categoria = "P";
		    }
		    else{
				$this->categoria = "invalido";
		    }

		}
		public function getVitorias() {
		    return $this->vitorias;
		}
		public function setVitorias($vitorias) {
		    $this->vitorias = $vitorias;
		}
		public function getDerrotas() {
		    return $this->derrotas;
		}
		public function setDerrotas($derrotas) {
		    $this->derrotas = $derrotas;
		}
		public function getEmpates() {
		    return $this->empates;
		}
		public function setEmpates($empates) {
		    $this->empates = $empates;
		}
		public function getHabilidade() {
		    return $this->habilidade;
		}
		public function setHabilidade() {
		    $this->habilidade = ($this->getPeso() * 0.1) + $this->getIdade();
		}
		public function getApelido() {
		    return $this->apelido;
		}
		public function setApelido($apelido) {
		    $this->apelido = $apelido;
		}
		public function getIdade(){
			$nascimento = explode('-', $this->nascimento);
			$anoAtual = date('Y');
			$idade = $anoAtual - $nascimento[0];
			return $idade;
			}
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}
		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}
		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);

		}
	}
?>