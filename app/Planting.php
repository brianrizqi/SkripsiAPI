<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $area_id
 * @property int $plant_id
 * @property int $status
 * @property float $profit
 * @property float $loss
 * @property string $created_at
 * @property string $updated_at
 * @property Plant $plant
 * @property Area $area
 */
class Planting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['area_id', 'plant_id', 'status', 'profit', 'loss', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plant()
    {
        return $this->belongsTo('App\Plant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
