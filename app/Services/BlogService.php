<?php

namespace App\Services;

use App\Models\Blog;


class BlogService  extends BaseService
{

    public function __construct(private Blog $blog)
    {
        parent::__construct($blog);
    }

    public function index()
    {
        return Blog::with(['category'])->get();
    }
}
