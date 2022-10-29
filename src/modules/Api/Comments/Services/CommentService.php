<?php


namespace Movies\Api\Comments\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Movies\Api\Comments\Models\Comment;
use Movies\Api\Comments\Repositories\CommentRepositoryInterface;
use Movies\Api\Comments\Repositories\Eloquent\CommentRepository;


class CommentService
{
    /**
     * @var Comment
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
     * @var CommentRepository
     */
    protected CommentRepository $commentRepository;

    /**
     * CommentService Constructor
     * @param CommentRepositoryInterface $commentRepository
     */
    public function __construct(
        CommentRepositoryInterface $commentRepository
    ) {
        $this->commentRepository = $commentRepository;
    }

    /**
     * @param array $params
     *
     * @return Collection
     */
    public function getAllComments(array $params): Collection
    {
        $params['limit'] = isset($params['limit']) ? $params['limit'] : $this->limit;
        $params['offset'] = isset($params['offset']) ? $params['offset'] : $this->offset;
        return $this->commentRepository->getComments($params);
    }

    /**
     * @param array $params
     * 
     * @return Comment
     */
    public function createComment(array $params): Comment
    {
        try {
            $this->commentRepository->beginTransaction();
            $comments = $this->commentRepository->createComment($params);
            $this->commentRepository->commit();
        } catch (\Exception $e) {
            Log::error("create Movie", ['e' => $e->getMessage()]);
            $this->commentRepository->rollback();
            throw new \RuntimeException('Inserting comments data to DB was failed!');
        }

        return $comments;
    }

    /**
     * @param int $id
     * 
     * @return Comment|null
     */
    public function getCommentById(int $id): ?Comment
    {
        return $this->commentRepository->getCommentById($id);
    }

    /**
     * @param array $params
     * 
     * @return bool
     */
    public function updateCommentById(int $id, array $params): bool
    {
        try {
            $this->commentRepository->beginTransaction();
            $comments = $this->commentRepository->updateComment($id, $params);
            $this->commentRepository->commit();
        } catch (\Exception $e) {
            Log::error("Update Movie", ['e' => $e->getMessage()]);
            $this->commentRepository->rollback();
            throw new \RuntimeException('Updating comment data to DB was failed!');
        }

        return $comments;
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteCommentById(int $id): bool
    {
        try {
            $this->commentRepository->beginTransaction();
            $comments = $this->commentRepository->deleteCommentById($id);
            $this->commentRepository->commit();
        } catch (\Exception $e) {
            Log::error("Delete comment", ['e' => $e->getMessage()]);
            $this->commentRepository->rollback();
            throw new \RuntimeException('Deleting comments data to DB was failed!');
        }

        return $comments;
    }
}
