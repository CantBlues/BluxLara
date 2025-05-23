<?php

namespace App\Admin\Repositories;

use App\Models\BoostTemplate as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BoostTemplate extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
