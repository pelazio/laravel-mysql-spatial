<?php

use MysqlSpatial\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeometryModel.
 *
 * @property int                                          id
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\Point      location
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\LineString line
 * @property \MysqlSpatial\LaravelMysqlSpatial\Types\LineString shape
 */
class GeometryModel extends Model
{
    use SpatialTrait;

    protected $table = 'geometry';

    protected $spatialFields = ['location', 'line', 'multi_geometries'];
}
