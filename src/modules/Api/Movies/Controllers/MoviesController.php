<?php

namespace Movies\Api\Movies\Controllers;

use Illuminate\Http\Response;
use Movies\Api\BaseController;
use Movies\Api\Movies\Resources\MovieResource;
use Movies\Api\Movies\Services\MovieService;
use Movies\Api\Movies\Validation\CreateMovieRequest;
use Movies\Api\Movies\Validation\FetchMoviesRequest;
use Movies\Api\Movies\Validation\UpdateMoviesRequest;
use Movies\Api\Movies\Validation\UploadImageRequest;

class MoviesController extends BaseController
{
    /**
     * @var DEFAULT_LIMIT
     */
    const DEFAULT_LIMIT = 30;

    /**
     * @var DEFAULT_OFFSET
     */
    const DEFAULT_OFFSET = 0;

    public function __construct(
        MovieService $movieService,

    ) {
        $this->movieService = $movieService;
        $this->startTime = microtime(true);
    }
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllMovies(FetchMoviesRequest $request)
    {
        $inputs = $request->only('limit', 'offset');

        $this->limit = isset($inputs['limit']) ? $inputs['limit'] :  self::DEFAULT_LIMIT;
        $this->offset = isset($inputs['offset']) ? $inputs['offset'] :  self::DEFAULT_OFFSET;

        $movies = $this->movieService->getAllMovies($inputs);

        $this->total = $movies->count();

        return $this->sendResponse(MovieResource::collection($movies), Response::HTTP_OK);
    }
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createMovie(CreateMovieRequest $request)
    {
        $movies = $this->movieService->createMovie($request->except('image_path'));

        return $this->sendResponse(new MovieResource($movies), Response::HTTP_CREATED);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMovieById(int $id)
    {
        $movies = $this->movieService->getMovieById($id);

        if (is_null($movies)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        return $this->sendResponse(new MovieResource($movies), Response::HTTP_OK);
    }

    /**
     * @param  UpdateProductRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMovieById(int $id, UpdateMoviesRequest $request)
    {
        $movies = $this->movieService->getMovieById($id);

        if (is_null($movies)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        $updated = $this->movieService->updateMovieById($id, $request->all());

        return $this->sendResponse(['updated' => (int)$updated], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMovieById(int $id)
    {
        $movies = $this->movieService->getMovieById($id);

        if (is_null($movies)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }
        $deleted = $this->movieService->deleteMovieById($id);

        return $this->sendResponse(['deleted' => (int)$deleted], Response::HTTP_CREATED);
    }

    /**
     * @param int $id
     * @param UploadImageRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function uploadMovieImage(int $id, UploadImageRequest $request)
    {
        $movies = $this->movieService->getMovieById($id);

        if (is_null($movies)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        $image = $request->file('image_path');

        $uploaded = $this->movieService->uploadMovieImage($id, $movies, $image);

        return $this->sendResponse(['uploaded' => (int)$uploaded], Response::HTTP_CREATED);
    }
}
