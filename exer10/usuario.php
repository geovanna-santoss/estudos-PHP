<?php
 class Usuario{
       public $nomeUsuario;
       public $logado = false;
       
       function autenticar()
       {
           $this->logado = true;
           echo "Usuário " . $this->nomeUsuario . " autenticado com sucesso!";
       }

 }
