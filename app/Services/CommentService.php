<?php

namespace App\Services;

use App\Models\Comment;


class CommentService  extends BaseService
{

    public function __construct(private Comment $comment)
    {
        parent::__construct($comment);
    }
}
