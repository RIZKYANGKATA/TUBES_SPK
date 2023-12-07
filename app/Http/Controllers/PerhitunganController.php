<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\AlternatifKriteria;
use App\Models\kriteria;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all();
        $kriteria = kriteria::all();
        $alternatif_kriteria = AlternatifKriteria::all();
        $alternatifKriteriaGrouped = $alternatif_kriteria->groupBy(['id_alternatif', 'id_kriteria']);

        // Menghitung nilai normalisasi matrix dengan rumus (n / sum(nilai perkriteria))
        $nm = [];
        foreach ($alternatifKriteriaGrouped as $ak) {
            foreach ($ak as $a) {
                $nm[$a[0]->id_alternatif][$a[0]->id_kriteria] = $a[0]->value / $alternatif_kriteria->where('id_kriteria', $a[0]->id_kriteria)->sum('value');
            }
        }

        // Menghitung nilai normalisasi matrix terbobot dengan rumus (nm * bobot)
        $nmt = [];
        foreach ($alternatifKriteriaGrouped as $ak) {
            foreach ($ak as $a) {
                $k = $kriteria->where('id', $a[0]->id_kriteria)->first();
                $nmt[$a[0]->id_alternatif][$a[0]->id_kriteria] = $nm[$a[0]->id_alternatif][$a[0]->id_kriteria] * $k->bobot;
            }
        }

        // Menghitung nilai dengan rumus sum(nmt) berdasarkan nmt benefit dan cost
        $sumBenefit = [];
        $sumCost = [];
        foreach ($alternatif as $a) {
            $sumBenefit[$a->id] = 0;
            $sumCost[$a->id] = 0;
            foreach ($kriteria as $k) {
                if ($k->jenis == 0) {
                    $sumBenefit[$a->id] += $nmt[$a->id][$k->id];
                } else {
                    $sumCost[$a->id] += $nmt[$a->id][$k->id];
                }
            }
        }

        // Menghitung nilai dengan rumus 1/sumCost
        $sumCostInverse = [];
        foreach ($sumCost as $key => $value) {
            $sumCostInverse[$key] = 1 / $value;
        }

        // Menghitung nilai dengan rumus sumCost * sum(sumCostInverse)
        $v = [];
        foreach ($sumCost as $key => $value) {
            $v[$key] = $value * array_sum($sumCostInverse);
        }

        // Menghitung nilai dengan rumus v / sum(sumCost)
        $v2 = [];
        foreach ($v as $key => $value) {
            $v2[$key] = array_sum($sumCost) / $value;
        }

        // Menghitung nilai dengan rumus v2 + sumBenefit
        $v3 = [];
        foreach ($v2 as $key => $value) {
            $v3[$key] = $value + $sumBenefit[$key];
        }

        // Menghitung nilai utilitas dengan rumus v3 / max(v3) * 100
        $utilitas = [];
        foreach ($v3 as $key => $value) {
            $utilitas[$key] = $value / max($v3) * 100/100;
        }


        return view('perhitungan.perhitungan')
            ->with('kriteria', $kriteria)
            ->with('alternatif', $alternatif)
            ->with('alternatif_kriteria', $alternatif_kriteria)
            ->with('nm', $nm)
            ->with('nmt', $nmt)
            ->with('sumBenefit', $sumBenefit)
            ->with('sumCost', $sumCost)
            ->with('sumCostInverse', $sumCostInverse)
            ->with('v', $v)
            ->with('v2', $v2)
            ->with('v3', $v3)
            ->with('utilitas', $utilitas);



    }

    public function reset()
    {
        Alternatif::query()->delete();
        kriteria::query()->delete();
        return redirect('/');
    }

    public function hasil()
    {
        $alternatif = Alternatif::all();
        $kriteria = kriteria::all();
        $alternatif_kriteria = AlternatifKriteria::all();
        $alternatifKriteriaGrouped = $alternatif_kriteria->groupBy(['id_alternatif', 'id_kriteria']);

        // Menghitung nilai normalisasi matrix dengan rumus (n / sum(nilai perkriteria))
        $nm = [];
        foreach ($alternatifKriteriaGrouped as $ak) {
            foreach ($ak as $a) {
                $nm[$a[0]->id_alternatif][$a[0]->id_kriteria] = $a[0]->value / $alternatif_kriteria->where('id_kriteria', $a[0]->id_kriteria)->sum('value');
            }
        }

        // Menghitung nilai normalisasi matrix terbobot dengan rumus (nm * bobot)
        $nmt = [];
        foreach ($alternatifKriteriaGrouped as $ak) {
            foreach ($ak as $a) {
                $k = $kriteria->where('id', $a[0]->id_kriteria)->first();
                $nmt[$a[0]->id_alternatif][$a[0]->id_kriteria] = $nm[$a[0]->id_alternatif][$a[0]->id_kriteria] * $k->bobot;
            }
        }

        // Menghitung nilai dengan rumus sum(nmt) berdasarkan nmt benefit dan cost
        $sumBenefit = [];
        $sumCost = [];
        foreach ($alternatif as $a) {
            $sumBenefit[$a->id] = 0;
            $sumCost[$a->id] = 0;
            foreach ($kriteria as $k) {
                if ($k->jenis == 0) {
                    $sumBenefit[$a->id] += $nmt[$a->id][$k->id];
                } else {
                    $sumCost[$a->id] += $nmt[$a->id][$k->id];
                }
            }
        }

        // Menghitung nilai dengan rumus 1/sumCost
        $sumCostInverse = [];
        foreach ($sumCost as $key => $value) {
            $sumCostInverse[$key] = 1 / $value;
        }

        // Menghitung nilai dengan rumus sumCost * sum(sumCostInverse)
        $v = [];
        foreach ($sumCost as $key => $value) {
            $v[$key] = $value * array_sum($sumCostInverse);
        }

        // Menghitung nilai dengan rumus v / sum(sumCost)
        $v2 = [];
        foreach ($v as $key => $value) {
            $v2[$key] = array_sum($sumCost) / $value;
        }

        // Menghitung nilai dengan rumus v2 + sumBenefit
        $v3 = [];
        foreach ($v2 as $key => $value) {
            $v3[$key] = $value + $sumBenefit[$key];
        }

        // Menghitung nilai utilitas dengan rumus v3 / max(v3) * 100
        $utilitas = [];
        foreach ($v3 as $key => $value) {
            $utilitas[$key] = $value / max($v3) * 100/100;
        }


        return view('hasil_akhir.hasil_akhir')
        ->with('kriteria', $kriteria)
            ->with('alternatif', $alternatif)
            ->with('alternatif_kriteria', $alternatif_kriteria)
            ->with('nm', $nm)
            ->with('nmt', $nmt)
            ->with('sumBenefit', $sumBenefit)
            ->with('sumCost', $sumCost)
            ->with('sumCostInverse', $sumCostInverse)
            ->with('v', $v)
            ->with('v2', $v2)
            ->with('v3', $v3)
            ->with('utilitas', $utilitas);
       

    }
}
