<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $plant_id
 * @property int $criteria_id
 * @property int $parameter
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 * @property Plant $plant
 * @property Value $values
 * @property Criteria $criteria
 */
class Data extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['plant_id', 'criteria_id', 'parameter', 'value', 'created_at', 'updated_at'];

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
    public function value()
    {
        return $this->belongsTo('App\Value', 'parameter');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function criteria()
    {
        return $this->belongsTo('App\Criteria');
    }
}
