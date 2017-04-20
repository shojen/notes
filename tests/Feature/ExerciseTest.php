<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExerciseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_sumary_and_notes_details()
    {
    	$category=\App\Category::create(['name'=>'Tareas']);

    	$text='Begin of the note. Ut laudantium numquam voluptates quia recusandae porro dignissimos. Maiores assumenda saepe commodi similique et a explicabo. Numquam cum voluptate corrupti recusandae quos. End of the note.';

    	$note =\App\Note::create(['note'=>$text]);

    	$category->notes()->save($note);

        $this->visit('notes')
        	->see('Begin of the note')
        	->dontSee('End of the note')
        	->seeLink('View note')
        	->click('View note')
        	->see($text);
    }
}
