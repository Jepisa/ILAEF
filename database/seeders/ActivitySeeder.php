<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::factory([
            'title' => 'My last Activity Perrito',
            'slug' => 'my-last-activity ',
            'lead' => 'Distinguir cada año a las Empresas Familiares Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corrupti pariatur porro ipsa quaerat aperiam sint expedita ullam atque, asperiores at, blanditiis quisquam nihil veniam, quas repellat praesentium quae excepturi sit cupiditate beatae quia tenetur sunt numquam. Eius architecto natus quisquam optio facere aspernatur ex inventore illo sit minus commodi accusantium, necessitatibus laboriosam, cupiditate quia nemo dolores quos unde consequatur harum iure quod? Accusamus pariatur voluptates perferendis iste sint. Quo impedit provident, eum voluptas, debitis alias, adipisci animi sapiente vel eaque nemo ipsam quibusdam!',
            'body' => 'This is the Body of my last Activity',
            'created_at' => now(),
        ])->create();

        Activity::factory()->count(11)->create();
        Activity::factory([
            'title' => 'Mi segunda actividad',
            'slug' => 'mi-segunda-actividad',
            'lead' => 'Amigar cada año a las Empresas Familiares perrito Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corrupti pariatur porro ipsa quaerat aperiam sint expedita ullam atque, asperiores at, blanditiis quisquam nihil veniam, quas repellat praesentium quae excepturi sit cupiditate beatae quia tenetur sunt numquam. Eius architecto natus quisquam optio facere aspernatur ex inventore illo sit minus commodi accusantium, necessitatibus laboriosam, cupiditate quia nemo dolores quos unde consequatur harum iure quod? Accusamus pariatur voluptates perferendis iste sint. Quo impedit provident, eum voluptas, debitis alias, adipisci animi sapiente vel eaque nemo ipsam quibusdam!',
            'body' => 'This is the Body of my last Activity',
            'created_at' => now(),
        ])->create();
        Activity::factory([
            'title' => 'Mi tercera actividad',
            'slug' => 'mi-tercera-actividad',
            'lead' => 'Cada año a las Empresas Familiares Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corrupti pariatur porro ipsa quaerat aperiam sint expedita ullam atque, asperiores at, blanditiis quisquam nihil veniam, quas repellat praesentium quae excepturi sit cupiditate beatae quia tenetur sunt numquam. Eius architecto natus quisquam optio facere aspernatur ex inventore illo sit minus commodi accusantium, necessitatibus laboriosam, cupiditate quia nemo dolores quos unde consequatur harum iure quod? Accusamus pariatur voluptates perferendis iste sint. Quo impedit provident, eum voluptas, debitis alias, adipisci animi sapiente vel eaque nemo ipsam quibusdam!',
            'body' => 'This is the Body of my last Activity Perrito',
        ])->create();
        
        $activitiesQuantity = Activity::all()->count();

        //Acá estoy relacionando 3 etiquetas con cada actividad. 4 actividades tendrán las mismas tres etiquetas y las proximas 4 actividades tendrán otras tres etiquetas, hasta terminar con todas las actividades
            
        for ($i=1; $i <= ($activitiesQuantity/4); $i++) { 
            
            for ($e=($i*4-3); $e <= $i*4; $e++) { 
                $activity = Activity::find($e);
                for ($o=($i*3-2); $o <= $i*3; $o++) { 
                    $activity->tags()->attach($o);
                }
                
            }
        
        }


        for ($i=1; $i <= ($activitiesQuantity/4); $i++) { 
            
            for ($e=($i*4-3); $e <= $i*4; $e++) { 
                $activity = Activity::find($e);
                for ($o=($i*3-2); $o <= $i*3; $o++) { 
                    $activity->categories()->attach($o);
                }        
            }
        
        }

    }
}
