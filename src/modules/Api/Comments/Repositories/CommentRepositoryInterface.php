<?php

namespace Movies\Api\Comments\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Movies\Api\Comments\Models\Comment;

interface CommentRepositoryInterface
{
    /**
     * @param array $params
     * 
     * @return Collection
     */
    public function getComments(array $params): Collection;

    /**
     * @param int $id
     * 
     * @return Comment|null
     */
    public function getCommentById(int $id): ?Comment;

    /**
     * @param array $params
     * 
     * @return Comment
     */
    public function createComment(array $params): Comment;

    /**
     * @param int $id
     * @param array $params
     * 
     * @return bool
     */
    public function updateComment(int $id, array $params): bool;

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function deleteCommentById(int $id): bool;
}
