<?php
require_once 'Database.php';


class Model
{
    protected $db;
    protected $table;
    protected $joins = [];
    protected $where = [];
    protected $orderBy = '';
    protected $limit = '';

    public function __construct($table)
    {
        $dbConfig = require_once __DIR__ . '../../config/database.php';
        $this->db = Database::getInstance($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);
        $this->table = $table;
    }

    public function join($table, $condition, $type = 'INNER')
    {
        $this->joins[] = "$type JOIN $table ON $condition";
        return $this;
    }

    public function where($condition, $value = null)
    {
        if ($value !== null) {
            $condition = "$condition = '$value'";
        }
        $this->where[] = $condition;
        return $this;
    }

    public function orderBy($column, $direction = 'ASC')
    {
        $this->orderBy = "ORDER BY $column $direction";
        return $this;
    }

    public function limit($limit, $offset = 0)
    {
        $this->limit = "LIMIT $offset, $limit";
        return $this;
    }

    public function get()
    {
        $sql = "SELECT * FROM {$this->table}";

        if (!empty($this->joins)) {
            $sql .= ' ' . implode(' ', $this->joins);
        }

        if (!empty($this->where)) {
            $sql .= ' WHERE ' . implode(' AND ', $this->where);
        }

        $sql .= ' ' . $this->orderBy . ' ' . $this->limit;

        $result = $this->db->query($sql);
        $rows = [];
        while ($row = $this->db->fetch($result)) {
            $rows[] = $row;
        }

        $this->joins = [];
        $this->where = [];
        $this->orderBy = '';
        $this->limit = '';

        return $rows;
    }

    public function findAll()
    {
        return $this->get();
    }

    public function findById($id)
    {
        return $this->where('id', $id)->get()[0] ?? null;
    }

    public function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $this->db->query("INSERT INTO {$this->table} ($columns) VALUES ($values)");
    }

    public function update($id, $data)
    {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = '$value'";
        }
        $set = implode(", ", $set);
        $this->db->query("UPDATE {$this->table} SET $set WHERE id = $id");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id = $id");
    }
}
