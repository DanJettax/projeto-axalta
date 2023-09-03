<?php

namespace App\Http\Controllers;

class CoresController extends Controller
{

    public function listarCores() {
        $cores = [
          'branco',
          'preto',
          'vermelho'
        ];
        $html = "<ul>";
        foreach ($cores as $cor) {
            $html .= "<li>$cor</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
