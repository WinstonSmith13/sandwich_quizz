<?php


namespace WINSTON\Utils\Php;


class Outils {

    /* Nettoie les données postées avant stockage */
    static public function cleanUpValues($allValues) {
        foreach ($allValues as $key => $value) {
            if (is_array($value)) {
                $allValues[$key] = self::cleanUpValues($value);
            } else {
                $allValues[$key] = addslashes(htmlspecialchars(trim(strip_tags($value))));
            }
        }
        return $allValues;
    }

    /* Fonction qui s'assure qu'un appel de page PHP est bien effectué en AJAX */
    static public function ajaxCheck(): bool
    {
        $check=false;
        $requestedWith = $_SERVER['HTTP_X_REQUESTED_WITH'];

        if(!empty($requestedWith) && strtolower($requestedWith) == 'xmlhttprequest') {
            $check = true;
        }
        return $check;
    }

    /* Fonction qui renvoie les segments de l'url courante */
    static public function getUriSegments(): array
    {
        return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    /* Fonction qui s'assure qu'un appel de page PHP est bien effectué depuis le nom de domaine référencé */
    static public function domainCheck(): bool
    {
        global $domain;
        $check=false;
        $referer = substr($_SERVER['HTTP_REFERER'],0,strlen($domain));
        if( $referer == $domain ) {
            $check = true;
        }
        return $check;
    }
}
