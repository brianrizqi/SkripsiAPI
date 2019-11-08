<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $value
 * @property int $parameter
 * @property string $created_at
 * @property string $updated_at
 * @property Data[] $datas
 */
class Value extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['value', 'parameter', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datas()
    {
        return $this->hasMany('App\Data', 'parameter');
    }
}
