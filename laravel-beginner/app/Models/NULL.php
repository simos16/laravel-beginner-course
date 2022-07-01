<?php

namespace App\Models;

class Note{
    //FUNZIONE PER RICHIAMARE TUTTI I  DATI

    public static function all(){
        return[
            [
                'id' => 1,
                'title' => 'Nota 1',
                'description' => 'Lorem ipsum '
            ],

            [
                'id' => 2,
                'title' => 'Nota 2',
                'description' => 'Lorem ipsum '
            ]
        ];
    }

    //FUNZIONE PER RICHIAMARE UNA SINGOLA NOTA
    public static function find($id){
        $notes = self::all();
        foreach($notes as $note){
            if($note['id'] == $id){
                return $note;
            }
        }
    }
}
