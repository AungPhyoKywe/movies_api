<?php

namespace Movies\Api\Movies\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Movies\Api\Movies\Models\Movies;

interface MovieRepositoryInterface
{
    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getMovies(array $params): Collection;

    /**
     * @param int $id
     * 
     * @return Movies|null
     */
    public function getMovieById(int $id): ?Movies;

    /**
     * @param array $params
     * 
     * @return Movies
     */
    public function createMovie(array $params): Movies;

    /**
     * @param int $id
     * @param array $params
     * 
     * @return bool
     */
    public function updateMovie(int $id, array $params): bool;

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteMovieById(int $id): bool;

    /**
     * @param int $id
     * @param array $params
     * 
     * @return bool
     */
    public function uploadImagePath(int $id, array $params): bool;
}
