<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 06.06.2019
 * Time: 23:54
 */

class Artist extends Eloquent
{
    protected $table = 'Artist';
    protected $primaryKey = 'ArtistId';
    public $timestamps = false;

    public function albums()
    {
        return $this->hasMany('Album', 'ArtistId', 'ArtistId');
    }

}