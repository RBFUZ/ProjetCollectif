<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccueilController
{
    public function affichage()
    {
        ?>

        <html>
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">

                <title>Accueil</title>

                <style type="text/css">

                    .masthead.segment {
                      min-height: 700px;
                      padding: 5em 0em;
                    }
                   
                    
                    .masthead h1.ui.header {
                      margin-top: 3em;
                      margin-bottom: 0em;
                      font-size: 4em;
                      font-weight: normal;
                    }
                    .masthead h2 {
                    margin-top: 6em;
                    
                      font-size: 1.7em;
                      font-weight: normal;
                    }

                </style>
            </head>

        <?php

        return new Response(
            '<body class="ui inverted segment">
                <div class="pusher">
                <div class="ui inverted vertical masthead center aligned segment">

                <div class="ui container">
                  <div class="ui large secondary inverted pointing menu">
                    
                    <div class="left item">
                      <a class="ui inverted button" href="importation.html">Importer un fichier</a>
                    </div>
                    <div class="right item">
                      <a class="ui inverted button" href="connexion.html">Connexion</a>
                    </div>
                  </div>
                </div>

                <div class="ui text container">
                  <h1 class="ui inverted header">
                    Bonjour !
                  </h1>
                  <h2>Vous êtes connecté en tant que Admin/User</h2>
                  <div class="ui huge primary button" href="index.html"><i class="left arrow icon"></i>Entreprise </div>
                  <div class="ui huge primary button">Partenariat <i class="right arrow icon"></i></div>
                </div>

                </div>
                </div>
            </body>
        </html>'

        );
    }
}