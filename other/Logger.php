<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 09/03/17
 * Time: 01:01
 */
interface Logger
{
    public function __construct(Adapter $database);
    public function logger($message);
}

class DatabaseLogger implements Logger
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function logger($message)
    {
        $this->Database->insert(['message'=>$message]);
    }
}

class FileLogger implements Logger
{
    public function __construct(FileManager $fileManager)
    {
        $this->FileManager = $fileManager;
    }
    public function logger($message)
    {
        $this->FileManager->create('error.log', $message);
    }
}