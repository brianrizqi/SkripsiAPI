<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $kriteria
 * @property int $bobot
 * @property string $created_at
 * @property string $updated_at
 * @property Data[] $datas
 */
class Criteria extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['kriteria', 'bobot', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datas()
    {
        return $this->hasMany('App\Data');
    }
}
