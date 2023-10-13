<?php

namespace App\Http\Controllers\Api\Events;

use App\Http\Controllers\Controller;
use App\Models\Tache;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        // Récupérer l'utilisateur connecté
        $user = auth()->user();
    
        // Récupérer les IDs des tâches de l'utilisateur connecté
        $tachesIds = $user->taches()->pluck('id');
    
        // Récupérer toutes les tâches de l'utilisateur connecté
        $taches = $user->taches;
    
        // Formater les tâches en tant qu'événements
        $events = $taches->map(function (Tache $tache) use ($tachesIds): array {
            return [
                'id' => $tache->id,
                'title' => $tache->title,
                'color' => $tache->colour,
                'start' => $tache->starts_at->format('Y-m-d H:i:s'),
                'end' => $tache->ends_at->format('Y-m-d H:i:s'),
                'description' => 'fdsffsfsfsfsfsfs',  // $tache->description,
                'borderColor' => $tachesIds->contains($tache->id) ? 'green' : 'yellow',
            ];
        });
    
        // Retourner les événements au format JSON
        return response()->json([
            'events' => $events,
        ]);
    }
    /*
    public function __invoke(Request $request): JsonResponse
    {
        $tachesIds = auth()->user()->taches()->pluck('id');

        $events = Tache::all()->map(function (Tache $tache) use ($tachesIds): array {
                return [
                    'id' => $tacheId = $tache->id, // La variable $tacheId est maintenant correctement écrite en minuscules.
                    'title' => $tache->title,
                    'color' => $tache->colour,
                    'start' => $tache->starts_at->format('Y-m-d H:i:s'),
                    'end' => $tache->ends_at->format('Y-m-d H:i:s'),
                    'borderColor' => $tachesIds->contains($tacheId) ? 'green' : 'yellow',
                ];
            });

        return response()->json([
            'events' => $events,
        ]);
    }
    */
}
