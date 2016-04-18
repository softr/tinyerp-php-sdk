<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\ContaReceber as PaymentEntity;

/**
 * ContaReceber API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class ContaReceber extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all conta_recebers
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Payments Array
     */
    public function getAll(array $filters = [])
    {
        $conta_recebers = $this->adapter->get(sprintf('%s/contas.receber.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $conta_recebers = json_decode($conta_recebers);

        $this->extractMeta($conta_recebers);

        return array_map(function($conta_receber)
        {
            return new PaymentEntity($conta_receber);
        }, $conta_recebers->data);
    }

    /**
     * Get ContaReceber By Id
     *
     * @param   int  $id  ContaReceber Id
     * @return  PaymentEntity
     */
    public function getById($id)
    {
        $conta_receber = $this->adapter->get(sprintf('%s/conta.receber.obter.php?id=%s', $this->endpoint, $id));

        $conta_receber = json_decode($conta_receber);

        return new PaymentEntity($conta_receber);
    }

    /**
     * Get Payments By Customer Id
     *
     * @param   int    $customerId  Customer Id
     * @param   array  $filters     (optional) Filters Array
     * @return  PaymentEntity
     */
    public function getByCustomer($customerId, array $filters = [])
    {
        $conta_recebers = $this->adapter->get(sprintf('%s/customers/%s/conta_recebers?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $conta_recebers = json_decode($conta_recebers);

        $this->extractMeta($conta_recebers);

        return array_map(function($conta_receber)
        {
            return new PaymentEntity($conta_receber);
        }, $conta_recebers->data);
    }

    /**
     * Get Payments By Subscription Id
     *
     * @param   int    $subscriptionId  Subscription Id
     * @param   array  $filters         (optional) Filters Array
     * @return  PaymentEntity
     */
    public function getBySubscription($subscriptionId)
    {
        $conta_recebers = $this->adapter->get(sprintf('%s/subscriptions/%s/conta_recebers?%s', $this->endpoint, $subscriptionId, http_build_query($filters)));

        $conta_recebers = json_decode($conta_recebers);

        $this->extractMeta($conta_recebers);

        return array_map(function($conta_receber)
        {
            return new PaymentEntity($conta_receber);
        }, $conta_recebers->data);
    }

    /**
     * Create New ContaReceber
     *
     * @param   array  $data  ContaReceber Data
     * @return  PaymentEntity
     */
    public function create(array $data)
    {
        $conta_receber = $this->adapter->post(sprintf('%s/conta.receber.incluir.php', $this->endpoint), $data);

        $conta_receber = json_decode($conta_receber);

        return new PaymentEntity($conta_receber);
    }

    /**
     * Update ContaReceber By Id
     *
     * @param   string  $id    ContaReceber Id
     * @param   array   $data  ContaReceber Data
     * @return  PaymentEntity
     */
    public function update($id, array $data)
    {
        $conta_receber = $this->adapter->post(sprintf('%s/conta_recebers/%s', $this->endpoint, $id), $data);

        $conta_receber = json_decode($conta_receber);

        return new PaymentEntity($conta_receber);
    }

    /**
     * Delete ContaReceber By Id
     *
     * @param  string|int  $id  ContaReceber Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/conta_recebers/%s', $this->endpoint, $id));
    }
}