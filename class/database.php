<?php
class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=e_shop;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production
    }

    public function query($query){
        $stmt = $this-db->prepare('INSERT INTO products (name, price, size, color) VALUES (?, ?, ?, ?) ');
        $stmt->execute();
    }
}
