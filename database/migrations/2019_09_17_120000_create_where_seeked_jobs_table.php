<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\WhereSeekedJob;

class CreateWhereSeekedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('where_seeked_jobs'); // todo remove this
        Schema::create('where_seeked_jobs', function (Blueprint $table) {
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
        Schema::dropIfExists('where_seeked_jobs');
    }

    public function seed() {
        WhereSeekedJob::create([
            'name_fr' => 'Genève',
            'name_pt' => 'Genebra',
            'name_en' => 'Geneva',
            'name_es' => '',

        ]);
        WhereSeekedJob::create([
            'name_fr' => 'Paris',
            'name_pt' => 'Paris',
            'name_en' => 'Paris',
            'name_es' => '',

        ]);
        WhereSeekedJob::create([
            'name_fr' => 'Lisbonne',
            'name_pt' => 'Lisboa',
            'name_en' => 'Lisbon',
            'name_es' => '',

        ]);
        WhereSeekedJob::create([
            'name_fr' => 'en télétravail',
            'name_pt' => 'em teletrabalho',
            'name_en' => 'teleworking',
            'name_es' => '',

        ]);
    }
}
