<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteTest extends TestCase
{
    use DatabaseTransactions;
    //use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_note_list()
    {
    	
        //HAVING son las condiciones para realizar las pruebas
        Note::create(['note'=>'My first note']);
        Note::create(['note'=>'Second note']);

        
        //WHEN son las acciones que haría el usuario
        $this->get('/notes')
	        	//THEN donde agregamos las comprobaciones
	        	->see('My first note')
	        	->see('Second note');

        
    }

    public function test_create_note()
    {        

        // $this->post('notes')
        //     ->assertSee('Creating a note');
        $this->visit('notes')
                ->click('add a note')
                ->seePageIs('notes/create')
                ->see('create a note')
                ->type('It\'s a new note','note')
                ->press('Create note')
                ->seePageIs('notes')
                ->see('It\'s a new note')
                ->seeInDatabase('notes',['note'=>'It\'s a new note']);

        /*$this->browse(function($browser){
            $browser->post('notes')
                ->clickLink('add a note')
                ->assertSeePageIs('notes/create')
                ->assertSee('create a note')
                ->type('It\'s a new note','note')
                ->press('Create note')
                ->assertSeePageIs('notes')
                ->assertSee('It\'s a new note')
                ->assertSeeInDatabase('notes',['note'=>'It\'s a new note']);

        });*/
    }
}
