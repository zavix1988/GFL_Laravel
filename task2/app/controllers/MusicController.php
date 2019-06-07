<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 07.06.2019
 * Time: 0:09
 */

class MusicController extends BaseController
{
    public function index()
    {
        $artists = Artist::paginate(15);
        return View::make('index', ['artists' => $artists]);
    }

    public function artist($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->albums;

        return View::make('artist', ['name' => $artist->Name, 'albums' => $albums]);
    }

    public function album($id)
    {
        $album = Album::find($id);
        $artist = $album->artist;
        $tracks = $album->tracks;
        return View::make('album', ['artist' => $artist, 'album' => $album->Title, 'tracks' => $tracks]);
    }

    public function track($id)
    {
        $track = Track::find($id);
        $genres = $track->genres;
        $album = $track->album;
        $artist = $track->album->artist->Name;

        return View::make('track', ['track' => $track, 'artist' => $artist, 'album' => $album, 'genres' => $genres]);
    }
}