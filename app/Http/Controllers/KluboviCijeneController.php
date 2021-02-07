<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KluboviCijene;

class KluboviCijeneController extends Controller
{

    public function index(){
        
        //CRO: Dohvati sve stavke iz tablice :
       //ENG: Get all items from table :
       $data = KluboviCijene::all();

       //CRO: Ako je prazna tablica:
       //ENG: If the table is empty:
       //error 404 Not found
       if($data->isEmpty())  {
           return response()->json(['Tablia je prazna!' ], 404);
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
        $data = KluboviCijene::find($id);
        
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
       

        $data = $request->only(`id` ,`karta`, `trajanje_karte`, `opis`, `cijena`, `created_at`, `updated_at`);

        $id = -1;


        if(isset($data['id'])) $id = $data["id"];
 
        $rules = [
            'id_javni_prijevoz' => ['numeric'] ,
            'karta' => ['string'],
            'opis' => ['string'],
            'trajanje_karte' => ['numeric'],
            'cijena'=> ['numeric'],
          
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
            $model = KluboviCijene::find($data['id']);
        } else {
            //CREATE
            $model = new KluboviCijene();
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
       
        $data = KluboviCijene::find($id);

        //CRO: Ako stvka ne postoji u tablici:
        //ENG: If item is not in table:
        //error 404 Not found
        if(is_null($data))  {
            return response()->json(['Ovaj artikl ne postoji!' ], 404);
        }

        $data->delete();
        return response()->json([
            'success' => true,
            'data' => $data 
          ], 200);
    }


}
