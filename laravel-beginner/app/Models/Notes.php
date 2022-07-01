<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Notes extends Model
{
    use HasFactory;

    /*const LENGHT_EXCERPT = 100;

    public function excerpt(){
        return Str::limit($this->contenuto, Notes::LENGHT_EXCERPT);
    } */

   // protected  $fillable = ['titolo', 'autore', 'email','tags', 'contenuto'];

protected  $dates = [
    'created_at'
];

public function getCreatedFormatAttribute(){
    return $this->created_at->format('d-m-Y');
}
protected  $appends = ['created_format'];


public function scopeFilter($query, array $filters){
    //dd($filters['tag']);

    if($filters['tag'] ?? false){
        $query->where('tags', 'like', '%' .request('tag') . '%');
    }

    if($filters['search'] ?? false){
        $query->where('titolo', 'like', '%' .request('search') . '%')
             -> orwhere('contenuto', 'like', '%' .request('search') . '%')
            -> orwhere('tags', 'like', '%' .request('search') . '%');
    }
}

public function user(){
    return $this->belongsTo(User::class, 'id_user');
}
}

