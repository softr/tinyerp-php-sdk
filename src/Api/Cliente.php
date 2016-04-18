<?php
namespace Softr\TinyERP\Api;

// Entities
use Softr\TinyERP\Entity\Cliente as ClienteEntity;

/**
 * Cliente API Endpoint
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Cliente extends \Softr\TinyERP\Api\AbstractApi
{
    /**
     * Get all clientes
     *
     * @param   array  $filters  (optional) Filters Array
     * @return  array  Clientes Array
     */
    public function getAll(array $filters = [])
    {
        $clientes = $this->adapter->get(sprintf('%s/contatos.pesquisa.php?%s', $this->endpoint, http_build_query($filters)));

        $clientes = json_decode($clientes);

        $this->extractMeta($clientes);

        return array_map(function($cliente)
        {
            return new ClienteEntity($cliente->cliente);
        }, $clientes->data);
    }

    /**
     * Get Cliente By Id
     *
     * @param   int  $id  Cliente Id
     * @return  ClienteEntity
     */
    public function getById($id)
    {
        $cliente = $this->adapter->get(sprintf('%s/contato.obter.php?id=%s', $this->endpoint, $id));

        $cliente = json_decode($cliente);

        return new ClienteEntity($cliente);
    }

    /**
     * Get Cliente By Email
     *
     * @param   string  $email  Cliente Id
     * @return  ClienteEntity
     */
    public function getByEmail($email)
    {
        foreach($this->getAll(['name' => $email]) as $cliente)
        {
            if($cliente->email == $email)
            {
                return $cliente;
            }
        }

        return;
    }

    /**
     * Create new cliente
     *
     * @param   array  $data  Cliente Data
     * @return  ClienteEntity
     */
    public function create(array $data)
    {
        $cliente = $this->adapter->post(sprintf('%s/contato.incluir.php', $this->endpoint), $data);

        $cliente = json_decode($cliente);

        return new ClienteEntity($cliente);
    }

    /**
     * Update Cliente By Id
     *
     * @param   string  $id    Cliente Id
     * @param   array   $data  Cliente Data
     * @return  ClienteEntity
     */
    public function update($id, array $data)
    {
        $cliente = $this->adapter->post(sprintf('%s/contato.alterar.php', $this->endpoint, $id), $data);

        $cliente = json_decode($cliente);

        return new ClienteEntity($cliente);
    }

    /**
     * Delete Cliente By Id
     *
     * @param  string|int  $id  Cliente Id
     */
    public function delete($id)
    {
        $this->adapter->delete(sprintf('%s/clientes/%s', $this->endpoint, $id));
    }
}