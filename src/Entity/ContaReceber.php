<?php
namespace Softr\TinyERP\Entity;

/**
 * ContaReceber Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class ContaReceber extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var date
     */
    public $data;

    /**
     * @var date
     */
    public $vencimento;

    /**
     * @var float
     */
    public $valor;

    /**
     * @var float
     */
    public $saldo;

    /**
     * @var string
     */
    public $nro_documento;

    /**
     * @var int
     */
    public $serie_documento;

    /**
     * @var string
     */
    public $nro_banco;

    /**
     * @var object
     */
    public $cliente;

    /**
     * @var string
     */
    public $codigo;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $tipo_pessoa;

    /**
     * @var string
     */
    public $cpf_cnpj;

    /**
     * @var string
     */
    public $ie;

    /**
     * @var string
     */
    public $rg;

    /**
     * @var string
     */
    public $endereco;

    /**
     * @var string
     */
    public $numero;

    /**
     * @var string
     */
    public $complemento;

    /**
     * @var string
     */
    public $bairro;

    /**
     * @var string
     */
    public $cep;

    /**
     * @var string
     */
    public $cidade;

    /**
     * @var string
     */
    public $uf;

    /**
     * @var string
     */
    public $pais;

    /**
     * @var string
     */
    public $fone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $historico;

    /**
     * @var string
     */
    public $categoria;

    /**
     * @var string
     */
    public $forma_pagamento;

    /**
     * @var string
     */
    public $portador;

    /**
     * @var string
     */
    public $situacao;

    /**
     * @var string
     */
    public $ocorrencia;

     /**
     * @var int
     */
    public $dia_vencimento;

    /**
     * @var int
     */
    public $numero_parcelas;
}