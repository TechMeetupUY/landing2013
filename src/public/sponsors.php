<?php

class Sponsors
{
    protected $sponsors = array();

    function add($logo, $url, $nombre)
    {
        $this->sponsors[$nombre] = array(
            'logo' => $logo,
            'nombre' => $nombre,
            'url' => $url
        );
    }

    function get()
    {
    	return $this->sponsors;
    }
}

$S = new Sponsors();
$S->add('case.png', 'http://case-inc.com', 'CASE');
$S->add('moove-it.png', 'http://moove-it.com', 'moove-it');
$S->add('guruhub', 'http://guruhub.com.uy', 'Guruhub');

print_r($S->get());
