<?php

	namespace Classes\Cadastros;

	use \Classes\Db\Database;
	use \PDO;

	class Titulo{

		/**
		 * Identificador único do titulo
		 * @var integer
		 */
		public $id;

		/**
		 * Descrição do titulo
		 * @var string
		*/
		public $descricao;

		/**
		 * Valor do titulo
		 * @var float
		 */
		public $valor;

		/**
		 * método para cadastrar um novo titulo
		 * @return boolean
		 */
		public function cadastrar(){
			//INSERIR O TITULO NO BANCO
			$obDatabase = new Database('titulos');
			$this->id = $obDatabase->insert([
												'descricao' => $this->descricao,
												'valor'  	=> $this->valor
											]);

			// RETONAR SUCESSO
			return true;
		}

		/**
		 * método responsável por atualizar o titulo no banco de dados
		 * @return boolean
		 */
		public function atualizar(){
			return (new Database('titulos'))->update('id = '.$this->id,[
																			'descricao' => $this->descricao,
																			'valor'		=> $this->valor
																		]);
		}

		/**
		 * método responsável por excluir o titulo no banco de dados
		 * @return boolean
		 */
		public function excluir(){
			return (new Database('titulos'))->delete('id = '.$this->id);
		}

		/**
		 * método responsável por obter os titulos do banco de dados
		 * @return string where
		 * @return string order 
		 * @return string limit
		 * @return array
		 */
		public static function getTitulos($where = null, $order = null, $limit = null){
			return (new Database('titulos'))->select($where,$order,$limit)
											->fetchAll(PDO::FETCH_CLASS,self::class);
		}

		/**
		 * método responsável por buscar um titulo pelo seu ID
		 * @return integer id
		 * @return Titulo
		 */
		public static function getTitulo($id){
			return (new Database('titulos'))->select('id = '.$id)
											->fetchObject(self::class);
		}
	}