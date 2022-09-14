<?php

use MysqlSpatial\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\Point      location
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\LineString line
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
