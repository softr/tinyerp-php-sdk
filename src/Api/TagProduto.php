<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\TagProduto as TagProdutoEntity;

/**
 * TagProduto API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class TagProduto extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all tagsProduto
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Cities Array
     */
    public function getAll(array $filters = [])
    {
        $tagsProduto = $this->adapter->get(sprintf('%s/tag.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $tagsProduto = json_decode($tagsProduto);

        $this->extractMeta($tagsProduto);

        return array_map(function($tag_produto)
        {
            return new TagProdutoEntity($tag_produto->tag_produto);
        }, $tagsProduto->data);
    }

    /**
     * Get TagProduto By Id
     *
     * @param   int  $id  TagProduto Id
     * @return  TagProdutoEntity
     */
    public function getById($id)
    {
        $tag_produto = $this->adapter->get(sprintf('%s/tagsProduto/%s', $this->endpoint, $id));

        $tag_produto = json_decode($tag_produto);

        return new TagProdutoEntity($tag_produto);
    }

    /**
     * Update Produto By Id
     *
     * @param   string  $id    Produto Id
     * @param   array   $data  Produto Data
     * @return  ProdutoEntity
     */
    public function update($id, array $data)
    {
        $produto = $this->adapter->post(sprintf('%s/tag.alterar.php', $this->endpoint, $id), $data);

        $produto = json_decode($produto);

        return new ProdutoEntity($produto);
    }
}