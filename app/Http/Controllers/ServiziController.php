<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiziController extends Controller
{
    public $services = [
        [
            "id" => 3,
            "title" => "Creazione di Portachiavi",
            "description" => "Design personalizzati per portachiavi unici, perfetti come regalo o per promozioni aziendali.",
            "img" => "img/portachiavi.jpg",
            "products" => [
                [
                    "id" => 1,
                    "title" => "Portachiavi in Legno Personalizzato",
                    "description" => "Portachiavi in legno con incisione personalizzata, ideale per regali speciali.",
                    "img" => "img/portachiavi_legno.jpg",
                ],
                [
                    "id" => 2,
                    "title" => "Portachiavi in Pelle con Logo",
                    "description" => "Elegante portachiavi in pelle con possibilità di incidere il logo aziendale.",
                    "img" => "img/portachiavi_pelle.jpg",
                ],
                [
                    "id" => 3,
                    "title" => "Portachiavi in Acrilico Colorato",
                    "description" => "Portachiavi in acrilico trasparente o colorato con design personalizzato.",
                    "img" => "img/portachiavi_acrilico.jpg",
                ],
                [
                    "id" => 5,
                    "title" => "Portachiavi in Metallo",
                    "description" => "Portachiavi in metallo con incisione di nome o logo, perfetto per eventi aziendali.",
                    "img" => "img/portachiavi_metallo.jpg",
                ],
            ],
        ],
        [
            "id" => 4,
            "title" => "Realizzazione di Cornici",
            "description" => "Cornici su misura, incise o tagliate per valorizzare i tuoi momenti speciali.",
            "img" => "img/cornice.jpg",
            "products" => [
                [
                    "id" => 1,
                    "title" => "Cornice in Legno Naturale",
                    "description" => "Cornice in legno naturale, ideale per foto in stile rustico.",
                    "img" => "img/cornice_legno_naturale.jpg",
                ],
                [
                    "id" => 4,
                    "title" => "Cornice in Plexiglass",
                    "description" => "Cornice moderna in plexiglass trasparente, ideale per foto artistiche.",
                    "img" => "img/cornice_plexiglass.jpg",
                ],
            ],
        ],
        [
            "id" => 5,
            "title" => "Lampade Personalizzate",
            "description" => "Illumina i tuoi spazi con lampade incise o tagliate secondo il tuo design.",
            "img" => "img/lampada.jpg",
            "products" => [
                [
                    "id" => 1,
                    "title" => "Lampada in Legno Incisa",
                    "description" => "Lampada in legno con incisione personalizzata per un effetto caldo e accogliente.",
                    "img" => "img/lampada_legno.jpg",
                ],
                [
                    "id" => 3,
                    "title" => "Lampada LED con Design Geometrico",
                    "description" => "Lampada LED con base geometrica, perfetta per ambienti minimalisti.",
                    "img" => "img/lampada_led.jpg",
                ],
                [
                    "id" => 4,
                    "title" => "Lampada a Sospensione Personalizzata",
                    "description" => "Lampada a sospensione personalizzabile, ideale per soggiorni o sale da pranzo.",
                    "img" => "img/lampada_sospensione.jpg",
                ],
                [
                    "id" => 5,
                    "title" => "Lampada da Scrivania con Incisioni",
                    "description" => "Lampada da scrivania elegante, con incisioni su misura per uffici o stanze studio.",
                    "img" => "img/lampada_scrivania.jpg",
                ],
            ],
        ],
        [
            "id" => 6,
            "title" => "Oggetti Decorativi Personalizzati",
            "description" => "Dai vita ai tuoi progetti con oggetti decorativi unici, perfetti per casa o ufficio.",
            "img" => "img/appendichiavi.jpg",
            "products" => [
                [
                    "id" => 1,
                    "title" => "Porta Candele Personalizzato",
                    "description" => "Set di candele profumate personalizzabili con incisioni o colori scelti.",
                    "img" => "img/porta_candele_personalizzato.jpg",
                ],
                [
                    "id" => 2,
                    "title" => "Vaso Decorativo in plexiglass",
                    "description" => "Vaso in plexiglass con design unico, personalizzabile con incisioni o motivi scelti.",
                    "img" => "img/vaso_plex.jpg",
                ],
                [
                    "id" => 3,
                    "title" => "Decorazioni da Parete Personalizzate",
                    "description" => "Oggetti decorativi da parete, come quadri e specchi, completamente personalizzabili.",
                    "img" => "img/decorazioni_parete.jpg",
                ],
                [
                    "id" => 4,
                    "title" => "Orologio da Parete Personalizzato",
                    "description" => "Orologio da parete con incisione personalizzata, perfetto per casa o ufficio.",
                    "img" => "img/orologio_parete.jpg",
                ],
            ],
        ],
    ];
    
    public function servizi() {
        $title = 'I Nostri Servizi';
        return view('servizi', ['titolo' => $title, 'servizi' => $this->services]);
    }

    public function details($id) {
        foreach($this->services as $service) {
            if($id == $service['id']) {
                return view('/scopri-di-più-servizi', ['service' => $service]);
            }
        }
    }
}
