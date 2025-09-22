<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function all(): mixed;

    /**
     * @param  integer  $id
     * @return mixed
     */
    public function find(int $id): mixed;

    /**
     * @param  array  $data
     * @return mixed
     */
    public function create(array $data): mixed;

    /**
     * @param  integer  $id
     * @param  array  $data
     * @return mixed
     */
    public function update(int $id, array $data): mixed;

    /**
     * @param  integer  $id
     * @return mixed
     */
    public function delete(int $id): mixed;
}
