<?php

namespace App;

use App\Traits\Locale;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Page extends Model
{
    use Eloquence, Locale;

    protected $searchableColumns = ['title', 'content'];

}
