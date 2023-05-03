<?php

namespace App\Models;
use Illuminate\support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function clients(){
        return $this -> belongsTo(Client::class);
    }

    public static function getproductByprice($price){
        $resultat = DB::select('CALL ProductNameByPrice(?)', 
        array($price));
        return $resultat;
    }

}
