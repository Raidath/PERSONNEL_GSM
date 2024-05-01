<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
class PersonnelController extends Controller
{

        // Affichage de la liste des  Personnel
        public function index()
        {
            $personnels =Personnel::all();
            //  $students ='azerty';
            return view('Personnels.index', compact('personnels'));
        }

        // Ajout d'un nouvel

        public function store(Request $request)

        {

            $request->validate([
                // 'user_id'=>'required',
                'nom'=>'required',
                'numero'=> 'required',
                'domaine'=>'required',
                'groupe_sanguin'=>'required',
                'maladie'=>'required',
                'localisation'=>'required',
                'nom_pere'=>'required',
                'nom_mere'=>'required',
                'numero_pere'=>'required',
                'numero_mere'=>'required',
                'numero_urgence'=>'required',
            ]);
                //   dd($students='numero_telephone');
                // Student::create($request->all());
                       // Vérifier si un étudiant avec le même numéro de téléphone existe déjà
    // $existingStudent = Personnel::where('numero_telephone', $request->numero_telephone)->exists();

    // if ($existingStudent) {
    //     return redirect()->back()->with('error', 'Un personnel avec ce numéro de téléphone existe déjà.');
    // } else {
        // Créer un nouvel étudiant s'il n'existe pas déjà

                    // $student=new Student();
                    // $student->nom=$request->nom;
                    // $student->prenom=$request->prenom;
                    // $student->date_naissance=$request->date_naissance;
                    // $student->adresse=$request->adresse;
                    // $student->numero_telephone=$request->numero_telephone;
                    Personnel::create([
                        // 'user_id' =>$request->user_id,
                        'nom' =>$request->nom,
                        'numero' => $request->numero,
                        'domaine' =>$request->domaine ,
                        'type' =>$request->type ,
                        'groupe_sanguin' =>$request->groupe_sanguin,
                        'maladie' =>$request->maladie ,
                        'localisation' =>$request->localisation ,
                        'nom_pere' =>$request->nom_pere ,
                        'nom_mere' =>$request-> nom_mere ,
                        'numero_pere' =>$request->numero_pere ,
                        'numero_mere' =>$request->numero_mere,
                        'numero_urgence' =>$request-> numero_urgence ,

                     ]);

        return redirect()->route('Personnels.index')->with('success', 'Personnel ajouté avec succès');




        }
        // Méthode pour afficher le formulaire de modification  d'un étudiant
    public function edit( Personnel $personnels)
    {
        return view('Personnels.edit', compact('personnel'));
    }

        // Modification des informations d'un personnel existant
        public function update(Request $request, Personnel$personnel)
        {
            $request->validate([
                'nom' => 'required',
                'prenom'=>'required',
                'date_naissance' => 'required|date',
                'adresse' => 'required',
                'numero_telephone' => 'required',
            ]);

            $personnel->update($request->all());

            return redirect('/home')->with('success', 'Informations de l\'étudiant mises à jour avec succès');
        }

        // Suppression d'un étudiant
        // public function destroy(Student $student)
        // {
        //     $student->delete();

        //     return redirect('/students')->with('success', 'Étudiant supprimé avec succès');
        // }

        // Méthode pour supprimer un  personnel de la base de données
    public function destroy($id)
    {
        // Recherche du personnel à supprimer
        $personnel =personnel::findOrFail($id);
        // Suppression du personnel
        $personnel->delete();

        // Redirection vers la liste des étudiants avec un message de succès
        return redirect()->route('Personnels.index')->with('success', ' personnel supprimé avec succès');
    }
}
