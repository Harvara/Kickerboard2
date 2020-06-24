<?php

namespace Factories;

interface FactoryInterface
{
    public function __construct();
    public function createFromDB();
    public function createNew(array $args);
}