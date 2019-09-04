<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Services;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('services'); // todo remove this
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
        $this->seed();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }

    public function seed() {
        Services::create([
            'name_fr' => "Développement de votre site (de A à Z)",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Intégration système de paiement (Stripe, Paypal)",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Développement d'API",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Gestion/optimisation de base de donnée",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Accompagnement SEO",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Accompagnement dans la création ou la refonte de votre projet",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Accompagnement UI/UX",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Développement mobile iOS/Androïd",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Intégration front",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);
        Services::create([
            'name_fr' => "Conception de design",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);


        /*
            • Développement PHP (de préférence avec le Framework Laravel)
            • Développement Front (Intégration, design, ui/ux, responsive)
            • Développement d'API et gestion d'API externes
            • Accompagnement dans la création ou la refonte de votre projet
            • Accompagnement SEO
            •
            • Intégration système de paiement (Stripe, Paypal)
            • Développement mobile iOS/Androïd avec React Native __[Niveau Junior]__
         */
    }
}
