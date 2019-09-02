<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Project;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('projects'); // todo remove this
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->boolean('freelance')->default(false);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            //$table->string('color')->nullable();
            //$table->boolean('senior')->nullable(); // todo add to seed
            //$table->unsignedBigInteger('parent_id')->nullable();
            //$table->foreign('parent_id')->references('id')->on('skills');
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
        Schema::dropIfExists('projects');
    }

    public function seed()
    {
        Project::create([
            'slug' => 'remplafrance',
            'name' => 'RemplaFrance',
            'freelance' => false,
            'started_at' => \Carbon\Carbon::create(2017, 9, 1),
            'ended_at' => null,
        ]);
        Project::create([
            'slug' => 'victor-charles',
            'name' => 'Victor & Charles',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31),
        ]);
        Project::create([
            'slug' => 'bdbuzz',
            'name' => 'bdBuzz',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2014, 4, 1),
            'ended_at' => \Carbon\Carbon::create(2015, 7, 1), // todo trouver vrai date
        ]);
        Project::create([
            'slug' => 'nolim-bd',
            'name' => 'NolimBD',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31), // todo trouver vrai date
        ]);
        Project::create([
            'slug' => 'lookaya',
            'name' => 'Lookaya',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31), // todo trouver vrai date
        ]);


        /*);

        Project::create(['slug' => 'victor-charles', 'name' => '',]);*/


    }
}
