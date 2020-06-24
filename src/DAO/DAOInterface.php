<?php

namespace DAO;

interface DAOInterface
{
    public function select($identifier);
    public function update($attributes);
    public function delete($identifier);
}