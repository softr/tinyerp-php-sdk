<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\NotaFiscal as NotaFiscalEntity;

/**
 * NotaFiscal API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class NotaFiscal extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all nota_fiscals
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array
     */
    public function getAll(array $filters = [])
    {
        $nota_fiscals = $this->adapter->get(sprintf('%s/notas.fiscais.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $nota_fiscals = json_decode($nota_fiscals);

        $this->extractMeta($nota_fiscals);

        return array_map(function($nota_fiscal)
        {
            return new NotaFiscalEntity($nota_fiscal);
        }, $nota_fiscals->data);
    }

    /**
     * Get NotaFiscal By Id
     *
     * @param   int  $id  NotaFiscal's Id
     * @return  NotaFiscalEntity
     */
    public function getById($id)
    {
        $nota_fiscal = $this->adapter->get(sprintf('%s/nota.fiscal.obter.php?id=%s', $this->endpoint, $id));

        $nota_fiscal = json_decode($nota_fiscal);

        return new NotaFiscalEntity($nota_fiscal->customer);
    }

    /**
     * Get NotaFiscals By Customer Id
     *
     * @param   int    $id       Customer Id
     * @param   array  $filters  (optional) Filters Array
     * @return  array
     */
    public function getByCustomer($customerId, array $filters = [])
    {
        $nota_fiscals = $this->adapter->get(sprintf('%s/customers/%s/nota_fiscals?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $nota_fiscals = json_decode($nota_fiscals);

        $this->extractMeta($nota_fiscals);

        return array_map(function($nota_fiscal)
        {
            return new NotaFiscalEntity($nota_fiscal->nota_fiscal);
        }, $nota_fiscals->data);
    }

    /**
     * Create New NotaFiscal
     *
     * @param   array  $data  NotaFiscal's Data
     * @return  NotaFiscalEntity
     */
    public function create(array $data)
    {
        $nota_fiscal = $this->adapter->post(sprintf('%s/nota.fiscal.incluir.php', $this->endpoint), $data);

        $nota_fiscal = json_decode($nota_fiscal);

        return new NotaFiscalEntity($nota_fiscal);
    }

    /**
     * Update NotaFiscal By Id
     *
     * @param   string  $id    NotaFiscal's Id
     * @param   array   $data  NotaFiscal's Data
     * @return  NotaFiscalEntity
     */
    public function update($id, array $data)
    {
        $nota_fiscal = $this->adapter->post(sprintf('%s/nota_fiscals/%s', $this->endpoint, $id), $data);

        $nota_fiscal = json_decode($nota_fiscal);

        return new NotaFiscalEntity($nota_fiscal);
    }

    /**
     * Delete NotaFiscal By Id
     *
     * @param  string|int  $id  NotaFiscal's Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/nota_fiscals/%s', $this->endpoint, $id));
    }
}