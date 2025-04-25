<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class PredictionController extends Controller
{
    public function index()
    {
        $predictions = Prediction::with('user')
            ->orderBy('prediction')
            ->get();

        return view('predictions.admin', [
            'predictions' => $predictions,
        ]);
    }

    public function customerIndex()
    {
        $predictions = Prediction::with('user')
            ->orderBy('prediction')
            ->get();

        $totalPredictions = $predictions->count();
        $totalAmount = $totalPredictions * 0.5;
        $charityAmount = $totalAmount / 2;
        $averagePrediction = $predictions->avg('prediction');
        $lowestPrediction = $predictions->min('prediction');
        $highestPrediction = $predictions->max('prediction');

        return view('predictions.index', [
            'predictions' => $predictions,
            'totalPredictions' => $totalPredictions,
            'totalAmount' => $totalAmount,
            'charityAmount' => $charityAmount,
            'averagePrediction' => $averagePrediction,
            'lowestPrediction' => $lowestPrediction,
            'highestPrediction' => $highestPrediction,
        ]);
    }

    public function create()
    {
        return view('predictions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'prediction' => 'required|integer|min:0',
        ]);

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt(Str::random(20)),
            ]
        );

        Prediction::create(
            [
                'prediction' => $request->prediction,
                'user_id' => $user->id,
            ]
        );

        return redirect()->route('predictions.thankyou')->with('success', 'Voorspelling succesvol ingediend');
    }

    public function thankyou()
    {
        return view('predictions.thankyou');
    }

    public function update(Request $request, Prediction $prediction)
    {
        $prediction->update([
            'is_payed' => !$prediction->is_payed
        ]);

        return redirect()->back()->with('success', 'Betaalstatus bijgewerkt');
    }
}
