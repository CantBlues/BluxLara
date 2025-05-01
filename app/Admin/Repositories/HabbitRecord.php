<?php

namespace App\Admin\Repositories;

use App\Models\HabbitRecord as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class HabbitRecord extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
