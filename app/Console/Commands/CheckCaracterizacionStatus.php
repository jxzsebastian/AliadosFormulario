<?php

namespace App\Console\Commands;

use App\Events\CaracterizacionEvent;
use App\Models\Emprendedor;
use App\Models\User;
use App\Notifications\CaracterizacionNotification;
use Illuminate\Console\Command;
use Carbon\Carbon;

class CheckCaracterizacionStatus extends Command
{

    protected $signature = 'check:caracterizacion';

    protected $description = 'Check Emprendedores for Caracterizacion status';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $eightDaysAgo = now()->subDays(8);

        $emprendedores = Emprendedor::where('estado', 'Caracterizacion')
            ->where('created_at', '<=', $eightDaysAgo)
            ->get();
        // Agregar una salida de depuración
        \Illuminate\Support\Facades\DB::enableQueryLog();
        dd($emprendedores);

        foreach ($emprendedores as $emprendedor) {
            User::where('programa_sena', $emprendedor->programa_sena_ingreso)
                ->each(function (User $user) use ($emprendedor) {
                    $user->notify(new CaracterizacionNotification($emprendedor, 'recordatorio_remision'));
                });
        }

        $this->info('Caracterizacion check completed.');
    }
}
