<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
// use Kreait\Firebase\ServiceAccount;
// use Kreait\Firebase\Database;
// use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    
    public function index() {
        // $firebase = app('firebase.database');
        
        // $reference = $database->getReference(__DIR__.'/FirebaseKey.json');
        // $snapshot = $reference->getSnapshot();

        // $value = $snapshot->getValue();
        // return   $value;
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        // $firebase = (new Factory)
        // ->withServiceAccount(__DIR__.'/FirebaseKey.json')
        // ->withDatabaseUri('https://medicate-int.firebaseio.com/')
        // ->create();

        // $database      =   $firebase->getDatabase();
        // $createPost    =   $database->getReference('offers')->getvalue();      
        // return response()->json($createPost);



        // $database = app('firebase.database');
        // dd($database);
        // $reference = $database->getReference('https://medicate-int.firebaseio.com/offers');
        // $snapshot = $reference->getSnapshot();

        // $value = $snapshot->getValue();
        // return $value;


        // $factory = (new Factory())
        // ->withDatabaseUri('https://medicate-int.firebaseio.com');
        //  dd($factory);   
        return view('cpanel/firebase');
    }
}
