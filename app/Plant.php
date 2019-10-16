<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $user_id
 * @property string $name
 * @property int $weather
 * @property int $rainfall
 * @property int $soil_depth
 * @property int $soil_ph
 * @property int $erosion
 * @property int $peat
 * @property int $drainage
 * @property int $plant_rotation
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Plant extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'weather', 'rainfall', 'soil_depth', 'soil_ph', 'erosion', 'peat', 'drainage', 'plant_rotation', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
