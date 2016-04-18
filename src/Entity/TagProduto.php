<?php
namespace Softr\TinyERP\Entity;

/**
 * TagProduto Entity
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
final class TagProduto extends \Softr\TinyERP\Entity\AbstractEntity
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
     * @var int
     */
    public $id_grupo;

    /**
     * @var string
     */
    public $grupo;
}