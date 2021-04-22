<?php

	namespace Classes\Cadastros;

	use \Classes\Db\Database;

	class Pessoa{

		/**
		 * Identificador único da pessoa
		 * @var integer
		 */
		public $id;

		/**
		 * Nome completo da pessoa
		 * @var string
		*/
		public $nome;

		/**
		 * CPF da pessoa
		 * @var integer
		 */
		public $cpf;

		/**
		 * Data de nascimento da pessoa
		 * @var string
		 */
		public $data_nascimento;

		/**
		 * Logradouro da pessoa
		 * @var string
		 */
		public $logradouro;

		/**
		 * Número da residência
		 * @var integer
		 */
		public $numero;

		/**
		 * bairro da residência
		 * @var string
		 */
		public $bairro;

		/**
		 * cidade da residência
		 * @var string
		 */
		public $cidade;

		/**
		 * uf da residência
		 * @var string
	 	 */
		public $uf;

		/**
		 * status da pessoa no sistema
		 * @var string(a/i)
		 */
		public $status;

		/**
		 * método para cadastrar uma nova pessoa
		 * @return boolean
		 */
		public function cadastrar(){
			//INSERIR A PESSOA NO BANCO
			$obDatabase = new Database('pessoas');
			$this->id = $obDatabase->insert([
												'nome' 				=> $this->nome,
												'cpf'  				=> $this->cpf,
												'data_nascimento' 	=> $this->data_nascimento,
												'logradouro' 		=> $this->logradouro,
												'numero' 			=> $this->numero,
												'bairro' 			=> $this->bairro,
												'cidade' 			=> $this->cidade,
												'uf'	 			=> $this->uf,
												'status'			=> $this->status
											]);

			// RETONAR SUCESSO
			return true;
		}

	}