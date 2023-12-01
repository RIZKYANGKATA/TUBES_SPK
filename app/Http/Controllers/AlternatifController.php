<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\AlternatifKriteria;
use App\Models\kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all();
        $kriteria = kriteria::all();
        $alternatif_kriteria = AlternatifKriteria::all();
        $alternatifKriteriaGrouped = $alternatif_kriteria->groupBy(['id_alternatif', 'id_kriteria']);
        $subKriteria = SubKriteria::all();
        return view('alternatif.alternatif')
            ->with('alternatif', $alternatif)
            ->with('kriteria', $kriteria)
            ->with('alternatif_kriteria', $alternatif_kriteria)
            ->with('alternatifKriteriaGrouped', $alternatifKriteriaGrouped)
            ->with('subKriteria', $subKriteria);
    }

    public function store(Request $request)
    {
        Alternatif::create($request->all());

        return redirect('alternatif')
            ->with('success', 'Alternatif berhasil ditambahkan');
    }
}
