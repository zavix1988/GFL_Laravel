<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 07.06.2019
 * Time: 0:05
 */

class Genre extends Eloquent
{
    protected $table = 'Genre';
    protected $primaryKey = 'GenreId';
    public $timestamps = false;
}