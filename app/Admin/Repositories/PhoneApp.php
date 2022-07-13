<?php

namespace App\Admin\Repositories;

use App\Models\PhoneApp as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PhoneApp extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
