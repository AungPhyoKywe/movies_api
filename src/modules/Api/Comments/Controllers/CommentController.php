<?php

namespace Movies\Api\Comments\Controllers;

use Illuminate\Http\Response;
use Movies\Api\BaseController;
use Movies\Api\Comments\Resources\CommentResource;
use Movies\Api\Comments\Services\CommentService;
use Movies\Api\Comments\Validation\CreateCommentRequest;
use Movies\Api\Comments\Validation\FetchCommentRequest;
use Movies\Api\Movies\Repositories\Eloquent\MovieRepository;
use Movies\Api\Movies\Repositories\MovieRepositoryInterface;
use Movies\Api\Comments\Validation\UpdateCommentRequest;

class CommentController extends BaseController
{
    /**
     * @var DEFAULT_LIMIT
     */
    const DEFAULT_LIMIT = 30;

    /**
     * @var DEFAULT_OFFSET
     */
    const DEFAULT_OFFSET = 0;

    /**
     * @var MovieRepository
     */
    protected MovieRepository $movieRepository;

    /**
     * @var CommentService
     */
    protected CommentService $commentService;

    /**
     * CommentService Constructor
     * @param MovieRepositoryInterface $movieRepository
     */

    public function __construct(
        CommentService $commentService,
        MovieRepositoryInterface $movieRepository

    ) {
        $this->movieRepository = $movieRepository;
        $this->commentService = $commentService;
        $this->startTime = microtime(true);
    }
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllComments(FetchCommentRequest $request)
    {
        $inputs = $request->only('limit', 'offset');

        $this->limit = isset($inputs['limit']) ? $inputs['limit'] :  self::DEFAULT_LIMIT;
        $this->offset = isset($inputs['offset']) ? $inputs['offset'] :  self::DEFAULT_OFFSET;

        $comments = $this->commentService->getAllComments($inputs);

        $this->total = $comments->count();

        return $this->sendResponse(CommentResource::collection($comments), Response::HTTP_OK);
    }
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createComment(CreateCommentRequest $request)
    {
        $movies = $this->movieRepository->getMovieById((int)$request['movie_id']);

        if (is_null($movies)) {
            return $this->sendError('The resource of the given movie_id was not found.', Response::HTTP_NOT_FOUND);
        }

        $comments = $this->commentService->createComment($request->all());

        return $this->sendResponse(new CommentResource($comments), Response::HTTP_CREATED);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCommentById(int $id)
    {
        $comments = $this->commentService->getCommentById($id);

        if (is_null($comments)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        return $this->sendResponse(new CommentResource($comments), Response::HTTP_OK);
    }

    /**
     * @param  UpdateCommentRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCommentById(int $id, UpdateCommentRequest $request)
    {
        $comments = $this->commentService->getCommentById($id);
        $movies = $this->movieRepository->getMovieById((int)$request['movie_id']);

        if (is_null($comments) || is_null($movies)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }

        $updated = $this->commentService->updateCommentById($id, $request->all());

        return $this->sendResponse(['updated' => (int)$updated], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCommentById(int $id)
    {
        $comments = $this->commentService->getCommentById($id);

        if (is_null($comments)) {
            return $this->sendError('The resource of the given ID was not found.', Response::HTTP_NOT_FOUND);
        }
        $deleted = $this->commentService->deleteCommentById($id);

        return $this->sendResponse(['deleted' => (int)$deleted], Response::HTTP_CREATED);
    }
}
