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
            $table->text('description_fr')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->string('area')->nullable();
            $table->string('position')->nullable();
            $table->string('color')->nullable();
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
            'position' => 'Senior Fullstack Dev',
            'area' => 'Neuilly-sur-Seine, France',
            'color' => '#1e3799',
            'freelance' => false,
            'started_at' => \Carbon\Carbon::create(2017, 9, 1),
            'ended_at' => null,
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);
        Project::create([
            'slug' => 'victor-charles',
            'name' => 'Victor & Charles',
            'position' => 'Fullstack Dev',
            'area' => 'Paris, France',
            'color' => '#1dabe3',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31),
            'description_fr' => '',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);
        Project::create([
            'slug' => 'bdbuzz',
            'name' => 'bdBuzz (Nenuphar Development)',
            'position' => 'Front Dev',
            'area' => 'Neuilly-sur-Seine, France',
            'color' => '#d3d137',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2014, 4, 1),
            'ended_at' => \Carbon\Carbon::create(2015, 7, 1), // todo trouver vrai date
            'description_fr' => '',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);
        Project::create([
            'slug' => 'nolim-bd',
            'name' => 'NolimBD (Carrefour)',
            'position' => 'Fullstack Dev',
            'area' => 'Paris, France',
            'color' => '#045499',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31), // todo trouver vrai date
            'description_fr' => '',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);
        Project::create([
            'slug' => 'lookaya',
            'name' => 'Lookaya',
            'position' => 'Fullstack Dev',
            'area' => 'Neuilly-sur-Seine, France',
            'color' => '#146ccb',
            'freelance' => true,
            'started_at' => \Carbon\Carbon::create(2015, 6, 1), // todo trouver vrai date
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31), // todo trouver vrai date
            'description_fr' => '',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);


    }
}
