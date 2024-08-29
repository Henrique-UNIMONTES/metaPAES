<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    private string $stage = "main";

    public function render(): string {
        $path = public_path("/build/scenes/".$this->stage."/index.html");

        if (!File::exists($path)) {
            return to_route('home');
        }

        return File::get($path);
    }
}
