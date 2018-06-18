<?php
namespace SON\Model;

abstract class Table
{
    protected $db;
    protected $table;
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function fetchAll()
    {
        $query = "select * from {$this->table}";
        return $this->db->query($query);
    }
    public function find($client_id)
    {
        $query = "select * from {$this->table} WHERE client_id = :client_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":client_id",$client_id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}