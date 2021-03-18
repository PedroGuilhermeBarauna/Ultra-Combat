<?php 
	require_once "Lutador.php";
	require_once "LutadorCRUD.php";
	$lutadorCRUD = new LutadorCRUD();
	//inico da class Luta.
	class Luta{
		private $desafiado;
		private $desafiante;
		private $ganhador;
		private $status

		//Métodos especiais.

		//inicio da função construct.
		public function __construct($desafiante,$desafiado){
			$this->setDesafiante($desafiante);
			$this->setDesafiado($desafiado);
		}
		//fim da função construct.

		public function getDesafiado() {
		    return $this->desafiado;
		}
		public function setDesafiado($desafiado) {
		    $this->desafiado = $desafiado;
		}
		public function getDesafiante() {
		    return $this->desafiante;
		}
		public function setDesafiante($desafiante) {
		    $this->desafiante = $desafiante;
		}

		public function getGanhador() {
		    return $this->ganhador;
		}
		 
		public function setGanhador($ganhador) {
		    $this->ganhador = $ganhador;
		}
        public function getStatus() {
            return $this->ganhador;
        }

		public function setStatus($status) {
            $this->status = $status;
        }

		//Inico métodos.

		//inicio da função marcarLuta.
		public function marcarLuta(Lutador $desafiante, Lutador $desafiado){
			if ($desafiante->getCategoria() == $desafiado->getCategoria() AND $desafiado != $desafiante){
				if ($desafiado->getPeso() != "invalido"){
					$this->setDesafiante($desafiante);
					$this->setDesafiado($desafiado);
				}
				else {
					echo "Algum lutador está com o peso invalido! Luta não pode acontecer";
				}
			}
			else {
				echo "Só podem lutar lutadores da mesma categoria de peso e que sejam lutadores diferentes";
			}
		}
		//fim da função marcarLuta.

		//inico da função lutar.
		public function lutar(){	
			$sorteDesafiante = rand(0,70);
			$sorteDesafiado = rand(0,70);

			$habilidadeANT = ($this->desafiante->getPeso() * 0.3) + $this->desafiante->getIdade() + $this->desafiante->getHabilidade();

			$habilidadeADO = ($this->desafiado->getPeso() * 0.3) + $this->desafiado->getIdade() + $this->desafiado->getHabilidade();

			if (($this->desafiante->getDerrotas() != 0) AND $this->desafiado->getDerrotas() != 0){
				$historicoANT = $this->desafiante->getVitorias() / $this->desafiante->getDerrotas();
				$historicoADO = $this->desafiado->getVitorias() / $this->desafiado->getDerrotas();
			}
			else {
				$historicoANT = 0;
				$historicoADO = 0;
			}
			if (
				(($habilidadeANT * 0.3) + $sorteDesafiante + ($historicoANT * 0.4))
				>
				(($habilidadeADO * 0.3) + $sorteDesafiado + ($historicoADO * 0.4))
			){
				$this->desafiante->ganharLuta();
				$this->setGanhador($this->desafiante);
				$this->desafiado->perderLuta();
			}
			elseif(
				(($habilidadeANT * 0.3) + $sorteDesafiante + ($historicoANT * 0.4))
				<
				(($habilidadeADO * 0.3) + $sorteDesafiado + ($historicoADO * 0.4))
			){
				$this->desafiado->ganharLuta();
				$this->setGanhador($this->desafiado);
				$this->desafiante->perderLuta();
			}
			else {
				$this->desafiante->empatarLuta();
				$this->setGanhador(null);
				$this->desafiado->empatarLuta();
			}
		}
		//fim da função lutar.
	}
	//fim da class Luta.
 ?>