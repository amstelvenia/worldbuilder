<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Planet extends Model
{
    protected $fillable = [
        'naam',
        'mass',
        'vol_radius',
        'equ_radius',
        'pol_radius',
        'flattening',
        'density',
        'gravity',
        'axial_tilt',
        'inclanation',
        'escape_velocity',
        'survace_area',
        'water',
        'land',
        'volume',
        'mean_stellar_irradiance',
        'max_stellar_irradiance',
        'min_stellar_irradiance',
        'distance',
        'periapsis',
        'apoapsis',
        'eccentricity',
        'orbital_period',
        'local_period',
        'orbital_velocity',
        'sid_rotation',
        'syn_rotation',
        'rotational_velocity',
        'bond_albedo',
        'other_albedo',
        'average_temp',
        'atm_pressure',
        'atm_composition',
    ];

    protected $table = 'planets';

    use HasFactory;
}
