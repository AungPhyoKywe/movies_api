<?php


namespace Movies\Api\Movies\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Movies\Api\Movies\Models\Movies;
use Movies\Api\Movies\Repositories\Eloquent\MovieRepository;
use Movies\Api\Movies\Repositories\MovieRepositoryInterface;

class MovieService
{
    /**
     * @var Movies
     */
    protected $model;

    /**
     * @var limit
     */
    protected int $limit = 30;

    /**
     * @var offset
     */
    protected int $offset = 0;

    /**
     * @var MovieRepository
     */
    protected MovieRepository $movieRepository;


    /**
     * MovieService Constructor
     * @param MovieRepositoryInterface $movieRepository
     */
    public function __construct(
        MovieRepositoryInterface $movieRepository
    ) {
        $this->movieRepository = $movieRepository;
    }

    /**
     * @param array $params
     *
     * @return Collection
     */
    public function getAllMovies(array $params): Collection
    {
        $params['limit'] = isset($params['limit']) ? $params['limit'] : $this->limit;
        $params['offset'] = isset($params['offset']) ? $params['offset'] : $this->offset;
        return $this->movieRepository->getMovies($params);
    }

    /**
     * @param array $params
     * 
     * @return Movies
     */
    public function createMovie(array $params): Movies
    {
        try {
            $this->movieRepository->beginTransaction();
            $movies = $this->movieRepository->createMovie($params);
            $this->movieRepository->commit();
        } catch (\Exception $e) {
            Log::error("create Movie", ['e' => $e->getMessage()]);
            $this->movieRepository->rollback();
            throw new \RuntimeException('Inserting movie data to DB was failed!');
        }

        return $movies;
    }

    /**
     * @param int $id
     * 
     * @return Movies|null
     */
    public function getMovieById(int $id): ?Movies
    {
        return $this->movieRepository->getMovieById($id);
    }

    /**
     * @param array $params
     * 
     * @return bool
     */
    public function updateMovieById(int $id, array $params): bool
    {
        try {
            $this->movieRepository->beginTransaction();
            $movies = $this->movieRepository->updateMovie($id, $params);
            $this->movieRepository->commit();
        } catch (\Exception $e) {
            Log::error("Update Movie", ['e' => $e->getMessage()]);
            $this->movieRepository->rollback();
            throw new \RuntimeException('Inserting movie data to DB was failed!');
        }

        return $movies;
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteMovieById(int $id): bool
    {
        try {
            $this->movieRepository->beginTransaction();
            $movies = $this->movieRepository->deleteMovieById($id);
            $this->movieRepository->commit();
        } catch (\Exception $e) {
            Log::error("Delete movies", ['e' => $e->getMessage()]);
            $this->movieRepository->rollback();
            throw new \RuntimeException('Deleting movies data to DB was failed!');
        }

        return $movies;
    }

    /**
     * @param int $id
     * @param Movies $movies
     * @param UploadedFile $file
     * 
     * @return bool
     */
    public function uploadMovieImage(int $id, Movies $movies, UploadedFile $file): bool
    {
        list($originaleName, $uploadFilePath, $uploadedFileName) = $this->getFileNames($movies, $file);

        if (!$this->saveFile($uploadFilePath, $file, $uploadedFileName)) {
            throw new \RuntimeException("Uploading file to the disk was failed!");
        }

        $uploaded = $this->movieRepository->uploadImagePath($id, ['image_path' => $uploadFilePath . $uploadedFileName]);

        return $uploaded;
    }

    /**
     * @param $filePath
     * @param UploadedFile $file
     * @return bool
     */
    private function saveFile(string $filePath, UploadedFile $file, string $uploadedFileName): bool
    {
        return Storage::putFileAs($filePath, $file, $uploadedFileName);
    }

    /**
     * @param Movies $movies
     * @param UploadedFile $file
     * @return array
     */
    private function getFileNames(Movies $movies, UploadedFile $file): array
    {
        $uploadedFileName = \time() . "." . $file->getClientOriginalExtension();
        $originalName = $file->getClientOriginalName();
        $uploadFilePath = 'movies/' . $movies->id;

        return [
            $originalName,
            $uploadFilePath,
            $uploadedFileName
        ];
    }
}
