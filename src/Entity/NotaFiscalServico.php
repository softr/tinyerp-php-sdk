<?php
namespace Softr\TinyERP\Entity;

/**
 * NotaFiscalServico Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class NotaFiscalServico extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $serie;

    /**
     * @var int
     */
    public $numero;

    /**
     * @var int
     */
    public $numeroRPS;

    /**
     * @var string
     */
    public $codigo_verificacao;

    /**
     * @var date
     */
    public $data_emissao;

    /**
     * @var object
     */
    public $cliente;

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
    public $fone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var object
     */
    public $servico;

    /**
     * @var string
     */
    public $descricao;

    /**
     * @var float
     */
    public $valor_servico;

    /**
     * @var string
     */
    public $codigo_lista_servico;

    /**
     * @var string
     */
    public $descontar_ir;

    /**
     * @var float
     */
    public $percentual_ir;

    /**
     * @var float
     */
    public $valor_ir;

    /**
     * @var string
     */
    public $texto_ir;

    /**
     * @var float
     */
    public $percentual_iss;

    /**
     * @var float
     */
    public $valor_iss;

    /**
     * @var string
     */
    public $descontar_iss_total;

    /**
     * @var string
     */
    public $texto_confins;

    /**
     * @var float
     */
    public $valor_confins;

    /**
     * @var string
     */
    public $texto_pis;

    /**
     * @var float
     */
    public $valor_pis;

    /**
     * @var string
     */
    public $texto_cs;

    /**
     * @var float
     */
    public $valor_cs;

    /**
     * @var float
     */
    public $total_nota;

    /**
     * @var string
     */
    public $forma_pagamento;

    /**
     * @var string
     */
    public $meio_pagamento;

    /**
     * @var list
     */
    public $parcelas[ ];

    /**
     * @var object
     */
    public $parcela;

    /**
     * @var int
     */
    public $dias;

    /**
     * @var date
     */
    public $data;

    /**
     * @var float
     */
    public $valor;

    /**
     * @var string
     */
    public $obs;

    /**
     * @var string
     */
    public $forma_pagamento;

    /**
     * @var string
     */
    public $meio_pagamento;

    /**
     * @var int
     */
    public $id_vendedor;

    /**
     * @var string
     */
    public $nome_vendedor;

    /**
     * @var float
     */
    public $percentual_comissao;

    /**
     * @var float
     */
    public $valor_comissao;

    /**
     * @var int
     */
    public $situacao;

    /**
     * @var string
     */
    public $descricao_situacao;

    /**
     * @var string
     */
    public $condicoes;
}