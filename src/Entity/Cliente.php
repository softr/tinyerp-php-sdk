<?php
namespace Softr\TinyERP\Entity;

/**
 * Cliente Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class Cliente extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

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
    public $fantasia;

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
    public $im;

    /**
     * @var string
     */
    public $tipo_negocio;

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
    public $endereco_cobranca;

    /**
     * @var string
     */
    public $numero_cobranca;

    /**
     * @var string
     */
    public $complemento_cobranca;

    /**
     * @var string
     */
    public $bairro_cobranca;

    /**
     * @var string
     */
    public $cep_cobranca;

    /**
     * @var string
     */
    public $cidade_cobranca;

    /**
     * @var string
     */
    public $uf_cobranca;

    /**
     * @var string
     */
    public $contatos;

    /**
     * @var string
     */
    public $fone;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $celular;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $email_nfe;

    /**
     * @var string
     */
    public $site;

    /**
     * @var int
     */
    public $estado_civil;

    /**
     * @var string
     */
    public $profissao;

    /**
     * @var string
     */
    public $sexo;

    /**
     * @var string
     */
    public $data_dascimento;

    /**
     * @var string
     */
    public $naturalidade;

    /**
     * @var string
     */
    public $nome_pai;

    /**
     * @var string
     */
    public $cpf_pai;

    /**
     * @var string
     */
    public $nome_mae;

    /**
     * @var string
     */
    public $cpf_mae;

    /**
     * @var float
     */
    public $limite_credito;

    /**
     * @var string
     */
    public $situacao;

    /**
     * @var string
     */
    public $obs;

    /**
     * @var int
     */
    public $id_vendedor;

    /**
     * @var string
     */
    public $nome_vendedor;

    /**
     * @var list
     */
    public $tipos_contato[ ];

    /**
     * @var string
     */
    public $tipo;

    /**
     * @var list
     */
    public $pessoas_contato[ ];

    /**
     * @var object
     */
    public $pessoa_contato;

    /**
     * @var int
     */
    public $id_pessoa;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $telefone;

    /**
     * @var string
     */
    public $ramal;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $departamento;
}