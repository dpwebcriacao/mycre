<?php

	namespace Classes\Db;

	use \PDO;
	use \PDOException;

	Class Database{

		/**
		 * Host de conexão com o banco de dados
		 * @var string
		**/
		const HOST = 'crudmycre.mysql.dbaas.com.br';

		/**
		 * Nome do banco de dados
		 * @var string
		**/
		const NAME = 'crudmycre';

		/**
		 * Usuário do banco de dados
		 * @var string
		**/
		const USER = 'crudmycre';

		/**
		 * Senha de acesso ao banco de dados
		 * @var string
		**/
		const PASS = 'P@$$w0rd';

		/**
		 * Nome da tabela a ser manipulada
		 * @var string
		**/
		private $table;

		/**
		 * Instancia de conexão com o banco de dados
		 * @var PDO
		**/
		private $connection;

		/**
		 * Define a tabela e instancia a conexão
		 * @var string $table
		**/
		public function __construct($table = null){
			$this->table = $table;
			$this->setConnection();
		}

		/**
		 * Método responsável por criar a conexão com o banco de dados
		**/
		private function setConnection(){
			try{
				$this->Connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
				$this->Connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('ERROR: '.$e->getMessage());
			}
		}

		/**
		 * Método responsável por executar querys no dados no banco
		 * @param string $query
		 * @param array $params
		 * @return PDOStatement
		**/
		public function execute($query,$params = []){
			try{
				$statement = $this->Connection->prepare($query);
				$statement->execute($params);
				return $statement;
			}catch(PDOException $e){
				die('ERROR: '.$e->getMessage());
			}
		}

		/**
		 * Método responsável por inserir os dados no banco
		 * @param array $values [ field => value ]
		 * @return integer ID inserido
		**/
		public function insert($values){
			//dados da query
			$fields = array_keys($values);
			$binds  = array_pad([],count($fields),'?');

			//monta a query
			$query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

			//EXECUTA O INSERT
			$this->execute($query,array_values($values));

			//RETORNA O ID INSERIDO
			return $this->Connection->lastInsertId();
		}

	}