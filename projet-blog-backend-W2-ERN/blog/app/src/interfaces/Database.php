<?php

namespace App\Interfaces;

interface Database
{
    public function getMySqlPDO(): \PDO;
    public function getPostgresPDO(): \PDO;
    public function getMongoPDO(): \PDO;
}
