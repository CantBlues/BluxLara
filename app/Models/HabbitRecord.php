<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HabbitRecord extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'habbit_records';
    
}
