<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RevisionModel;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class RevisionController extends Controller {

    public RevisionModel $revisao;

    public function __construct(){
        $this->revisao = new RevisionModel();
    }

    
    public function index() {
        $revisoes = $this->revisao->get();
     
        return view('/revisao/read_revision',[
            'revisoes' => $revisoes
        ]);
    }

    public function create() {
        return view('revisao.create_revision');
    }

    public function store(Request $request) {
        $created = $this->revisao->create([
            'car_id'=>$request->input('car_id'),
        ]);
        if ($created) {
            return redirect()->back();
        }
    }

    public function show(RevisionModel $revisao) {
        return view('revisao.show_revision',['revisao'=>$revisao]);
    }

    public function edit(string $id) {
        $revisao = $this->revisao->find($id);
        return view('revisao.update_revision',['revisao'=>$revisao]);
    }

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
