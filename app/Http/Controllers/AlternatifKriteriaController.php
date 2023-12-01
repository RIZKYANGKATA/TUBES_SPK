<?php

namespace App\Http\Controllers;

use App\Models\AlternatifKriteria;
use Illuminate\Http\Request;

class AlternatifKriteriaController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $id_alternatif = $request->id_alternatif;
        foreach($request->id as $key => $value){
            // check if data with 'id_alternatif' and 'id_kriteria' already exists on table 'alternatif_kriteria'
            $alternatif_kriteria = AlternatifKriteria::where('id_alternatif', $id_alternatif)
                ->where('id_kriteria', $request->id[$key])
                ->first();

            // if data already exists, update the data
            if($alternatif_kriteria){
                $alternatif_kriteria->update([
                    'value' => $request->value[$key],
                ]);
                continue;
            } else {
                // if data doesn't exist, create new data
                AlternatifKriteria::create([
                    'id_alternatif' => $id_alternatif,
                    'id_kriteria' => $request->id[$key],
                    'value' => $request->value[$key],
                ]); 
            }
        }
        return redirect('alternatif')
            ->with('success','Alternatif berhasil ditambahkan');
    }
}
