<?php
class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=e_shop;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production
    }

    public function insertproducts($name, $price, $size, $color)
    {
        $stmt = $this->db->prepare('INSERT INTO products (name, price, size, color) VALUES (?, ?, ?, ?)'); 
        $stmt->execute([$name, $price, $size, $color]);
        
    }

    public function getproducts()
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getproduct($id)
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function removeproduct($id)
    {   
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = ?'); 
        $stmt->execute([$id]);
    }


    public function insertorderid($userid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders (user_id, created) VALUES (?, NOW())'); 
        $stmt->execute([1]);
        return $this->db->lastInsertId();

    }

    public function insertorderproduct($productid, $orderid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES (?, ?)'); 
        $stmt->execute([$productid, $orderid]);
        return $this->db->lastInsertId();
    }
}
