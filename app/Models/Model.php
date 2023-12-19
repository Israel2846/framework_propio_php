<?php

namespace App\Models;

use mysqli;

class Model
{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;
    protected $query;
    protected $table;

    public function __construct()
    {
        $this->connection();
    }

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->connection->connect_error) {
            die('Error de conexión' . $this->connection->connect_error);
        }
    }

    public function query($sql)
    {
        $this->query = $this->connection->query($sql);

        return $this;
    }

    public function first()
    {
        return $this->query->fetch_assoc();
    }

    public function get()
    {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    // CONSULTAS
    public function all()
    {
        // SELECT * FROM tabla

        $sql = "SELECT * FROM {$this->table}";

        return $this->query($sql)->get();
    }

    public function find($id)
    {
        // SELECT * FROM tabla WHERE id = *

        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";

        return $this->query($sql)->first();
    }

    public function where($column, $operator, $value = null)
    {
        // SELECT * FROM tabla WHERE $column = $value

        if ($value == null) {
            $value = $operator;
            $operator = '=';
        }

        $sql = "SELECT * FROM {$this->table} WHERE {$column} {$operator} '{$value}'";

        $this->query($sql);

        return $this;
    }

    public function create($data)
    {
        // INSERT INTO tabla (column1, column2, ...) values ('', '', ...)

        $columns = array_keys($data);
        $columns = implode(', ', $columns);

        $values = array_values($data);
        $values = "'" . implode("', '", $values) . "'";

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";

        $this->query($sql);

        $insert_id = $this->connection->insert_id;

        return $this->find($insert_id);
    }

    public function update($id, $data)
    {
        // UPDATE tabla SET column1 = '', column2 = '', ... WHERE id = $id

        $fields = [];

        foreach ($data as $key => $value) {
            $fields[] = "{$key} = '{$value}'";
        }

        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE id = {$id}";

        $this->query($sql);

        return $this->find($id);
    }
}