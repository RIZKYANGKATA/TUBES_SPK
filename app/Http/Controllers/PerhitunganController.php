<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\AlternatifKriteria;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan semua data alternatif, kriteria, dan hubungan alternatif-kriteria
        $alternatif = Alternatif::all();
        $kriteria = Kriteria::all();
        $alternatif_kriteria = AlternatifKriteria::all();

        // Mengelompokkan data alternatif-kriteria berdasarkan id_alternatif dan id_kriteria
        $alternatifKriteriaGrouped = $alternatif_kriteria->groupBy(['id_alternatif', 'id_kriteria']);

        // Inisialisasi matriks keputusan
        $matriksKeputusan = [];

        // Mengisi matriks keputusan dari data alternatif-kriteria
        foreach ($alternatif as $alt) {
            $matriksKeputusan[$alt->id] = [];
            foreach ($kriteria as $kriteria) {
                $matriksKeputusan[$alt->id][$kriteria->id] = $alternatifKriteriaGrouped[$alt->id][$kriteria->id]->nilai;
            }
        }

        // Normalisasi matriks keputusan
        $normalisasiMatriks = [];

        foreach ($kriteria as $kriteria) {
            $max = $matriksKeputusan[$alternatif->first()->id][$kriteria->id];
            $min = $matriksKeputusan[$alternatif->first()->id][$kriteria->id];

            // Mencari nilai maksimum dan minimum untuk setiap kriteria
            foreach ($alternatif as $alt) {
                $max = max($max, $matriksKeputusan[$alt->id][$kriteria->id]);
                $min = min($min, $matriksKeputusan[$alt->id][$kriteria->id]);
            }

            // Normalisasi nilai matriks keputusan
            foreach ($alternatif as $alt) {
                $normalisasiMatriks[$alt->id][$kriteria->id] =
                    ($matriksKeputusan[$alt->id][$kriteria->id] - $min) / ($max - $min);
            }
        }

        // Menghitung bobot kriteria
        $bobotKriteria = [];

        foreach ($kriteria as $kriteria_item) {
            $bobotKriteria[$kriteria->id] = 1 / count($kriteria);
        }

        // Menghitung nilai COPRAS
        $nilaiCOPRAS = [];

        foreach ($alternatif as $alt) {
            $nilaiCOPRAS[$alt->id] = 0;
            foreach ($kriteria as $kriteria) {
                $nilaiCOPRAS[$alt->id] += $normalisasiMatriks[$alt->id][$kriteria->id] * $bobotKriteria[$kriteria->id];
            }
        }

        // Menampilkan hasil COPRAS
        return view('decision_support.index', compact('alternatif', 'kriteria', 'alternatifKriteriaGrouped', 'nilaiCOPRAS'));
    }
}
