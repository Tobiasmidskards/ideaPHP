<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*

Følger MVC designpattern,
Istedet for at routes/web.php, håndterer alle routes, bruges en controller til at holde styr på en gruppering.
Denne klasse har altså ansvaret for de forskellige undersider, når der navigeres rundt på siden. 

Herunder kan der også parses data videre til de forskellige views.

Hvis web.php, også skulle håndtere data, ville der potentielt være interferrens mellem følsomme oplysninger.
Derfor laves der en controller til at holde styr på et område.

Der nedarves fra Controller, så vi kan håndtere requests (??).

*/

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
}
