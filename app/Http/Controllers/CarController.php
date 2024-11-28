<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function criar(Request $request) {
        $car = new Car;
        $car->name = $request->name;
        $car->ano = $request->ano;
        $car->chassi = $request->chassi;
        $car->placa = $request->placa;

        $car->save();
        return redirect('/listar_carros');
    }

    public function listar() {
        $cars = Car::all();

        return view("cars", ["cars"=>$cars]);
    }
    public function formCriarCarro() {
        return view("cadastro_carro");
    }

    public function deletar($id) {
        $car = new Car;
        $car->find($id)->delete();
        return redirect('/listar_carros');
    }

    public function formEditarCarro($id) {
        $car = Car::find($id);

        return view('editar_carro', ['car'=>$car]);
    }

    public function editar(Request $request) {
        Car::where('id', $request->id) -> update([
            'name' => $request->name,
            'ano' => $request->ano,
            'chassi' => $request->chassi,
            'placa' => $request->placa,
        ]);

        return redirect('/listar_carros');
    }
}