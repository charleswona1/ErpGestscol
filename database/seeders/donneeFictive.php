<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class donneeFictive extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $etablissement = DB::table('etablissement')->insertGetId([
        	'nom'=>"Stoll",
        	'abreviation'=>"st",
        	'type_etablissement'=>"Secondaire",
        	'type_apprenant'=>"Elève",
        	"ville"=>"Akono",
        	"boite_postale"=>$faker->address,
        	"email"=>$faker->companyEmail,
        	"telephone"=>"+237 677274218",
        	"fax"=>"1254lm",
        	"site_web"=>$faker->safeEmailDomain,
        	"localisation"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        	"logo"=>str_pad(decbin(123452465), 8, 0, STR_PAD_LEFT),
        	"creation_date"=>new \DateTime(),
        	"nom_periode"=>"trimestre",
        	"nom_sous_periode"=>"sequence",
            "adj_masculin_periode"=>"trimestriel",
            "adj_feminin_periode"=>"trimestrielle",
            "adj_masculin_sous_periode"=>"sequentiel",
            "adj_feminin_sous_periode"=>"sequentielle",
            "nom_annee"=>"2020-2021",
            "adj_masculin_periode"=>"sequentiel",
            "adj_masculin_periode"=>"sequentiel",
        ]);

        $profil = DB::table('profil')->insertGetId([
        	"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        	"description"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        	"id_etablissement"=>$etablissement,
        ]);

        $module = DB::table('module')->insertGetId([
        	"nom"=>"gestscol",
        	"code"=>"code123",
        	"description"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        	"status"=>false,
        ]);

        $d=mktime(11, 14, 54, 8, 12, 2022);
        $licence = DB::table('licence')->insertGetId([
        	"numero"=>$faker->swiftBicNumber,
        	"creation_date"=> new \DateTime(),
        	"expiration_date"=> new \DateTime(),
        	"status"=>false,
        ]);


        $user1;
        $tabUser = array();
        foreach (range(1,5) as $index) {
	        	$user = DB::table('users')->insertGetId([
	        	"id_profil"=>$profil,
	        	"login"=>$faker->userName,
	        	"password"=>Hash::make('yannick93'),
	        	"nom"=>$faker->name,
	        	"telephone"=>"677274218",
	        	"email"=>$faker->email,
	        	"enabled"=>false,
	        	"creation_date"=> new \Datetime(),
	        ]);
            $tabUser[] = $user;
            $user1 = $user;
        }

        $module_etablissement = DB::table('module_etablissement')->insertGetId([
        	"id_module"=>$module,
        	"id_etablissement"=>$etablissement,
        	"id_licence"=>$licence,
            "date_expiration" => new \Datetime(),
            "numero_licence" => $faker->realText($maxNbChars = 200, $indexSize = 2),
        ]);

        $ressource = DB::table('ressource')->insertGetId([
            "libelle"=>$faker->realText($maxNbChars = 150, $indexSize = 2),
            "code"=>"code123",
            "id_module"=>$module,
        ]);

        $ressource_profil = DB::table('ressource_profil')->insertGetId([
            "id_ressource"=>$ressource,
            "id_profil"=>$profil,
            "lecture"=>true,
            "ecriture" => true,
            "modification" => true,
            "suppression" => true,
        ]);

        foreach (range(1,5) as $index) {
                $admin = DB::table('admin')->insertGetId([
                "login"=>$faker->userName,
                "password"=>Hash::make('yannick93'),
                "nom"=>$faker->name,
                "telephone"=>"677274218",
                "email"=>$faker->email,
                "enabled"=>false,
                "creation_date"=> new \Datetime(),
            ]);
        }

        $d=mktime(11, 14, 54, 8, 12, 2022);
        $annee_academique = DB::table('annee_academique')->insertGetId([
                "id_etablissement"=>$etablissement,
                "nom"=>"2020-2021",
                "date_debut"=> new \Datetime(),
                "date_fin"=> new \Datetime(),
                "est_verrouiller"=>false,
                "est_cloturer"=>false,
                "par_defaut"=> false,
            ]);
        
        $user_session = DB::table('user_session')->insertGetId([
                "id_user"=>$user1,
                "date_debut"=> new \Datetime(),
                "date_fin"=> new \Datetime(),
                "id_annee_academique"=>$annee_academique,
                "id_etablissement"=>$etablissement,
            ]);

        $cycle1 = DB::table('cycle')->insertGetId([
                "id_etablissement"=>$etablissement,
                "nom"=> "cycle 1",
            ]);

        $cycle2 = DB::table('cycle')->insertGetId([
                "id_etablissement"=>$etablissement,
                "nom"=> "cycle 2",
            ]);
        $tabNiveauScolaire = array();
        $niveau_scolaire1 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Sixieme",
                "bareme"=> 20,
                "ordre"=> 6,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire1;

        $niveau_scolaire2 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Cinquieme",
                "bareme"=> 20,
                "ordre"=> 5,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire2;

        $niveau_scolaire3 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Quatrieme",
                "bareme"=> 20,
                "ordre"=> 4,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire3;

        $niveau_scolaire4 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Troisieme",
                "bareme"=> 20,
                "ordre"=> 3,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire4;

        $niveau_scolaire5 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle2,
                "nom"=>"Seconde",
                "bareme"=> 20,
                "ordre"=> 2,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire5;

        $niveau_scolaire6 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Premiere",
                "bareme"=> 20,
                "ordre"=> 1,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire6;

        $niveau_scolaire7 = DB::table('niveau_scolaire')->insertGetId([
                "id_cycle"=>$cycle1,
                "nom"=>"Terminale",
                "bareme"=> 20,
                "ordre"=> 0,
            ]);
        $tabNiveauScolaire[] = $niveau_scolaire7;

        $classe1 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire1,
                "nom"=>"Sixieme 1",
            ]);

        $classe2 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire1,
                "nom"=>"Sixieme 2",
            ]);

        $classe3 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire1,
                "nom"=>"Sixieme 3",
            ]);

        $classe4 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire2,
                "nom"=>"Cinquieme 1",
            ]);

        $classe5 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire2,
                "nom"=>"Cinquieme 2",
            ]);

        $classe6 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire2,
                "nom"=>"Cinquieme 3",
            ]);


        $classe7 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire3,
                "nom"=>"Quatrieme 1",
            ]);

        $classe8 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire3,
                "nom"=>"Quatrieme 2",
            ]);

        $classe9 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire3,
                "nom"=>"Quatrieme 3",
            ]);

        $classe10 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire4,
                "nom"=>"Troisieme 1",
            ]);

        $classe11 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire4,
                "nom"=>"Troisieme 2",
            ]);

        $classe12 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire4,
                "nom"=>"Troisieme 3",
            ]);

        $classe13 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire5,
                "nom"=>"Seconde A1",
            ]);

        $classe14 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire5,
                "nom"=>"Seconde A2",
            ]);

        $classe15 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire5,
                "nom"=>"Seconde C",
            ]);

        $classe16 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire6,
                "nom"=>"Premiere A",
            ]);

        $classe17 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire6,
                "nom"=>"Premiere D",
            ]);

        $classe18 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire6,
                "nom"=>"Premiere C",
            ]);

        $classe19 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire7,
                "nom"=>"Terminale A",
            ]);

        $classe20 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire7,
                "nom"=>"Terminale D",
            ]);

        $classe21 = DB::table('classe')->insertGetId([
                "id_niveau"=>$niveau_scolaire7,
                "nom"=>"Terminale C",
            ]);

        $tabEns = array();
        foreach (range(1,100) as $index) {
                $enseignant = DB::table('enseignant')->insertGetId([
                "id_etablissement"=>$etablissement,
                "nom"=>$faker->name,
                "titre"=>$faker->randomElement($array = array ('Dr', 'Pr', 'Mr', 'Mme')),
                "matricule"=>"stoll".$faker->unixTime($max = 'now') ,
                "email"=>$faker->email,
                "sexe"=>$faker->randomElement($array = array ('M', 'F')),
                "num_cni"=>$faker->bankAccountNumber,
                "status"=>$faker->randomElement($array = array ('Permanent', 'Vacataire')),
                "diplome"=>$faker->randomElement($array = array ('Baccalaureat', 'Licence', 'Master', 'Doctorat')),
                "telephone"=>"677274218",
                "localisation"=>"A Akono Cameroun",
            ]);

            $tabEns[] = $enseignant;
        }



        $table1 = array();
        $classe_annee1 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe1,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[1],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee1;

        $classe_annee2 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe2,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[2],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee2;

        $classe_annee3 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe3,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[3],
               "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee3;

        $classe_annee4 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe4,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[4],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee4;

        $classe_annee5 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe5,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[5],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee5;

        $classe_annee6 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe6,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[6],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee6;

        $classe_annee7 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe7,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[7],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee7;

        $classe_annee8 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe8,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[8],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee8;

        $classe_annee9 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe9,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[9],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee9;

        $classe_annee10 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe10,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[10],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee10;

        $classe_annee11 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe11,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[11],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee11;

        $classe_annee12 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe12,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[12],
               "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 1"
            ]);
        $table1[] = $classe_annee12;

        $classe_annee13 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe13,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[13],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee13;

        $classe_annee14 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe14,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[20],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee14;

        $classe_annee15 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe15,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[21],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee15;

        $classe_annee16 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe16,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[22],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee16;

        $classe_annee17 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe17,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[25],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee17;

        $classe_annee18 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe18,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[28],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee18;

        $classe_annee19 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe19,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[30],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee19;

        $classe_annee20 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe20,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[31],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee20;

        $classe_annee21 = DB::table('classe_annee')->insertGetId([
                "id_classe"=>$classe21,
                "id_annee_academique"=> $annee_academique,
                "nom" => $faker->name,
                "effectif" => $faker->numberBetween(30, 50),
                "ordre" => $faker->numberBetween(1, 21),
                "id_enseignant" => $tabEns[32],
                "nom_niveau" => $faker->state,
                "nom_cycle" => "cycle 2"
            ]);
        $table1[] = $classe_annee21;

        $tabApprenant = array();
        $tabApprenantClasse = array();
        $somApprenant = 0;
        for ($i=0; $i < 21; $i++) { 
            for ($j=0; $j < $faker->numberBetween(30, 50); $j++) { 
                $apprenant = DB::table('apprenant')->insertGetId([
                    "id_etablissement"=>$etablissement,
                    "nom"=> $faker->name." ".$faker->lastName,
                    "matricule" => "stoll".$i.$j,
                    "date_naissance" => $faker->dateTimeBetween($startDate = '-20 years', $endDate = 'now', $timezone = null),
                    "lieu_naissance" => $faker->state,
                    "domicile" => $faker->city,
                    "type_contact" => $faker->randomElement($array = array (1,2)),
                    "index_contact" => $faker->randomElement($array = array (1, 2, 3)),
                    "nom_pere"=> $faker->name." ".$faker->firstNameMale,
                    "nom_mere"=> $faker->name." ".$faker->firstNameFemale,
                    "profession_pere"=> $faker->jobTitle,
                    "profession_mere"=> $faker->jobTitle,
                    "tel_pere" => "677274218",
                    "tel_mere" => "677274218",
                    "sexe"=>$faker->randomElement($array = array ('M', 'F')),

                ]);
                $tabApprenant[] = $apprenant;

                $apprenant_classe = DB::table('apprenant_classe')->insertGetId([
                    "id_apprenant"=>$apprenant,
                    "id_classe_annee"=> $table1[1],
                    "nom" => $faker->name." ".$faker->lastName,
                    "numero" => $j,
                ]);

                $tabApprenantClasse[] = $apprenant_classe;
            }
        }

        $tabEtUser = array();
        foreach (range(0, 4) as $index) {
            $etablissement_user = DB::table('etablissement_user')->insertGetId([
                    "id_etablissement"=>$etablissement,
                    "id_user"=> $tabUser[$index],
                    "is_default" => true,
                    "is_default_annee" => 2021,
                ]);
            $tabEtUser[] = $etablissement_user;
        }
        
        $tabGp = array();
        foreach (range(0, 9) as $index) {
            $groupe = DB::table('groupe')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    "nom"=> "groupe ".$index,
                    "effectif" => $faker->numberBetween(10, 20),
                ]);
            $tabGp[] = $groupe;
        }

        foreach (range(0, 9) as $index) {
            for ($j=0; $j < 5; $j++) { 
                
            $groupe_apprenant_classe = DB::table('groupe_apprenant_classe')->insertGetId([
                    "id_groupe"=>$tabApprenant[$index],
                    "id_apprenant_classe"=> $tabApprenantClasse[$j],
                ]);
            }
        }

        $tabPeriode = array();
        $pourcentage = array(0.35, 0.35, 0.30);
        foreach (range(0, 2) as $index) {
            $periode = DB::table('periode')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    "numero"=> $index + 1,
                    "date_debut"=> new \Datetime(),
                    "date_fin"=> new \Datetime(),
                    "pourcentage"=> $pourcentage[$index],
                ]);
            $tabPeriode[] = $periode;
        }

        $tabSousPeriode = array();
        foreach (range(0, 2) as $index) {
            for ($j=0; $j < 1; $j++) { 
                $tabSousPeriode[$tabPeriode[$index]] = array();
            $sousperiode = DB::table('sous_periode')->insertGetId([
                    "id_periode"=>$tabPeriode[$index],
                    "numero"=> $j,
                    "date_debut"=> new \Datetime(),
                    "date_fin"=> new \Datetime(),
                ]);
            $tabSousPeriode[$tabPeriode[$index]][] = $sousperiode;
            }
        }

        $tabMatiere = array();
        $matiere = array('Mathématique', 'Français', 'Physique', 'Histoire', 'Geographie', 'Sport', 'Philosophie', 'Science de la Vie et de la Terre', 'Anglais');
        $matiereAb = array('Math', 'Fr', 'Phy', 'Hist', 'Geo', 'Sport', 'Phil', 'SVT', "Angl");
        foreach (range(0, 8) as $index) {
            $matiere1 = DB::table('matiere')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    "nom"=> $matiere[$index],
                    "abreviation"=> $matiereAb[$index],
                ]);
            $tabMatiere[] = $matiere1;
        }

        $tabAppreciationNote = array();
        $appreciation = array('Excellent', 'Très bien', 'Bien', 'Assez-bien', 'Passable', 'Insuffisant', 'Médiocre');
        $max = array(20, 19, 16, 13, 11, 8, 4);
        $min = array(20, 16, 14, 12, 10, 5, 0);
        foreach (range(0, 6) as $index) {
            $appreciation_note = DB::table('appreciation_note')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "libelle"=>$appreciation[$index],
                    "note_min"=> $min[$index],
                    "note_max"=> $max[$index],
                ]);
            $tabAppreciationNote[] = $appreciation_note;
        }

        $tabBourse = array();
        $bourse1 = array('100 000', '75 000', '50 000', '35 000', '30 000', '20 000', '10 000');
        $bourse2 = array(100000, 75000, 50000, 35000, 30000, 20000, 10000);
        $max = array(20, 19, 16, 13, 11, 8, 4);
        $min = array(20, 16, 14, 12, 10, 5, 0);
        foreach (range(0, 6) as $index) {
            $bourse = DB::table('bourse')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "libelle"=>$bourse1[$index],
                    "note_min"=> $min[$index],
                    "note_max"=> $max[$index],
                    "montant"=> $bourse2[$index],
                ]);
            $tabBourse[] = $bourse;
        }

        $tabMention = array();
        $mention1 = array('Excellent', 'Très bien', 'Bien', 'Assez-bien', 'Passable', 'Insuffisant', 'Médiocre');
        $max = array(20, 19, 16, 13, 11, 8, 4);
        $min = array(20, 16, 14, 12, 10, 5, 0);
        foreach (range(0, 6) as $index) {
            $mention = DB::table('mention')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "libelle"=>$mention1[$index],
                    "note_min"=> $min[$index],
                    "note_max"=> $max[$index],
                ]);
            $tabMention[] = $mention;
        }

        $tabMotif = array();
        $motif = array('Bagarre', 'Absence repetée', 'Sortie clandestine', 'Mauvais comportement', 'Manque de respect', 'vol', 'Tricherie');
        foreach (range(0, 6) as $index) {
            $motif_sanction = DB::table('motif_sanction')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "libelle"=>$motif[$index],
                ]);
            $tabMotif[] = $motif_sanction;
        }

        $tabEvaluation = array();
        $eval = array('Control Continu', 'Examen Sequentiel', 'Examen Trimestriel', 'Examen Blanc');
        foreach (range(0, 3) as $index) {
            $evaluation = DB::table('evaluation')->insertGetId([
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "nom"=>$eval[$index],
                ]);
            $tabEvaluation[] = $evaluation;
        }

        $tabExamen = array();
        $examen1 = array('BEPC', 'Probatoire', 'Baccalaureat');
        foreach (range(0, 2) as $index) {
            $examen = DB::table('examen')->insertGetId([
                    "id_etablissement"=>$etablissement,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "nom"=>$examen1[$index],
                ]);
            $tabExamen[] = $examen;
        }

        $tabgroupeM = array();
        $groupeM = array('Scientifique', 'Litteraire', 'Science de la Terre');
        $groupeM1 = array();
        foreach (range(0, 6) as $index) {
            foreach (range(0, 2) as $i) {
              $groupe_matiere = DB::table('groupe_matiere')->insertGetId([
                    "id_niveau_scolaire"=>$tabNiveauScolaire[$index],
                    "id_annee_academique"=>$annee_academique,
                    //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                    "nom"=>$groupeM[$i].$index,
                    "numero"=>$i+1,
                ]);
            $groupeM1[] = $groupeM[$i].$index;
            $tabgroupeM[] = $groupe_matiere;  
            }
        }

        $tabMatiereN = array();
        $coef = array(3, 4, 3, 4, 3, 3, 3, 4, 3);
        foreach (range(0, 6) as $index) {
            $mat = 0;
            foreach (range(0, 2) as $i) {
                foreach (range(0, 2) as $key) {
                    $matiere_niveau = DB::table('matiere_niveau')->insertGetId([
                            "id_matiere"=>$tabMatiere[$mat],
                            "id_niveau_scolaire"=>$tabNiveauScolaire[$index],
                            //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                            "id_groupe_matiere"=>$tabgroupeM[$i],
                            "coefficient"=>$coef[$mat],
                        ]);
                    $mat++;
                    $tabMatiereN[] = $matiere_niveau;
                }

            }


        }


        $tabMatiereC = array();
        foreach (range(0, 20) as $index) {
            $mat = 0;
            foreach (range(0, 8) as $i) {
                    $matiere_classe = DB::table('matiere_classe')->insertGetId([
                            "id_matiere_niveau"=>$tabMatiere[$mat],
                            "id_classe_annee"=>$table1[$index],
                            "id_enseignant"=>$tabEns[$faker->numberBetween(0, 99)],
                            //"libelle"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                            "nom_matiere"=>"matiere".$index.$i,
                            "abreviation"=>"mat".$index.$i,
                        ]);
            }
        }

        /*$classeUser = array();
            foreach (range(0, 20) as $i) {
                    $classe_user = DB::table('classe_user')->insertGetId([
                            "id_user"=>$tabUser[$faker->numberBetween(0, 4)],,
                            "id_classe_annee"=>$table1[$i],
                        ]);
            }

         $matiereUser = array();
            foreach (range(0, 8) as $i) {
                    $matiere_user = DB::table('matiere_user')->insertGetId([
                            "id_user"=>$tabUser[$faker->numberBetween(0, 4)],,
                            "id_matiere"=>$tabMatiere[$i],
                        ]);
            }

        $tabEvaluationP = array();
            foreach (range(0, 8) as $i) {
                    $evaluationP = DB::table('evaluation_periode')->insertGetId([
                            "id_matiere_classe"=>$tabUser[$faker->numberBetween(0, 4)],,
                            "id_annee_academique"=>$annee_academique,
                            "id_periode"=>$annee_academique,
                            "id_sous_periode"=>$annee_academique,
                            "id_evaluation"=>$annee_academique,
                            "date"=>$annee_academique,
                            "bareme"=>$annee_academique,
                            "pourcentage_periode"=>$annee_academique,
                            "pourcentage_sous_periode"=>$annee_academique,
                            "numero"=>$annee_academique,
                            "commentaire"=>$annee_academique,
                        ]);
            }*/
    }
}
