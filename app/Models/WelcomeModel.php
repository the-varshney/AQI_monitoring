<?php

namespace App\Models;

use CodeIgniter\Model;

class WelcomeModel extends Model
{
    protected $table = 'current_aqi';
    protected $returnType = 'array';
    protected $allowedFields = [
        'country', 'state', 'city', 'station', 'siteid', 
        'latitude', 'longitude', 'lastupdate', 'indexid', 
        'min', 'max', 'avg', 'hourly_sub_index', 
        'airqualityindexvalue', 'predominantparameter'
    ];

    // Fetch all weather data
    public function getAllWeatherData()
    {
        return $this->findAll();
    }
}
