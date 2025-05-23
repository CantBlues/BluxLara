<?php

namespace App\Admin\Repositories;

use App\Models\ContentPrinciple as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ContentPrinciple extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
