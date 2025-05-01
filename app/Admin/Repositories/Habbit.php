<?php

namespace App\Admin\Repositories;

use App\Models\Habbit as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Habbit extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
