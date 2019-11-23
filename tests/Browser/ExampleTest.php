<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testConsulterEtudiant()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rech')
                ->type('matricule', '17/120')
                ->press('@chercher')
                ->assertSee('Fiche d\'étudiant');
        });
    }

    public function testAjouterAdministratif()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/WebMaster')
                ->type('nom', 'samih')
                ->type('dateNaissance', '14/07/1999')
                ->type('adresse', 'BLIDA')
                ->type('email', 'sa@gmail.com')
                ->type('login', 'root')
                ->type('motPasse', 'hghjhmg')
                ->press('@ajouter')
                ->assertsee('L\'administratif a bien été ajouté dans la BDD de l\'application !');
        });
    }
}
