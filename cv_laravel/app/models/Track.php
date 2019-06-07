<?php
class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'TrackID';
    public $timestamps = false;

    public function album()
    {
        return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
    }
}
