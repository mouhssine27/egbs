<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
 public function index(){
    $jobs = Jobs::all();

    $utilisateurs= DB::table('jobs') 
    ->join('utilisateurs', 'jobs.id', '=', 'utilisateurs.jobs_id')
    ->get();
   
     return view('index' , compact('jobs','utilisateurs'));
 }

 public function store(Request $request){
    $data= $request->all();
    $jobs = $data['jobs'];
    $selectJobs = DB::table('jobs')->where('name', $jobs)->first();
    $jobsid =  $selectJobs->id;


    if(isset($data['kids'])){
        Utilisateur::create(
            [
            'username' => $data['username'],
            'age'=>$data['age'],
            'date_of_birth'=>$data['birdthay'],
            'adresse'=>$data['adresse'],
            'married'=>$data['married'],
            'kids'=>$data['kids'],
            'jobs_id'=>$jobsid 
            ]);
    }else{
        Utilisateur::create(
            [
            'username' => $data['username'],
            'age'=>$data['age'],
            'date_of_birth'=>$data['birdthay'],
            'adresse'=>$data['adresse'],
            'married'=>$data['married'],
            'jobs_id'=>$jobsid 
            ]);
    }
    

        if(isset($data['jobName']) ){
            Jobs::create([
                'name' => $data['jobName'],
                'description'=>$data['descJob'],
            ]);
        };
       
        return redirect()->back()->with('success', 'User à éte crée avec success');
}

public function destroy($UserId)
{
    $utilisateur= Utilisateur::find($UserId);
    $utilisateur->delete();
    return redirect()->back()->with('success', "user à éte supprimé avec success");
}
}
