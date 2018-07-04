<?php

namespace Utilisateurs\UtilisateursBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UtilisateursUtilisateursBundle extends Bundle
{
  public function getParent(){
    return 'FOSUserBundle';
  }
}
