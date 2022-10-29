<?php

namespace Movies\Foundation\Repositories;


interface RepositoryInterface
{
    /**
     * Generates the mapping eloquent class to private field.
     * @return Model
     * @throws \Cardinal\Laravel\Api\Exception\DbErrorException
     */
    public function make();

    /**
     * Begin DB transaction.
     */
    public function beginTransaction(): void;

    /**
     * DB transaction rollback.
     */
    public function rollback(): void;

    /**
     * DB transaction commit.
     */
    public function commit(): void;
}
