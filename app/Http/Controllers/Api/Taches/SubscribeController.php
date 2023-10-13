<?php


namespace App\Http\Controllers\Api\Taches;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $user = auth()->user();
        $tache = $user->taches()->find($request->id);

        if (!$tache) {
            return response()->json([
                'success' => false,
                'message' => 'Tâche non trouvée.',
            ], 404);
        }

        $result = $user->taches()->toggle($tache);

        return response()->json([
            'success' => true,
            'attached' => $result['attached']->contains($tache->id),
        ]);
    }
}
