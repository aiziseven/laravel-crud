<?php

namespace App\Http\Controllers;

use App\Jawaban;
use Illuminate\Http\Request;

use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function welcome()
    {
        return view("welcome");
    }

    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view("pertanyaan", ["pertanyaan" => $pertanyaan]);
    }

    public function create()
    {
        return view("pertanyaancreate");
    }

    public function store(Request $request)
    {
        Pertanyaan::create(
            [
                "judul" => strtoupper($request->aJudul),
                "isi" => strtoupper($request->aIsi)
            ]
        );

        return redirect("/pertanyaan");
    }

    public function detail($id)
    {
        $pertanyaan = Pertanyaan::where("id", $id)->get();
        $jawaban = Jawaban::where("id_pertanyaan", $id)->get();
        return view("pertanyaandetail", ["pertanyaan" => $pertanyaan, "jawaban" => $jawaban]);
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::where("id", $id)->get();
        return view("pertanyaanedit", ["pertanyaan" => $pertanyaan]);
    }

    public function update($id, Request $request)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->judul = strtoupper($request->aJudul);
        $pertanyaan->isi = strtoupper($request->aIsi);
        $pertanyaan->save();
        return redirect("/pertanyaan");
    }

    public function deleteconfirm($id)
    {
        $pertanyaan = Pertanyaan::where("id", $id)->get();
        return view("pertanyaandelete", ["pertanyaan" => $pertanyaan]);
    }

    public function delete($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        $jawaban = Jawaban::where("id_pertanyaan", $id)->delete();
        return redirect("/pertanyaan");
    }
}
