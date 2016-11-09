<?php

class model {

    function fnOpenXml() {

        $xml = simplexml_load_file("db/Usuarios.xml");
        $data = "";
        $resulset = "";
        foreach ($xml->nodo_hijo as $nodo) {

            //echo $nodo->valor. " " . $nodo->valor[1];
            $data["User"] = trim($nodo->valor);
            $data["Pass"] = trim($nodo->valor[1]);
            $resulset[] = $data;
            $data = "";
        }


        return $resulset;
    }

    function agregarNodo($datos) {
        $archivo = new SimpleXMLElement('db/Usuarios.xml', null, true);
        $nodo_hijo = $archivo->addChild("nodo_hijo");
        $nodo_hijo->addChild('valor', $datos['usr']);
        $nodo_hijo->addChild('valor', $datos['pass']);
        $nodo_hijo->addChild('valor', $datos['Email']);
        $nodo_hijo->addChild('valor', $datos['Telefono']);
        $nodo_hijo->addChild('valor', $datos['TarjetaCredito']);
        $nodo_hijo->addChild('valor', $datos['Domicilio']);
        $archivo->asXml('db/Usuarios.xml');
    }

    function agregarLibro($datos) {
        $archivo = new SimpleXMLElement('db/Libros.xml', null, true);
        $nodo_hijo = $archivo->addChild("nodo_libro");
        $nodo_hijo->addChild('valor', $datos['Autor']);
        $nodo_hijo->addChild('valor', $datos['Titulo']);
        $nodo_hijo->addChild('valor', $datos['Descripcion']);
        $archivo->asXml('db/Libros.xml');
    }

}
