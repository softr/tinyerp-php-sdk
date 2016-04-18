<?php
namespace Softr\TinyERP\Entity;

/**
 * Pedido Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class Pedido extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

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
    public $data_pedido;

    /**
     * @var date
     */
    public $data_prevista;

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
    public $nome_fantasia;

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
     * @var float
     */
    public $quantidade;

    /**
     * @var float
     */
    public $valor_unitario;

    /**
     * @var string
     */
    public $condicao_pagamento;

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
     * @var string
     */
    public $nome_transportador;

    /**
     * @var string
     */
    public $frete_por_conta;

    /**
     * @var string
     */
    public $forma_frete;

    /**
     * @var float
     */
    public $valor_frete;

    /**
     * @var float
     */
    public $valor_desconto;

    /**
     * @var float
     */
    public $total_produtos;

    /**
     * @var float
     */
    public $total_pedido;

    /**
     * @var string
     */
    public $situacao;

    /**
     * @var string
     */
    public $numero_ordem_compra;

    /**
     * @var int
     */
    public $id_vendedor;

    /**
     * @var string
     */
    public $nome_vendedor;

    /**
     * @var string
     */
    public $obs;

    /**
     * @var string
     */
    public $codigo_rastreamento;

    /**
     * @var int
     */
    public $id_nota_fiscal;
}