<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsModel extends Model
{
    protected $table = "news";
    protected $primaryKey = 'id_news';
}
