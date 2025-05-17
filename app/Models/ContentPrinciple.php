<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ContentPrinciple extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'content_principle';
    
}
