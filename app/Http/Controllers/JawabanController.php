<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Jawaban;

class JawabanController extends Controller
{
    public function index($id)
    {
        $jawaban = Jawaban::where("id_pertanyaan", $id)->get();
        return view("jawaban", ["jawaban" => $jawaban]);
    }

    public function create($id)
    {
        return view("jawabancreate", ["id" => $id]);
    }

    public function store(Request $request)
    {
        Jawaban::create(
            [
                "isi" => strtoupper($request->aIsi),
                "id_pertanyaan" => $request->aIdPertanyaan,
                "jawaban_tepat" => 0
            ]
        );

        return redirect("/jawaban/" . $request->aIdPertanyaan);
    }
}
