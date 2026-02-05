<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('mass', 20, 10)->nullable();
            $table->decimal('vol_radius', 20, 10)->nullable();
            $table->decimal('equ_radius', 20, 10)->nullable();
            $table->decimal('pol_radius', 20, 10)->nullable();
            $table->decimal('flattening', 20, 10)->nullable();
            $table->decimal('density', 20, 10)->nullable();
            $table->decimal('gravity', 20, 10)->nullable();
            $table->decimal('axial_tilt', 20, 10)->nullable();
            $table->decimal('inclanation', 20, 10)->nullable();
            $table->decimal('escape_velocity', 20, 10)->nullable();
            $table->decimal('surface_area', 20, 10)->nullable();
            $table->decimal('water', 20, 10)->nullable();
            $table->decimal('land', 20, 10)->nullable();
            $table->decimal('volume', 20, 10)->nullable();
            $table->decimal('mean_stellar_irradiance', 20, 10)->nullable();
            $table->decimal('max_stellar_irradiance', 20, 10)->nullable();
            $table->decimal('min_stellar_irradiance', 20, 10)->nullable();
            $table->decimal('distance', 20, 10)->nullable();
            $table->decimal('periapsis', 20, 10)->nullable();
            $table->decimal('apoapsis', 20, 10)->nullable();
            $table->decimal('eccentricity', 20, 10)->nullable();
            $table->decimal('orbital_period', 20, 10)->nullable();
            $table->decimal('local_period', 20, 10)->nullable();
            $table->decimal('orbital_velocity', 20, 10)->nullable();
            $table->decimal('sid_rotation', 20, 10)->nullable();
            $table->decimal('syn_rotation', 20, 10)->nullable();
            $table->decimal('rotational_velocity', 20, 10)->nullable();
            $table->decimal('bond_albedo', 20, 10)->nullable();
            $table->decimal('other_albedo', 20, 10)->nullable();
            $table->decimal('average_temp', 20, 10)->nullable();
            $table->decimal('atm_pressure', 20, 10)->nullable();
            $table->text('atm_composition')->nullable();
            $table->decimal('total_moon_count', 20, 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
