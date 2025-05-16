<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class BoostTemplate extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'boost_templates';
    
}
