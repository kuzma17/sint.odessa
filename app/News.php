<?php

namespace App;

use App\Traits\Locale;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class News extends Model
{
    use Eloquence, Locale;

    protected $table = 'news';
    protected $searchableColumns = ['title_ru','title_ua','content_ru','content_ua'];

    public static function count(){
        return Settings::find(1)->count_news;
    }

    public function scopeActive($query){
        return $query->where('published', 1);
    }

}
