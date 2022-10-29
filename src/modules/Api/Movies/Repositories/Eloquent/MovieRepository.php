<?php

namespace Movies\Api\Movies\Repositories\Eloquent;

use Movies\Api\Movies\Models\Movies;
use Illuminate\Database\Eloquent\Collection;
use Movies\Api\Movies\Repositories\MovieRepositoryInterface;
use Movies\Foundation\Repositories\Repository;

/**
 * class MovieRepository.
 */
class MovieRepository extends Repository implements MovieRepositoryInterface
{
    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getMovies(array $params): Collection
    {
        return $this->fetchRelationQuery()
            ->skip($params['offset'])
            ->take($params['limit'])
            ->latest()
            ->get();
    }

    /**
     * @param int $id
     * 
     * @return Movies|null
     */
    public function getMovieById(int $id): ?Movies
    {
        return $this->fetchRelationQuery()->find($id);
    }

    /**
     * @param array $params
     * 
     * @return Movies
     */
    public function createMovie(array $params): Movies
    {
        return $this->model->create($params);
    }

    /**
     * @param int $id
     * @param array $movies
     * 
     * @return bool
     */
    public function updateMovie(int $id, array $movies): bool
    {
        return $this->model->where('id', $id)->update($movies);
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteMovieById(int $id): bool
    {
        return $this->model->where('id', $id)->delete();
    }

    /**
     * @param int $id
     * @param array $params
     * 
     * @return bool
     */
    public function uploadImagePath(int $id, array $params): bool
    {
        return $this->model->where('id', $id)->update($params);
    }

    protected function model()
    {
        return Movies::class;
    }

    /**
     * @return string
     */
    protected function hasRelation(): string
    {
        return 'comments';
    }
}
