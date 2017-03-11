<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 11/03/17
 * Time: 01:16
 */
interface Aves
{
    public function andar();
}

interface AvesQueVoam extends Aves
{
    public function voar();
}

interface AvesQueNadam extends Aves
{
    public function nadar();
}

class Pato implements AvesQueVoam, AvesQueNadam
{
    public function voar()
    {

    }
    public function nadar()
    {

    }
    public function andar()
    {

    }
}

class Pinguim implements AvesQueNadam
{
    public function nadar()
    {

    }
    public function andar()
    {

    }
}

class Andorinha implements AvesQueVoam
{
    public function voar()
    {

    }
    public function andar()
    {

    }
}

class AmbienteAviario
{
    /*
     * Pinguim
     * Andorinha
     * Pato
     */
    public function __construct(Aves $ave)
    {
        $ave->andar();
    }
}

class AmbienteAgua
{
    /*
     * Pinguim
     * Pato
     */
    public function __construct(Aves $ave)
    {
        $ave->nadar();
    }
}