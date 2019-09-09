<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\SeekedJob;

class CreateSeekedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seeked_jobs'); // todo remove this
        Schema::create('seeked_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
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
        Schema::dropIfExists('seeked_jobs');
    }

    public function seed() {
        SeekedJob::create([
            'name_fr' => 'Chef de projet Web',
            'name_pt' => '',
            'name_en' => '',
            'name_es' => '',

        ]);
        SeekedJob::create([
            'name_fr' => 'Développeur Web Fullstack Senior',
            'name_pt' => '',
            'name_en' => '',
            'name_es' => '',

        ]);
        SeekedJob::create([
            'name_fr' => 'CTO',
            'name_pt' => '',
            'name_en' => '',
            'name_es' => '',

        ]);

    }
}
