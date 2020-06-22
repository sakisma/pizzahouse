<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Pizza;

class PizzaController extends Controller 
{
	public function index()
	{
		$pizzas = Pizza::all();
		
		return view('index', ['pizzas' => $pizzas]);
	}

	public function show($id) {
		$pizza = Pizza::findOrFail($id);

		return view('show', ['pizza' => $pizza]);
	}
	public function create() {
		return view('create');
	}

	public function store() {
		$pizza = new Pizza();
		$pizza->name = request('name');
		$pizza->type = request('type');
		$pizza->sauce = request('sauce');
		$pizza->toppings = request('toppings');
		$pizza->save();
		return redirect('/')->with('msg', 'Thanks for ordering :)');
	}

	public function destroy($id) {
		$pizza = Pizza::findOrFail($id);
		$pizza->delete();
		return redirect('/pizzas');
	}
}
