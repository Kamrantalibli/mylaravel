<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $table = 'articles'; //=> table name on database
    // protected $fillable = ['title','body','is_active','category_id','slug_name',]; //=> Only this colums are change
    protected $guarded = []; //=> all columns change except this column
    // protected $timestamps = false //=> (true) ? createt_at, updatet_at columns are change : createt_at, updatet_at not change 

}
