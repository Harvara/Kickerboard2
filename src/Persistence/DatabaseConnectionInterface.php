<?php

namespace Persistence;

interface DatabaseConnectionInterface
{
    public function createPDO():void;
    public function createSelectStatement(string $table, array $args): void;
    public function executeSelectStatement(array $values): array;
}