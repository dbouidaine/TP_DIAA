<?php

namespace Tests\Unit;

use App\Administratif;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAjouterAdministratif()
    {
        $this->visit('/WebMaster')
            ->type('samihh', 'nom')
            ->type('1999-07-14', 'dateNaissance')
            ->type('BLIDA', 'adresse')
            ->type('email@gggmglg.com', 'email')
            ->type('logggg4n', 'login')
            ->type('ggngng', 'motPasse')
            ->press('Ajouter')
            ->see('L\'administratif a bien été ajouté dans la BDD de l\'application !')
            ->seeInDatabase('administratifs', ['nom' => 'samihh'])
            ->seeInDatabase('administratifs', ['dateNaissance' => '1999-07-14'])
            ->seeInDatabase('administratifs', ['adresse' => 'BLIDA'])
            ->seeInDatabase('administratifs', ['email' => 'email@gggmglg.com'])
            ->seeInDatabase('administratifs', ['login' => 'logggg4n'])
            ->seeInDatabase('administratifs', ['motPasse' => 'ggngng']);
        Administratif::where('nom', 'samihh')->delete();
    }

    public function testConsulterEtudiant()
    {
        $this->visit('/rech')
            ->see('Matricule étudiant')
            ->type('17/120', 'matricule')
            ->press('Chercher')
            ->Dontsee('Matricule étudiant')
            ->seeInDatabase('etudiants', ['matricule' => '17/120']);
    }
}
