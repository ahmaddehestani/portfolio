<?php

namespace App\Services;

use App\Models\Skill;


class SkillService  extends BaseService
{

    public function __construct(private Skill $skill)
    {
        parent::__construct($this->skill);
    }
}
