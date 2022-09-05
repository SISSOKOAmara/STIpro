<?php

namespace App\Http\Controllers;

use App\Models\Reparations;
use Illuminate\Http\Request;

class JointableController extends Controller
{
    function index()
    {
    	$data = Reparations::join('state', 'state.country_id', '=', 'country.country_id')
              		->join('city', 'city.state_id', '=', 'state.state_id')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);

       	/*Above code will produce following query
        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`
        */

        return view('join_table', compact('data'));
    }
}
