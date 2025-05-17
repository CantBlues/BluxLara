<?php

namespace App\Admin\Repositories;

use App\Models\JudgeRule as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class JudgeRule extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
