<?php

namespace App\Http\Controllers;


//use DB;
use App\Card;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        //$card = Card::find($id);
        //return $card;
        // $card = Card::find($id);
        return view('cards.show', compact('card'));

    }
}
