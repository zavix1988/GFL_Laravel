<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 07.06.2019
 * Time: 0:04
 */

class Album extends Eloquent
{
    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';
    public $timestamps = false;

    public function tracks()
    {
        return $this->hasMany('Track', 'AlbumId', 'AlbumId');
    }

    public function artist()
    {
        return $this->belongsTo('Artist', 'ArtistId', 'ArtistId');
    }
}