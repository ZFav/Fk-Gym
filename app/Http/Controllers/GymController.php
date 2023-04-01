<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    protected static $cards=
[
    [
        'id'=> 1,
        'image'=> 'https://images.wallpaperscraft.com/image/single/gym_disks_weight_118105_320x480.jpg',
        'text'=> 'Prova i pesi massimi disponibili',
        'title'=> 'Lezione di sala comune',

    ],
    [
        'id'=> 2,
        'image'=> 'https://images.wallpaperscraft.com/image/single/dumbbells_gym_fitness_220152_320x480.jpg',
        'text'=> 'Vieni a provare i allenamenti specifico',
        'title'=> 'Alzamento del gomito?',

    ],
    [
        'id'=> 3,
        'image'=> 'https://images.wallpaperscraft.com/image/single/gymnastic_rings_rings_gym_172793_320x480.jpg',
        'text'=> 'Vuoi volare come fa Franco?',
        'title'=> 'Vola',

    ],
    [
        'id'=> 4,
        'image'=> 'https://images.wallpaperscraft.com/image/single/exercise_bikes_exercise_equipment_gym_209091_320x480.jpg',
        'text'=> 'Esercizio piu odiato di tutti',
        'title'=> 'Pedala pedala che prima o poi arrivi',

    ]
];

    public function pagina0(){
        return view('welcome',['items'=>self::$cards]);
    }

    public function pagina1(){
        
        return view('structur');
    }
    

    public function pagina2(){
        return view('maps');
    }

    public function pagina3(){
        return view('courses',['items'=>self::$cards]);
    }

    public function paginaDetail($id){
        foreach (self::$cards as $item) {
            if ($id==$item['id']){
            return view('detail',['item' => $item]);
            }
        }
        abort(404); 
    }

   public function paginaForm(){
    return view('forms');
   }
     

}
