<?php

namespace Movies\Foundation\Repositories;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;

abstract class Repository implements RepositoryInterface
{
    /**
     * DI Container.
     *
     * @var Application
     */
    protected $app;

    /**
     * Mapping active record.
     *
     * @var Eloquent
     */
    protected $model;

    public function __construct(Application $application)
    {
        $this->app = $application;
        $this->make();
    }

    /**
     * Generates the mapping eloquent class to private field.
     *
     * @return Model|mixed
     *
     * @throws DbErrorException
     */
    public function make(): Eloquent
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Eloquent) {
            throw new \Exception("The {$this->model()} class must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     *
     * @return mixed
     */
    protected function fetchRelationQuery()
    {
        $relation = $this->hasRelation();

        $query = $this->model ? $this->model->with($relation) : $this->model->query();

        return $query;
    }

    /**
     * Begin DB transaction.
     */
    public function beginTransaction(): void
    {
        DB::beginTransaction();
    }

    /**
     * DB transaction rollback.
     */
    public function rollback(): void
    {
        DB::rollback();
    }

    /**
     * DB transaction commit.
     */
    public function commit(): void
    {
        DB::commit();
    }


    abstract protected function model();

    abstract protected function hasRelation(): string;
}
