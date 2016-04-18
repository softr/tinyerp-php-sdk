<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\Pedido as PedidoEntity;

/**
 * Pedido API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Pedido extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all pedidos
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Pedidos Array
     */
    public function getAll(array $filters = [])
    {
        $pedidos = $this->adapter->get(sprintf('%s/pedidos.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $pedidos = json_decode($pedidos);

        $this->extractMeta($pedidos);

        return array_map(function($pedido)
        {
            return new PedidoEntity($pedido->pedido);
        }, $pedidos->data);
    }

    /**
     * Get Pedido By Id
     *
     * @param   int  $id  Pedido Id
     * @return  PedidoEntity
     */
    public function getById($id)
    {
        $pedido = $this->adapter->get(sprintf('%s/pedido.obter.php?id=%s', $this->endpoint, $id));

        $pedido = json_decode($pedido);

        return new PedidoEntity($pedido);
    }

    /**
     * Get Pedidos By Customer Id
     *
     * @param   int  $customerId  Customer Id
     * @param   array  $filters  (optional) Filters Array
     * @return  PedidoEntity
     */
    public function getByCustomer($customerId)
    {
        $pedidos = $this->adapter->get(sprintf('%s/customers/%s/pedidos?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $pedidos = json_decode($pedidos);

        $this->extractMeta($pedidos);

        return array_map(function($pedido)
        {
            return new PedidoEntity($pedido->pedido);
        }, $pedidos->data);
    }

    /**
     * Create new pedido
     *
     * @param   array  $data  Pedido Data
     * @return  PedidoEntity
     */
    public function create(array $data)
    {
        $pedido = $this->adapter->post(sprintf('%s/pedido.incluir.php', $this->endpoint), $data);

        $pedido = json_decode($pedido);

        return new PedidoEntity($pedido);
    }

    /**
     * Update Pedido By Id
     *
     * @param   string  $id    Pedido Id
     * @param   array   $data  Pedido Data
     * @return  PedidoEntity
     */
    public function update($id, array $data)
    {
        $pedido = $this->adapter->post(sprintf('%s/pedidos/%s', $this->endpoint, $id), $data);

        $pedido = json_decode($pedido);

        return new PedidoEntity($pedido);
    }

    /**
     * Delete Pedido By Id
     *
     * @param  string|int  $id  Pedido Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/pedidos/%s', $this->endpoint, $id));
    }
}