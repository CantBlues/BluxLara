<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class JudgeRule extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'judge_rules';
    
}
