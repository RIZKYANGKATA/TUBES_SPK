<?php

namespace App\Http\Controllers;

use App\Models\AlternatifKriteria;
use Illuminate\Http\Request;

class AlternatifKriteriaController extends Controller
{
    public function store(Request $request)
    {
        $id_alternatif = $request->id_alternatif;

        foreach ($request->id_kriteria as $key => $id_kriteria) {
            // Cek apakah data dengan 'id_alternatif' dan 'id_kriteria' sudah ada di tabel 'alternatif_kriteria'
            $alternatif_kriteria = AlternatifKriteria::where('id_alternatif', $id_alternatif)
                ->where('id_kriteria', $id_kriteria)
                ->first();

            // Jika data sudah ada, perbarui data
            if ($alternatif_kriteria) {
                $alternatif_kriteria->update([
                    'value' => $request->value[$key],
                ]);
            } else {
                // Jika data tidak ada, buat data baru
                AlternatifKriteria::create([
                    'id_alternatif' => $id_alternatif,
                    'id_kriteria' => $id_kriteria,
                    'value' => $request->value[$key],
                ]);
            }
        }

        return redirect('alternatif')
            ->with('success', 'Alternatif berhasil ditambahkan');
    }
}
