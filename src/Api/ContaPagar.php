<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\ContaPagar as PaymentEntity;

/**
 * ContaPagar API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class ContaPagar extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all conta_pagars
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Payments Array
     */
    public function getAll(array $filters = [])
    {
        $conta_pagars = $this->adapter->get(sprintf('%s/contas.pagar.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $conta_pagars = json_decode($conta_pagars);

        $this->extractMeta($conta_pagars);

        return array_map(function($conta_pagar)
        {
            return new PaymentEntity($conta_pagar);
        }, $conta_pagars->data);
    }

    /**
     * Get ContaPagar By Id
     *
     * @param   int  $id  ContaPagar Id
     * @return  PaymentEntity
     */
    public function getById($id)
    {
        $conta_pagar = $this->adapter->get(sprintf('%s/conta.pagar.obter.php?id=%s', $this->endpoint, $id));

        $conta_pagar = json_decode($conta_pagar);

        return new PaymentEntity($conta_pagar);
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
        $conta_pagars = $this->adapter->get(sprintf('%s/customers/%s/conta_pagars?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $conta_pagars = json_decode($conta_pagars);

        $this->extractMeta($conta_pagars);

        return array_map(function($conta_pagar)
        {
            return new PaymentEntity($conta_pagar);
        }, $conta_pagars->data);
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
        $conta_pagars = $this->adapter->get(sprintf('%s/subscriptions/%s/conta_pagars?%s', $this->endpoint, $subscriptionId, http_build_query($filters)));

        $conta_pagars = json_decode($conta_pagars);

        $this->extractMeta($conta_pagars);

        return array_map(function($conta_pagar)
        {
            return new PaymentEntity($conta_pagar);
        }, $conta_pagars->data);
    }

    /**
     * Create New ContaPagar
     *
     * @param   array  $data  ContaPagar Data
     * @return  PaymentEntity
     */
    public function create(array $data)
    {
        $conta_pagar = $this->adapter->post(sprintf('%s/conta.pagar.incluir.php', $this->endpoint), $data);

        $conta_pagar = json_decode($conta_pagar);

        return new PaymentEntity($conta_pagar);
    }

    /**
     * Update ContaPagar By Id
     *
     * @param   string  $id    ContaPagar Id
     * @param   array   $data  ContaPagar Data
     * @return  PaymentEntity
     */
    public function update($id, array $data)
    {
        $conta_pagar = $this->adapter->post(sprintf('%s/conta_pagars/%s', $this->endpoint, $id), $data);

        $conta_pagar = json_decode($conta_pagar);

        return new PaymentEntity($conta_pagar);
    }

    /**
     * Delete ContaPagar By Id
     *
     * @param  string|int  $id  ContaPagar Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/conta_pagars/%s', $this->endpoint, $id));
    }
}