<?php

namespace DAO;

interface DAOInterface
{
    public function select($identifier):array;
    public function update($attributes);
    public function delete($identifier);
}