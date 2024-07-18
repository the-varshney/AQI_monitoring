<?php

namespace App\Controllers;

use App\Models\WelcomeModel;

class Welcome extends BaseController
{
    public function index()
    {
        $model = new WelcomeModel();
        $data['weather_data'] = $model->getAllWeatherData();

        //Check if data is being fetched
        #echo '<pre>';
        #print_r($data['weather_data']);
        #echo '</pre>';
       # die(); // Terminate the script to see the results

        return view('welcome_message', $data);
    }
}
