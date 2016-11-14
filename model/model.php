<?php

class model {

    function consultaUsuarios() {
        $xml = simplexml_load_file("db/Usuarios.xml");
        $data = "";
        $resulset = "";
        foreach ($xml->nodo_hijo as $nodo) {
            $data["usr"] = trim($nodo->valor[1]);
            $data["pass"] = trim($nodo->valor[2]);
            $resulset[] = $data;
            $data = "";
        }
        return $resulset;
    }

    function consultaDatosUsuario() {
        $xml = simplexml_load_file("db/Usuarios.xml");
        $data = "";
        $resulset = "";
        foreach ($xml->nodo_hijo as $nodo) {
            $data["id"] = trim($nodo->valor);
            $data["usr"] = trim($nodo->valor[1]);
            $data["pass"] = trim($nodo->valor[2]);
            $data["Email"] = trim($nodo->valor[3]);
            $data["Telefono"] = trim($nodo->valor[4]);
            $data["TarjetaCredito"] = trim($nodo->valor[5]);
            $data["Domicilio"] = trim($nodo->valor[6]);
            $data["tipoTarjeta"] = trim($nodo->valor[7]);
            $data["fechaExpiracion"] = trim($nodo->valor[8]);
            $resulset[] = $data;
            $data = "";
        }
        return $resulset;
    }

    function agregarUsuario($datos) {
        $xml = simplexml_load_file("db/Usuarios.xml");
        $cantidadUsuarios = 0;
        foreach ($xml->nodo_hijo as $nodo) {
            $cantidadUsuarios++;
        }

        $archivo = new SimpleXMLElement('db/Usuarios.xml', null, true);
        $nodo_hijo = $archivo->addChild("nodo_hijo");
        $nodo_hijo->addChild('valor', $cantidadUsuarios);
        $nodo_hijo->addChild('valor', $datos['usr']);
        $nodo_hijo->addChild('valor', $datos['pass']);
        $nodo_hijo->addChild('valor', $datos['Email']);
        $nodo_hijo->addChild('valor', $datos['Telefono']);
        $nodo_hijo->addChild('valor', $datos['TarjetaCredito']);
        $nodo_hijo->addChild('valor', $datos['Domicilio']);
        $nodo_hijo->addChild('valor', $datos['tipoTarjeta']);
        $nodo_hijo->addChild('valor', $datos['fechaExpiracion']);
        $archivo->asXml('db/Usuarios.xml');
    }

    function abrirBdLibros() {

        $xml = simplexml_load_file("db/Libros.xml");
        $data = "";
        $resulset = "";
        foreach ($xml->nodo_libro as $nodo) {

            //echo $nodo->valor. " " . $nodo->valor[1];
            $data["id"] = trim($nodo->valor);
            $data["Autor"] = trim($nodo->valor[1]);
            $data["Titulo"] = trim($nodo->valor[2]);
            $data["Descripcion"] = trim($nodo->valor[3]);
            $data["Caratula"] = trim($nodo->valor[4]);
            $data["Precio"] = trim($nodo->valor[5]);
            $resulset[] = $data;
            $data = "";
        }
        return $resulset;
    }

    function agregarLibro($datos) {
        $xml = simplexml_load_file("db/Libros.xml");
        $cantidadLibros = 0;
        foreach ($xml->nodo_libro as $nodo) {
            $cantidadLibros++;
        }

        $archivo = new SimpleXMLElement('db/Libros.xml', null, true);
        $nodo_hijo = $archivo->addChild("nodo_libro");
        $nodo_hijo->addChild('valor', $cantidadLibros);
        $nodo_hijo->addChild('valor', $datos['Autor']);
        $nodo_hijo->addChild('valor', $datos['Titulo']);
        $nodo_hijo->addChild('valor', $datos['Descripcion']);
        $nodo_hijo->addChild('valor', $datos['Caratula']);
        $nodo_hijo->addChild('valor', $datos['Precio']);
        $archivo->asXml('db/Libros.xml');
    }

}