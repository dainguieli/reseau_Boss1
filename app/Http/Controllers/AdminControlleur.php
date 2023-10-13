<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Admin;

use App\Models\Profile;
use App\Models\silder;
use App\Models\Tache;
use App\Models\tache_user;
use App\Models\User;
use Laravel\Jetstream\Jetstream;
use Auth;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminControlleur extends Controller
{

   public function ajouterClient()
   {
      return view('admin.dashboard.home.user.AjouterClient');
   }
   public function infoBenevole($id)
   {
      $client = User::find($id);
      return view('admin.dashboard.home.user.infoBenevole')->with("client", $client);;
   }
   public function Client()
   {
      // $client = User::where('type', '=', 'client')->get();
      $client = User::get();
      return view('admin.dashboard.home.user.ListeClient')->with('clients', $client);
   }

   public function login(Request $request)
   {
      $check = $request->all();
      if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
         return redirect()->route('admin.dashboard')->with('error', 'Bienvenue  Admin ');
      } else {
         return back()->with('error', 'erreur votre Email ou mot de passe est correcte');
      }
   }
   public function AdminLogout()
   {
      Auth::guard('admin')->logout();
      return redirect()->route('login_from')->with('error', "L'administrateur s'est déconnecté avec succès");
   }

   public function AdminRegister()
   {
      return view('admin.home.admin_regsiter');
   }
   public function AdminRegisterCreate(Request $request)
   {
      Admin::insert([
         'name' => $request->name,

         'email' => $request->email,
         'password' => Hash::make($request->password),
         'created_at' => Carbon::now(),


      ]);
      return redirect()->route('login_from')->with('error', "L'administrateur a été creer avec succès");
   }

   public function UserRegisterCreate(Request $request)
   {
      $this->validate($request, [
         'name' => "required",
         'email' => "required",
         'type' => "required",
         'adresse' => "required",
         'contact' => "required",
         'gender' => "required",
         'couleur_favori' => "required",
         'date_de_naissance' => "required",
      ]);
      $user = User::create([
         'username' => $request->name . '_' . $request->type,
         'name' => $request->name,
         'email' => $request->email,
         'type' => $request->type,
         'adresse' => $request->adresse,
         'contact' => $request->contact,
         'gender' => $request->gender,
         'date_de_naissance' => $request->date_de_naissance,
         'couleur_favori' => $request->couleur_favori,
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

      ]);


      Profile::create([
         'user_id' => $user->id,

         'slug' => Str::of($user->name)->slug('-'),
         'gender' => $request->gender,
      ]);

      /*if ($request->type == 'benevole') {
         $BenevoleInfo = Benevole::create([
            'benevole_id' => $user->id,
            'status' => 1
         ]);
      } else if ($request->type == 'ambassadeur') {
         $ambassadeurInfo = Ambassadeur::create([
            'ambassadeur_id' => $user->id,
            'status' => 1
         ]);
      }

*/

      return back()->with("status", "Votre Utilisateur  a été crée avec succès");
   }
   public function supprimerClient($id)
   {
      $client = User::find($id);

      Storage::delete("public/profile-photos/$client->profile_photo_path");
      $client->delete();
      return back()->with("status", "Votre client à été supprimée avec succès");
   }

   public function modifierClient($id)
   {
      $client = User::find($id);

      return view('admin.dashboard.home.user.modifierClient')->with("client", $client);
   }

   public function mise_a_jour_Client($id, Request $request)
   {
      $client = User::find($id);

      $client->name = $request->input('name');
      $client->email = $request->input('email');
      $client->date_de_naissance = $request->input('date_de_naissance');
      $client->contact = $request->input('contact');
      $client->type = $request->input('type');




      $client->update();
      return redirect("admin/admin/liste_client")->with("status", 'Votre Utilisateur à été modifier avec succès');
   }
   public function silder()
   {
      $silders = silder::get();
      return view('admin.dashboard.home.silder.silder')->with("silders", $silders);;
   }

   public function AjouterSilder()
   {
      return view('admin.dashboard.home.silder.ajouterSilder');
   }
   ////////////////////////tache


   public function ajouterTache()
   {
      return view('admin.dashboard.home.tache.AjouterTache');
   }
   public function infoTache($id)
   {
       // Récupérez toutes les tâches avec un ID spécifique (par exemple, ID 1)
       $taches = Tache::where('id', $id)->get();
   
       // Créez une variable vide pour les utilisateurs associés
       $users = [];
   
       // Parcourez toutes les tâches et obtenez les utilisateurs associés
       foreach ($taches as $tache) {
           $users[$tache->id] = $tache->users;
       }
   
       // Récupérez la liste des utilisateurs qui n'ont pas de tâches
       $listUser = User::whereDoesntHave('taches', function ($query) use ($id) {
           $query->where('tache_id', $id);
       })->get();
   
       // Passez les données à la vue
       return view('admin.dashboard.home.tache.infoTache', ['taches' => $taches, 'users' => $users, 'listUser' => $listUser,'id'=>$id]);
   }
   public function Tache()
   {
      // $client = User::where('type', '=', 'client')->get();
      $tache = Tache::get();
      return view('admin.dashboard.home.tache.ListeTache')->with('taches', $tache);
   }

   public function modifierTache($id)
   {
      $tache = Tache::find($id);

      return view('admin.dashboard.home.tache.modifierTache')->with("tache", $tache);
   }

   public function mise_a_jour_Tache($id, Request $request)
   {
      $tache = Tache::find($id);

      $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
          'starts_at' => 'required',
          'ends_at' => 'required',
      ]);
  
      // Utilisez la méthode 'update' sur l'instance de Tache pour mettre à jour les valeurs
      $tache->update([
          'title' => $request->input('title'),
          'colour' =>    $tache->colour,
          'starts_at' => $request->input('starts_at'),
          'ends_at' => $request->input('ends_at'),
          'description' => $request->input('description'),
      ]);
      
      return redirect("admin/admin/liste_tache")->with("status", 'Vous avez   modifier la tâche  avec succès');
   }


   public function TacheRegisterCreate(Request $request)
   {
      $this->validate($request, [
         'title' => "required",
         'description' => "required",
         'starts_at' => "required",
         'starts_at' => "required",
         'ends_at' => "required",

      ]);
      $tache = Tache::create([
         'title' => $request->title,
         'colour' => $request->colour,
         'starts_at' => $request->starts_at,
         'ends_at' => $request->ends_at,
         'description' => $request->description,


      ]);

      /*  if ($request->type == 'benevole') {
         $BenevoleInfo = Benevole::create([
            'benevole_id' => $user->id,
            'status' => 1
         ]);
      } else if ($request->type == 'ambassadeur') {
         $ambassadeurInfo = Ambassadeur::create([
            'ambassadeur_id' => $user->id,
            'status' => 1
         ]);
      }


*/
      return back()->with("status", "Vous avez   crée la tâche avec succès");
   }

   public function TacheCreate($id, Request $request)
   {

      $this->validate($request, [
         'title' => "required",
         'description' => "required",
         'starts_at' => "required",
         'starts_at' => "required",
         'ends_at' => "required",

      ]);
      $tache = Tache::create([
         'title' => $request->title,
         'colour' => $request->colour,
         'starts_at' => $request->starts_at,
         'ends_at' => $request->ends_at,
         'description' => $request->description,


      ]);
      $tache_user  = tache_user::create(
         [
            'tache_id' => $tache->id,
            'user_id' => $id,
         ]

      );

      return back()->with("status", "Vous avez   crée la tâche avec succès");
   }
   public function supprimerTache($id)
   {
      $tache = Tache::find($id);

      //  Storage::delete("public/profile-photos/$client->profile_photo_path");
      $tache->delete();
      return back()->with("status", "Vous avez  supprimée la tâche avec succès");
   }
   public function iscriTache($idTache,$idUser)
   {
      
      $tache_user  = tache_user::create(
         [
            'tache_id' => $idTache,
            'user_id' => $idUser,
         ]

      );
   return back()->with("status", "Vous avez ajouter l'utilisateur à la tâche avec succès");

   }

   public function suprTache($idTache,$idUser)
   {
        $Taches= tache_user::all();

        foreach ($Taches as $Tache) {
           if ($Tache->tache_id== $idTache && $Tache->user_id==$idUser ) {
            DB::table('tache_user')->where('tache_id', $idTache)->where('user_id', $idUser)->delete();
          
           }
        }
   return back()->with("status", "Vous avez retire l'utilisateur à la tâche avec succès");

   }

}
