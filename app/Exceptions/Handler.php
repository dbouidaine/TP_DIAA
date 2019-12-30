<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
/*!

 *cette classe est essentiellement une file de messages. Vous lui
 * envoyez un message et il finira par le traiter en appelant sa méthode
 * d'exécution et en lui transmettant le message. Étant donné que ces
 * appels seront toujours exécutés dans l'ordre des messages reçus
 * sur le même thread, vous pouvez sérialiser les événements.

*/
class Handler extends ExceptionHandler
{
    /**
     * Une liste des types d'exceptions qui ne doivent pas être signalés.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * Une liste des entrées qui ne sont jamais flashées pour les exceptions de validation.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Signaler ou consigner une exception.
     *
     * C’est un endroit idéal pour envoyer des exceptions à Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Rendre une exception dans une réponse HTTP.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
