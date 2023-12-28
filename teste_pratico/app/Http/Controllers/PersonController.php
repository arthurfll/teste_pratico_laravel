<?php

namespace App\Http\Controllers;

use App\Models\PersonModel;
use App\Models\CarModel;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class PersonController extends Controller {

    public PersonModel $cliente;

    public function __construct(){
        $this->cliente = new PersonModel();
    }

    
    public CarModel $carro;


    public function index() {
        $chart_options = [
            'chart_title' => 'Clientes por Gênero',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\PersonModel',
            'group_by_field' => 'genero',
            'chart_type' => 'pie',
        ];
     
        $chart1 = new LaravelChart($chart_options);
        $clientes = $this->cliente->get();
     
        return view('/pessoa/read_person',[
            'clientes' => $clientes,
            'chart1' => $chart1,
        ]);
     }


    public function create(){
        return view('pessoa.create_person');
    }

    public function store(Request $request){
        $created = $this->cliente->create([

            'nome'=>$request->input('nome'),
            'sobrenome'=>$request->input('sobrenome'),
            'slug'=>$request->input('slug'),
            'genero'=>$request->input('genero'),

        ]);

        if ($created) {
            return redirect()->back();
        }
    }

    public function show(PersonModel $cliente){
        $cars = $cliente->cars()->where('slug_dono', $cliente->slug)->get();

        return view('pessoa.show_person',[
            'cliente'=>$cliente,'cars' => $cars
        ]);
    }

    public function edit(string $id){
        $cliente = $this->cliente->find($id);
        return view('pessoa.update_person',['cliente'=>$cliente]);
    }

    public function update(Request $request, string $id){
        $updated = $this->cliente->where('id',$id)->update($request->except(['_token','_method']));
        if($updated) {
            return redirect()->back();
        };
    }

    public function destroy(string $id){
        $this->cliente->where('id',$id)->delete();
        return redirect()->route('clientes.index');
    }
}
