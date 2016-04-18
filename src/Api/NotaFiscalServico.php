<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\NotaFiscalServico as NotaFiscalServicoEntity;

/**
 * NotaFiscalServico API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class NotaFiscalServico extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all nota_fiscal_servicos
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array
     */
    public function getAll(array $filters = [])
    {
        $nota_fiscal_servicos = $this->adapter->get(sprintf('%s/notas.servico.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $nota_fiscal_servicos = json_decode($nota_fiscal_servicos);

        $this->extractMeta($nota_fiscal_servicos);

        return array_map(function($nota_fiscal_servico)
        {
            return new NotaFiscalServicoEntity($nota_fiscal_servico);
        }, $nota_fiscal_servicos->data);
    }

    /**
     * Get NotaFiscalServico By Id
     *
     * @param   int  $id  NotaFiscalServico's Id
     * @return  NotaFiscalServicoEntity
     */
    public function getById($id)
    {
        $nota_fiscal_servico = $this->adapter->get(sprintf('%s/nota.servico.obter.php?id=%s', $this->endpoint, $id));

        $nota_fiscal_servico = json_decode($nota_fiscal_servico);

        return new NotaFiscalServicoEntity($nota_fiscal_servico->customer);
    }

    /**
     * Get NotaFiscalServicos By Customer Id
     *
     * @param   int    $id       Customer Id
     * @param   array  $filters  (optional) Filters Array
     * @return  array
     */
    public function getByCustomer($customerId, array $filters = [])
    {
        $nota_fiscal_servicos = $this->adapter->get(sprintf('%s/customers/%s/nota_fiscal_servicos?%s', $this->endpoint, $customerId, http_build_query($filters)));

        $nota_fiscal_servicos = json_decode($nota_fiscal_servicos);

        $this->extractMeta($nota_fiscal_servicos);

        return array_map(function($nota_fiscal_servico)
        {
            return new NotaFiscalServicoEntity($nota_fiscal_servico->nota_fiscal_servico);
        }, $nota_fiscal_servicos->data);
    }

    /**
     * Create New NotaFiscalServico
     *
     * @param   array  $data  NotaFiscalServico's Data
     * @return  NotaFiscalServicoEntity
     */
    public function create(array $data)
    {
        $nota_fiscal_servico = $this->adapter->post(sprintf('%s/nota.servico.incluir.php', $this->endpoint), $data);

        $nota_fiscal_servico = json_decode($nota_fiscal_servico);

        return new NotaFiscalServicoEntity($nota_fiscal_servico);
    }

    /**
     * Update NotaFiscalServico By Id
     *
     * @param   string  $id    NotaFiscalServico's Id
     * @param   array   $data  NotaFiscalServico's Data
     * @return  NotaFiscalServicoEntity
     */
    public function update($id, array $data)
    {
        $nota_fiscal_servico = $this->adapter->post(sprintf('%s/nota_fiscal_servicos/%s', $this->endpoint, $id), $data);

        $nota_fiscal_servico = json_decode($nota_fiscal_servico);

        return new NotaFiscalServicoEntity($nota_fiscal_servico);
    }

    /**
     * Delete NotaFiscalServico By Id
     *
     * @param  string|int  $id  NotaFiscalServico's Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/nota_fiscal_servicos/%s', $this->endpoint, $id));
    }
}