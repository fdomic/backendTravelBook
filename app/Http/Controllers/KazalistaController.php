<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kazalista;

class KazalistaController extends Controller
{
    public function index(){
        
        //CRO: Dohvati sve stavke iz tablice :
       //ENG: Get all items from table :
       $data = Kazalista::all();

       //CRO: Ako je prazna tablica:
       //ENG: If the table is empty:
       //error 404 Not found
       if($data->isEmpty())  {
           return response()->json(['Tablica je prazna!' ], 404);
       }

       //CRO:Ako postoji sadrzaj tablice:
       //ENG:If the tabel is not empty:   

       return response()->json([
           'success' => true,
           'data' => $data 
         ], 200);
   }

     public function show($id){

        //CRO: Dohvati drzavu prema id-u iz tablice Drzave :
        //ENG: Get items with id from table Drzave:
        $data = Kazalista::find($id);
        
        //CRO: Ako stvka ne postoji u tablici:
        //ENG: If item is not in table:
        //error 404 Not found
        if(is_null($data))  {
            return response()->json(['Ovaj podatak ne postoji!' ], 404);
        }
        
        //CRO:Ako postoji stavka u tablici:
        //ENG:If item is found in the table:
        return response()->json([
            'success' => true,
            'data' => $data 
            ], 200);
  
    }

    public function store(Request $request){
       

        $data = $request->only(`id`, `id_grada`, `ime_gradevine`, `arhitekt`, `godina_izgradnje`,
         `opis_kraci`, `opis_duzi`, `adresa`, `sluzbena_stranica`, `slika`, `created_at`, `updated_at`);

        $id = -1;
        if(isset($data['id'])) $id = $data["id"];
 

     
        $rules = [
        
            'id_grada' => ['numeric'],
            'ime_gradevine'=> ['string'],
            'arhitekt'=> ['string'],
            'godina_izgradnje'=> ['string'],
            'opis_kraci'=> ['string'],
            'opis_duzi'=> ['string'],
            'adresa'=> ['string'],
            'sluzbena_stranica'=> ['string'],
            'slika'=> ['string']

        ];
 
        if(!isset($data['id'])) {
            foreach ($rules as $key => $value) {
                array_unshift($value, 'required');
                $rules[$key] = $value;
            }
        }

       
 
        $model = null;
 
        /** 
         * If id was sent with the content then update the existing record, if not create a new record:
         */
        if(isset($data['id'])) {
            //UPDATE
            $model = Kazalista::find($data['id']);
        } else {
            //CREATE
            $model = new Kazalista();
        }
 
        $model->fill($data);
        $model->save();
 
        return response()->json([
            'success' => true,
            'data' => $model 
          ], 200);
    }

    public function destroy($id){
        
        //CRO: Dohvati stavku prema id-u iz tablice :
        //ENG: Get items with id from table :
       
        $data = Kazalista::find($id);

        //CRO: Ako stvka ne postoji u tablici:
        //ENG: If item is not in table:
        //error 404 Not found
        if(is_null($data))  {
            return response()->json(['Ovaj podatak ne postoji!' ], 404);
        }

        $data->delete();
        return response()->json([
            'success' => true,
            'data' => $data 
          ], 200);
    }
}
