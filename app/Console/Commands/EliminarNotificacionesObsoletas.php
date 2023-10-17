<?php

namespace App\Console\Commands;

use App\Models\Emprendedor;
use App\Notifications\CaracterizacionNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class EliminarNotificacionesObsoletas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eliminar:notificaciones-obsoletas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        // Obtén la fecha actual
        $now = Carbon::now();

        // Calcula la fecha hace 8 días
        $eightDaysAgo = $now->subDays(8);

        // Busca a los Emprendedores con estado "Caracterizado" durante los últimos 8 días
        $emprendedoresCaracterizados = Emprendedor::where('estado', 'Caracterizado')
            ->where('updated_at', '<=', $eightDaysAgo)
            ->get();

        // Obtén los IDs de Emprendedores Caracterizados
        $emprendedoresCaracterizadosIds = $emprendedoresCaracterizados->pluck('id');

        // Elimina las notificaciones relacionadas con los Emprendedores Caracterizados
        DB::table('notifications')
            ->where('type', CaracterizacionNotification::class)
            ->whereIn('data->emprendedor_id', $emprendedoresCaracterizadosIds)
            ->delete();

        $this->info('Caracterizacion check completed.');
    }
}
