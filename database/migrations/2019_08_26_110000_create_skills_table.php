<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Skill;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('skills'); // todo remove this
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('color')->nullable();
            $table->boolean('senior')->nullable(); // todo add to seed
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('skills');
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
        Schema::dropIfExists('skills');
    }

    public function seed() {
        // Colors : https://github.com/ozh/github-colors/blob/master/colors.json
        Skill::create(['slug' => 'html', 'name' => 'HTML', 'color' => '#e34c26', 'parent_id' => null]);

        Skill::create(['slug' => 'css', 'name' => 'CSS', 'color' => '#563d7c', 'parent_id' => null]);
        $skillCss = Skill::where('slug', 'css')->first();
        Skill::create(['slug' => 'sass', 'name' => 'SASS', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'responsive', 'name' => 'Responsive', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'mobile-first', 'name' => 'Mobile first', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'bem', 'name' => 'BEM Notation', 'color' => '', 'parent_id' => $skillCss->id]);

        Skill::create(['slug' => 'php', 'name' => 'PHP', 'color' => '#4F5D95', 'parent_id' => null]);
        $skillPhp = Skill::where('slug', 'php')->first();
        Skill::create(['slug' => 'laravel', 'name' => 'Laravel', 'color' => '', 'parent_id' => $skillPhp->id]);
        Skill::create(['slug' => 'symfony', 'name' => 'Symfony', 'color' => '', 'parent_id' => $skillPhp->id]);
        Skill::create(['slug' => 'yii', 'name' => 'Yii', 'color' => '', 'parent_id' => $skillPhp->id]);

        Skill::create(['slug' => 'sql', 'name' => 'SQL', 'color' => '#dad8d8', 'parent_id' => null]);

        Skill::create(['slug' => 'js', 'name' => 'JavaScript', 'color' => '#f1e05a', 'parent_id' => null]);
        $skillJs = Skill::where('slug', 'js')->first();
        Skill::create(['slug' => 'vue', 'name' => 'Vue.js', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'react', 'name' => 'React.js', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'react-native', 'name' => 'React Native', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'jquery', 'name' => 'jQuery', 'color' => '', 'parent_id' => $skillJs->id]);

        Skill::create(['slug' => 'design', 'name' => 'Design', 'color' => '#e84393', 'parent_id' => null]);
        $skillDesign = Skill::where('slug', 'design')->first();
        Skill::create(['slug' => 'ui-ux', 'name' => 'UI/UX', 'color' => '', 'parent_id' => $skillDesign->id]);

        Skill::create(['slug' => 'seo', 'name' => 'SEO', 'color' => '#dad8d8', 'parent_id' => null]);
    }
}
