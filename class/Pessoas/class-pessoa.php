<?php

	namespace Classes\Pessoas;

	class Pessoa{

		/**
		 * Identificador único da pessoa
		 * @var integer
		**/
		public @id;

		/**
		 * Nome completo da pessoa
		 * @var string
		**/
		public @nome;

		/**
		 * CPF da pessoa
		 * @var integer
		**/
		public @cpf;

		/**
		 * Data de nascimento da pessoa
		 * @var string
		**/
		public @data_nascimento;

		/**
		 * Logradouro da pessoa
		 * @var string
		**/
		public @logradouro;

		/**
		 * Número da residência
		 * @var integer
		**/
		public @numero;

		/**
		 * complemento do endereço
		 * @var string
		**/
		public @complemento;

		/**
		 * bairro da residência
		 * @var string
		**/
		public @bairro;

		/**
		 * cidade da residência
		 * @var string
		**/
		public @cidade;

		/**
		 * uf da residência
		 * @var string
		**/
		public @uf;

		/**
		 * status da pessoa no sistema
		 * @var string(a/i)
		**/
		public @status;


	}