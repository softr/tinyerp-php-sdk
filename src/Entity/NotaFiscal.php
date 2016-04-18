<?php
namespace Softr\TinyERP\Entity;

/**
 * Base NotaFiscal Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class NotaFiscal extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $tipo_nota;

    /**
     * @var string
     */
    public $natureza_operacao;

    /**
     * @var int
     */
    public $regime_tributario;

    /**
     * @var int
     */
    public $finalidade;

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
    public $numero_ecommerce;

    /**
     * @var date
     */
    public $data_emissao;

    /**
     * @var date
     */
    public $data_saida;

    /**
     * @var string
     */
    public $hora_saida;

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
    public $endereco_entrega;

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
     * @var list
     */
    public $itens[ ];

    /**
     * @var object
     */
    public $item;

    /**
     * @var string
     */
    public $codigo;

    /**
     * @var string
     */
    public $descricao;

    /**
     * @var string
     */
    public $unidade;

    /**
     * @var string
     */
    public $ncm;

    /**
     * @var float
     */
    public $quantidade;

    /**
     * @var float
     */
    public $valor_unitario;

    /**
     * @var float
     */
    public $valor_total;

    /**
     * @var string
     */
    public $cfop;

    /**
     * @var string
     */
    public $natureza;

    /**
     * @var float
     */
    public $base_icms;

    /**
     * @var float
     */
    public $valor_icms;

    /**
     * @var float
     */
    public $base_icms_st;

    /**
     * @var float
     */
    public $valor_icms_st;

     /**
     * @var float
     */
    public $valor_servicos;

    /**
     * @var float
     */
    public $valor_produtos;

    /**
     * @var float
     */
    public $valor_frete;

    /**
     * @var float
     */
    public $valor_seguro;

    /**
     * @var float
     */
    public $valor_outras;

    /**
     * @var float
     */
    public $valor_ipi;

    /**
     * @var float
     */
    public $valor_issqn;

    /**
     * @var float
     */
    public $valor_nota;

    /**
     * @var float
     */
    public $valor_desconto;

    /**
     * @var float
     */
    public $valor_faturado;

    /**
     * @var string
     */
    public $frete_por_conta;

    /**
     * @var object
     */
    public $transportador;

    /**
     * @var string
     */
    public $nome;

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
    public $cidade;

    /**
     * @var string
     */
    public $uf;

    /**
     * @var string
     */
    public $placa;

    /**
     * @var string
     */
    public $uf_placa;

    /**
     * @var int
     */
    public $quantidade_volumes;

    /**
     * @var string
     */
    public $especie_volumes;

    /**
     * @var string
     */
    public $marca_volumes;

    /**
     * @var string
     */
    public $numero_volumes;

    /**
     * @var float
     */
    public $peso_bruto;

     /**
     * @var float
     */
    public $peso_liquido;

    /**
     * @var string
     */
    public $codigo_rastreamento;

    /**
     * @var string
     */
    public $forma_pagamento;

    /**
     * @var string
     */
    public $meio_pagamento;

    /**
     * @var string
     */
    public $condicao_pagamento;

    /**
     * @var object
     */
    public $parcelas[ ];

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
    public $obs;

    /**
     * @var string
     */
    public $chave_acesso;
}