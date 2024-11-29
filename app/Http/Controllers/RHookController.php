<?php

namespace App\Http\Controllers;

use App\Models\RHook;
use Illuminate\Http\Request;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class RHookController extends ProcessWebhookJob
{
    public $dados = 'testando';
    public function recebeHook(Request $request)
    {
        $request = $this->dados;
        $dados = RHook::get();
        ds($dados);
        return view('receivehook', ['jobs' => $dados]);
    }
}
