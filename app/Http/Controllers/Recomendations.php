<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class recommendations extends Controller
{
    public function index($locale)
    {
        $this->setLocale($locale);
        $this->isCurrent('recommendations');
        $this->setDiscount();
        $this->createView();

        $pathTorecommendations = public_path('recommendations.json');
        if (File::exists($pathTorecommendations)) {
            $json = File::get($pathTorecommendations);
            $array = json_decode($json, true);
            $this->data['recommendations'] = $array;
        } else {
            $this->data['recommendations'] = [];
        }

        return view('recommendations', $this->data);
    }
}
