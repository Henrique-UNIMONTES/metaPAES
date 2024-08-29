<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Duvida;
use App\Models\Scene;
use Illuminate\View\View;

class HomeController extends Controller
{
    private array $duvidas = [];
    private array $scenes = [];
    private array $cursos = [];

    public function render(): View {
        $arr = Duvida::inRandomOrder()->get();

        for ($i = 0; $i < min(3, count($arr)); $i++) {
            $this->duvidas[$arr[$i]->questao] = $arr[$i]->resposta;
        }

        $arr = Scene::all()->toArray();

        foreach ($arr as $scene) {
            $startDate = explode('-', $scene['startDate']);
            $scene['startDate'] = join('/', array_reverse($startDate));
            date_default_timezone_set("America/Sao_Paulo");
            $tmp = explode('-', date("Y-m-d", time()));

            if ($scene['endDate'] != NULL) {
                $endDate = explode('-', $scene['endDate']);
                $scene['endDate'] = join('/', array_reverse($endDate));
                $states = [
                    "startDate" => 0,
                    "endDate" => 0
                ];

                for ($i = 0; $i < 3; $i++) {
                    if ((int)$startDate[$i] < (int)$tmp[$i]) {
                        $states["startDate"] = 0;
                        break;
                    }

                    else if ((int)$startDate[$i] > (int)$tmp[$i]) {
                        $states["startDate"] = 1;
                        break;
                    }

                    else if ($i == 2 && (int)$startDate[$i] == (int)$tmp[$i]) {
                        $states["startDate"] = 2;
                        break;
                    }
                }
                
                for ($i = 0; $i < 3; $i++) {
                    if ((int)$endDate[$i] < (int)$tmp[$i]) {
                        $states["endDate"] = 0;
                        break;
                    }

                    else if ((int)$endDate[$i] > (int)$tmp[$i]) {
                        $states["endDate"] = 1;
                        break;
                    }

                    else if ($i == 2 && (int)$endDate[$i] == (int)$tmp[$i]) {
                        $states["endDate"] = 2;
                        break;
                    }
                }

                if ($states["endDate"] == 0) $scene['state'] = 0;
                else if ($states["startDate"] == 1) $scene['state'] = 1;
                else if ($states["startDate"] == 0 && $states["endDate"] == 1) $scene['state'] = 2;
                else if ($states["startDate"] == 2 || $states["endDate"] == 2) $scene['state'] = 2;
            }

            else {
                for ($i = 0; $i < 3; $i++) {
                    if ((int)$startDate[$i] < (int)$tmp[$i]) {
                        $scene['state'] = 0;
                        break;
                    }

                    else if ((int)$startDate[$i] > (int)$tmp[$i]) {
                        $scene['state'] = 1;
                        break;
                    }

                    else if ($i == 2 && (int)$startDate[$i] == (int)$tmp[$i]) {
                        $scene['state'] = 2;
                        break;
                    }
                }
            }
            
            $this->scenes[] = $scene;
        }

        $this->cursos = Curso::inRandomOrder()->limit(16)->get()->toArray();

        usort($this->cursos, function($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });
        
        return view('home', [
            'pageTitle' => "PAES | COTEPS | UNIMONTES",
            'duvidas' => $this->duvidas,
            'scenes' => $this->scenes,
            'cursos' =>  $this->cursos
        ]);
    }
}
