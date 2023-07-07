<?php

namespace App\Controller;

use Twig\Environment;

abstract class AbstractController // base de tous les controleurs pour initialiser le twig
{
  public function __construct(  // constructeur
    protected Environment $twig
  ) {
  }
}
