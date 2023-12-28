<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\RevisionModel;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class CarController extends Controller {

    public CarModel $carro;

    public function __construct(){
        $this->carro = new CarModel();
    }


    public function index() {
        $carros = $this->carro->get();
       
        return view('/carro/read_car',[
            'carros' => $carros,
            
        ]);
    }

    public function create() {
        return view('carro.create_car');
    }

    public function store(Request $request) {
        $created = $this->carro->create([

            'nome'=>$request->input('nome'),
            'marca'=>$request->input('marca'),
            'cor'=>$request->input('cor'),
            'ano_lancamento'=>$request->input('ano_lancamento'),
            'slug_dono'=>$request->input('slug_dono'),
            'ultima_revisao'=>"nenhuma revisão encontrada",
        ]);

        if ($created) {
            return redirect()->back();
        }
    }

    public function show(CarModel $carro) {
        $revisoes = RevisionModel::where('car_id', $carro->id)->get();
        return view('carro.show_car',[
            'carro'=>$carro,
            'revisoes' => $revisoes
        ]);

    }

    public function edit(string $id) {
        $carro = $this->carro->find($id);
        
        return view('carro.update_car',['carro'=>$carro]);
    }

    public function update(Request $request, string $id) {
        $updated = $this->carro->where('id',$id)->update($request->except(['_token','_method']));
        if($updated) {
            return redirect()->back();
        };
    }

    public function destroy(string $id) {
        $this->carro->where('id',$id)->delete();
        return redirect()->route('carros.index');
    }
}
