<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $client;

    public function __construct(){
        $this->client = new Client();
    }

    public function home(){
        $items= $this->get_data('http://test.vertilogic.com/products.php?page=0');
        return view('welcome', ['items'=>$items]);
    }

    public function show($id){
        $item = $this->get_data('http://test.vertilogic.com/products.php?id='.$id);
        return view('show', ['item'=> $item]);
    }

    public function homeAPI($pageNumber){
        $items = $this->get_data('http://test.vertilogic.com/products.php?page='.$pageNumber);
        return view('_items', ['items'=>$items]);
    }


    private function get_data($url){
        return json_decode($this->client->request('GET', $url)->getBody());
    }
}
