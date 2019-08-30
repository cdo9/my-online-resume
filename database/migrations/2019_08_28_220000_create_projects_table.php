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
        Project::create(['slug' => 'remplafrance', 'name' => 'RemplaFrance',]);
        /*Project::create(['slug' => 'bdbuzz', 'name' => 'bdBuzz',]);
        Project::create(['slug' => 'lookaya', 'name' => 'Lookaya',]);
        Project::create(['slug' => 'nolim-bd', 'name' => 'NolimBD',]);
        Project::create(['slug' => 'victor-charles', 'name' => '',]);*/


    }
}
