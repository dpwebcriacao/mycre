<?php

	namespace Classes\Cadastros;

	use \Classes\Db\Database;
	use \PDO;

	class Cre{

		/**
		 * Identificador único do contas a receber
		 * @var integer
		 */
		public $id;

		/**
		 * ID da pessoa
		 * @var integer
		*/
		public $id_pessoa;

		/**
		 * ID do titulo
		 * @var integer
		 */
		public $id_titulo;

		/**
		 * Vencimento do contas a receber
		 * @var date
		 */
		public $vencimento;

		/**
		 * updated (data de atualização)
		 * @var datetime
		 */
		public $updated;

		/**
		 * método para cadastrar um novo contas a receber
		 * @return boolean
		 */
		public function cadastrar(){
			//INSERIR O TITULO NO BANCO
			$obDatabase = new Database('contas_receber');
			$this->id = $obDatabase->insert([
												'id_pessoa'  => $this->id_pessoa,
												'id_titulo'  => $this->id_titulo,
												'vencimento' => $this->vencimento,
												'updated'    => $this->updated
											]);

			// RETONAR SUCESSO
			return true;
		}

		/**
		 * método responsável por atualizar o contas a receber no banco de dados
		 * @return boolean
		 */
		public function atualizar(){
			return (new Database('contas_receber'))->update('id = '.$this->id,[
																					'id_pessoa'  => $this->id_pessoa,
																					'id_titulo'  => $this->id_titulo,
																					'vencimento' => $this->vencimento,
																					'updated'    => $this->updated
																				]);
		}

		/**
		 * método responsável por excluir o contas a receber no banco de dados
		 * @return boolean
		 */
		public function excluir(){
			return (new Database('contas_receber'))->delete('id = '.$this->id);
		}

		/**
		 * método responsável por obter os contas a receber do banco de dados
		 * @return string where
		 * @return string order 
		 * @return string limit
		 * @return array
		 */
		public static function getCres($where = null, $order = null, $limit = null){
			return (new Database('contas_receber'))->select($where,$order,$limit)
											->fetchAll(PDO::FETCH_CLASS,self::class);
		}

		/**
		 * método responsável por buscar um contas a receber pelo seu ID
		 * @return integer id
		 * @return Titulo
		 */
		public static function getCre($id){
			return (new Database('contas_receber'))->select('id = '.$id)
											->fetchObject(self::class);
		}
	}