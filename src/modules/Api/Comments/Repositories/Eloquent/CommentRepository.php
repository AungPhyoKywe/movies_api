<?php

namespace Movies\Api\Comments\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Movies\Api\Comments\Models\Comment;
use Movies\Api\Comments\Repositories\CommentRepositoryInterface;
use Movies\Foundation\Repositories\Repository;

/**
 * class CommentRepository.
 */
class CommentRepository extends Repository implements CommentRepositoryInterface
{
    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getComments(array $params): Collection
    {
        return $this->model
            ->skip($params['offset'])
            ->take($params['limit'])
            ->latest()
            ->get();
    }

    /**
     * @param int $id
     * 
     * @return Comment|null
     */
    public function getCommentById(int $id): ?Comment
    {
        return $this->model->find($id);
    }

    /**
     * @param array $params
     * 
     * @return Comment
     */
    public function createComment(array $params): Comment
    {
        return $this->model->create($params);
    }

    /**
     * @param int $id
     * @param array $movies
     * 
     * @return bool
     */
    public function updateComment(int $id, array $movies): bool
    {
        return $this->model->where('id', $id)->update($movies);
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteCommentById(int $id): bool
    {
        return $this->model->where('id', $id)->delete();
    }

    protected function model()
    {
        return Comment::class;
    }

    protected function hasRelation(): string
    {
        return 'comments';
    }
}
