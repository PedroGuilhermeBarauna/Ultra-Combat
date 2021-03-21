<?php 
	require_once "Conexao.php";
	require_once "Lutador.php";
	require_once "Luta.php";
	require_once "../interfaces/CRUD.php";	

	class lutaCRUD implements CRUD {
		private $conexao;

		public function __construct(){
			$this->conexao = conexao::getConexao();
		}

		public function insert($luta){
			$desafiante = $luta->getDesafiante();
			$desafiado  = $luta->getDesafiado();

			$sql = "INSERT INTO 
			`luta`
			VALUES 
			(DEFAULT,'$desafiado','$desafiante',null,'marcada')";
			
			$this->conexao->exec($sql);
		}



		public function get($id){
			$consulta = $this->conexao->prepare("select * from luta where id = $id");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			return $linha;
		}


		public function getDesafiantesMarcadas (){
            $consulta = $this->conexao->prepare("select luta.id, lutador.apelido from lutador JOIN luta 
                where luta.desafiante = lutador.id AND luta.status = 'marcada'
                ");
            $consulta->execute();
            $linha = $consulta->fetchall(PDO::FETCH_ASSOC);

			return $linha;
		}
        public function getDesafiadosMarcadas (){
            $consulta = $this->conexao->prepare("select luta.id, lutador.apelido from lutador JOIN luta 
                where luta.desafiado = lutador.id AND luta.status = 'marcada'
                ");
            $consulta->execute();
            $linha = $consulta->fetchall(PDO::FETCH_ASSOC);

            return $linha;
        }

        public function getDesafiantesConcluidas (){
            $consulta = $this->conexao->prepare("select lutador.apelido from lutador JOIN luta 
                where luta.desafiante = lutador.id AND luta.status = 'concluida'
                ");
            $consulta->execute();
            $linha = $consulta->fetchall(PDO::FETCH_ASSOC);

            return $linha;
        }
        public function getDesafiadosConcluidas(){
            $consulta = $this->conexao->prepare("select lutador.apelido from lutador JOIN luta 
                where luta.desafiado = lutador.id AND luta.status = 'concluida'
                ");
            $consulta->execute();
            $linha = $consulta->fetchall(PDO::FETCH_ASSOC);

            return $linha;
        }
        public function getGanhadoresConcluidas(){
            $consulta = $this->conexao->prepare("select lutador.apelido from lutador JOIN luta 
                where luta.ganhador = lutador.id AND luta.status = 'concluida'
                ");
            $consulta->execute();
            $linha = $consulta->fetchall(PDO::FETCH_ASSOC);

            return $linha;
        }

		public function getAll (){
			$consulta = $this->conexao->prepare("select * from luta");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			return $linha;
		}



		public function update($idGanhador,$idLuta){
			$sql = "update luta set 
            ganhador = '".$idGanhador."'
            where id = ".$idLuta;
            $this->conexao->exec($sql);

            $sql = "update luta set 
            status = 'concluida'
            where id = ".$idLuta;
            $this->conexao->exec($sql);
		}


		public function delete($id){

		}

	}



?>