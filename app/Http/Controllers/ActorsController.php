<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\ActorsViewModel;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller {
    public function index($page = 1) {
        abort_if($page > 500, 204);

        $popularActors = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular?page=' . $page)
            ->json()['results'];

        $actorsViewModel = new ActorsViewModel($popularActors, $page);

        return view('actors.index', $actorsViewModel);
    }

    public function show($id) {
        return view('actors.show');
    }
}
