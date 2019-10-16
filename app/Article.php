<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $article
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'article', 'img', 'created_at', 'updated_at', 'deleted_at'];

}
