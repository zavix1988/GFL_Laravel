<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 07.06.2019
 * Time: 0:04
 */

class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'TrackId';
    public $timestamps = false;

    public function genres()
    {
        return $this->hasMany('Genre', 'GenreId', 'GenreId');
    }

    public function album()
    {
        return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
    }
}