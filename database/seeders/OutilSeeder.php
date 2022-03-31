<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outils')->insert([
            'name'          => 'Microsoft Teams',
            'type'          => 'Réunions à distance',
            'icon'          => 'https://alivearound.com/wp-content/uploads/2020/03/0_mkYblca8SyBPNygs.png',
            'selected'      => true,
            'strengths'     => "<ul><li>Version mobile, nomadisme</li>
                <li>Intégration avec l’environnement global Microsoft</li>
                <li>Beaucoup d’intervenants possibles</li>
                <li>Partage d’écran, de fichier, prise en main à distance</li>
                <li>Facilité d’intégration pour les administrateurs</li>
                <li>Communication améliorée via messagerie instantanée intégrée</li>
                <li>Notes de réunion intégrées, enregistrement de la réunion</li>
                <li>Disponible sur tous les systèmes d’exploitation principaux</li>
                </ul>",
            'weaknesses'    => "<ul><li>Mauvaise optimisation, utilisation élevée des ressources matérielles (processeur, RAM)</li>
                <li>Pas de salle d’attente pour les participants rejoignants en avance</li>
                <li>Tarifs élevés</li>
                <li>Difficulté d’accès en tant qu’externe à l’organisation</li>
                </ul>",
            'opportunities' => "<ul><li>Très répandu, notamment suite à la crise sanitaire, ce qui réduit fortement la nécessité de formation des utilisateurs</li>
                <li>Tout est centralisé en une solution globale Microsoft</li>
                </ul>",
            'threats'       => "<ul><li>Confidentialité des données (non chiffrées)</li>
                <li>La mauvaise optimisation peut entraîner une réduction de l’efficacité des collaborateurs</li>
                <li>Les coûts de licence peuvent monter très vite en fonction de la taille de l’entreprise</li>
                </ul>",
        ]);
        DB::table('outils')->insert([
            'name'          => 'Flipboard',
            'type'          => "Veille",
            'icon'          => 'https://logos-download.com/wp-content/uploads/2020/06/Flipboard_Logo_old.png',
            'selected'      => true,
            'strengths'     => "<ul><li>Sauvegarder un article pour une lecture ultérieure</li>
                <li>Partage des articles sur les réseau sociaux</li>
                <li>Personnaliser l'accueil pour améliorer son confort visuel</li>
                <li>Recommande les news en fonction des adresses IP de l'utilisateur</li>
                </ul>",
            'weaknesses'    => "<ul><li>Il n'est pas si simple de trouver une actualité locale</li>
                <li>Impossibilité d'ajouter uniquement les fux des pages que l'on souhaite (ex: Facebook)</li>
                </ul>",
            'opportunities' => "<ul><li>Formation des nouveaux collaborateurs</li>
                <li>Actualités du marché</li>
                </ul>",
            'threats'       => "<ul><li>Surcharge d'information dans le fil d'actualité</li>
                <li>Haute concurrence</li>
                </ul>",
        ]);
    }
}
