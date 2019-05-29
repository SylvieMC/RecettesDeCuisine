<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Avatar extends Model
{
	protected $table = 'avatars';
	
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id');
    }

    public static function getAvatar()
    {
    	$client = new Client(array('verify' => false));
        $response = $client->request('GET', 'https://pixabay.com/api/?key=2716342-f979de508813b05d3e38c20a0&per_page=200');
        $responseBody = $response->getBody();
        $result = json_decode($responseBody, true);
        return $result;
    }
}
