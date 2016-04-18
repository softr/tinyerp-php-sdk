<?php
namespace Softr\TinyERP\Entity;

/**
 * Produto Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class Produto extends \Softr\TinyERP\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $codigo;

    /**
     * @var string
     */
    public $unidade;

    /**
     * @var float
     */
    public $preco;

    /**
     * @var string
     */
    public $ncm;

    /**
     * @var string
     */
    public $origem;

    /**
     * @var string
     */
    public $gtin;

    /**
     * @var string
     */
    public $gtin_embalagem;

    /**
     * @var float
     */
    public $peso_liquido;

    /**
     * @var float
     */
    public $peso_bruto;

    /**
     * @var float
     */
    public $estoque_minimo;

    /**
     * @var float
     */
    public $estoque_maximo;

    /**
     * @var int
     */
    public $id_fornecedor;

    /**
     * @var string
     */
    public $codigo_fornecedor;

    /**
     * @var string
     */
    public $codigo_pelo_fornecedor;

    /**
     * @var string
     */
    public $unidade_por_caixa;

    /**
     * @var float
     */
    public $preco_custo;

    /**
     * @var string
     */
    public $situacao;

    /**
     * @var string
     */
    public $tipo;

    /**
     * @var string
     */
    public $classe_ipi;

    /**
     * @var float
     */
    public $valor_ipi_fixo;

    /**
     * @var string
     */
    public $cod_lista_servicos;

    /**
     * @var string
     */
    public $tipo_producao;

    /**
     * @var string
     */
    public $descricao_complementar;

    /**
     * @var string
     */
    public $obs;
    }
}