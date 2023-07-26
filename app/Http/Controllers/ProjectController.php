<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/comments/1');
    
        $jsonData = $response->json();
          
        dd($jsonData);
    }
    public function store(){
        
        $response = Http::post('https://jsonplaceholder.typicode.com/comments', [
            'title' => 'This is test from ItSolutionStuff.com',
            'body' => 'This is test from ItSolutionStuff.com as body',
            'name'=> 'Sarvar',
        ]
    );

$jsonData = $response->json();

dd($jsonData);
    }

    public function update()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
                    'title' => 'Update1',
                    'body' => 'Update2',
                ]);
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }
    public function delete()
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }
}

