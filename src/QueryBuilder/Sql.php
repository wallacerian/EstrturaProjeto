<?php

namespace SON\Db\QueryBuilder;

class Sql implements Strategy
{
    public function table(string $table): Strategy
    {
        $this->table = $table;
        return $this;
    }

    public function select($collumns = '*') : Strategy
    {
       if(is_array($collums)){
           $collumns = implode(',', $collumns);
       }
       $this->sql = sprintf('SELECT %s FROM %s;', $collumns, $this->table);
       return $this;
    }

    public function getQuery(): string
    {
        return $this->sql;
    }
}
