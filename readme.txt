arreglar els unsets que estan adalt de user
per corregir el back i el forward de login al panel

admin:
    - gestionar usuaris

    - gestionar bitllets
        - preus dels bitllets

    - gestionar rutes de trajecte
        - tenir l'opció de canviar les tres destinaccions possibles


vistaPerfil.php:
    - dos opcions:
        - un menu per defecte pel usuari normal
        - un altre menu pel usuari admin


- fer les gestions/els CRUDs en un element table, treballar
amb <td>s i <th>s

- fer un index.php on carregui els array de usuaris i després ens
redireccioni a la vista del login.php


-----------------------------------------------------------------------------
-----------------------------------------------------------------------------
-----------------------------------------------------------------------------


Només necesito dues classes

cada billet seria equivalent a un viatje realizat

faltar ficar data d'anada i data de tornada a la classe billet


------


CLASSE PERSONA

private $arrayBitllets;
private $arrayBitlletsGastats; <- això serà el historial


---------------------------------------------------

  clase Persona
    private $arrayBitlletsGastats;

vs
  clase Bitllet
    private $gastatBool;






