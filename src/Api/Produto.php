<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\Produto as ProdutoEntity;

/**
 * Produto API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Produto extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all produtos
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Produtos Array
     */
    public function getAll(array $filters = [])
    {
        $produtos = $this->adapter->get(sprintf('%s/produtos.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $produtos = json_decode($produtos);

        $this->extractMeta($produtos);

        return array_map(function($produto)
        {
            return new ProdutoEntity($produto->produto);
        }, $produtos->data);
    }

    /**
     * Get Produto By Id
     *
     * @param   int  $id  Produto Id
     * @return  ProdutoEntity
     */
    public function getById($id)
    {
        $produto = $this->adapter->get(sprintf('%s/produto.obter.php?id=%s', $this->endpoint, $id));

        $produto = json_decode($produto);

        return new ProdutoEntity($produto);
    }

    /**
     * Get Produtos By Customer Id
     *
     * @param   int  $customerId  Customer Id
     * @param   array  $filters  (optional) Filters Array
     * @return  ProdutoEntity
     */
    public function getByCustomer($customerId)
    {
        $produtos = $this->adapter->get(sprintf('%s/customers/%s/produtos?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $produtos = json_decode($produtos);

        $this->extractMeta($produtos);

        return array_map(function($produto)
        {
            return new ProdutoEntity($produto->produto);
        }, $produtos->data);
    }

    /**
     * Create new produto
     *
     * @param   array  $data  Produto Data
     * @return  ProdutoEntity
     */
    public function create(array $data)
    {
        $produto = $this->adapter->post(sprintf('%s/produto.incluir.php', $this->endpoint), $data);

        $produto = json_decode($produto);

        return new ProdutoEntity($produto);
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
        $produto = $this->adapter->post(sprintf('%s/produto.alterar.php', $this->endpoint, $id), $data);

        $produto = json_decode($produto);

        return new ProdutoEntity($produto);
    }

    /**
     * Delete Produto By Id
     *
     * @param  string|int  $id  Produto Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/produtos/%s', $this->endpoint, $id));
    }
}