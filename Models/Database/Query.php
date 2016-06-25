<?php
class Query{
    private $driver;
    private $query;
    private $array = array();

    public function __construct($driver, $query)
    {
        $this->driver = $driver;
        $this->query = $query;
    }

    public function __set($property,$value)
    {
        if (property_exists($property,$value)) {
            $this->$property = $value;
        }
        return $this;
    }

    public function __get($value)
    {
        return $this->$value;
    }

    public function exec()
    {
        $splits = explode(" ",$this->query);

        if (substr_count($this->query,"SELECT") > 1 || substr_count($this->query,"INSERT") > 1 || substr_count($this->query,"UPDATE") > 1 || substr_count($this->query,"DELETE") > 1 || substr_count($this->query,"CREATE") > 1) {
            $result = $this->driver->conn->multi_query($this->query);
        } else {
            $result = $this->driver->conn->query($this->query);
        }

        if (!in_array("INSERT", $splits) || !in_array("UPDATE", $splits) || !in_array("DELETE", $splits)) {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($this->array, $row);
                }
            }
        } else {
            if (!$result === TRUE) {
                echo $this->driver->conn->error.'<br>';
            }
        }
    }

    public function fetch($prepend, $column, $append)
    {
        foreach ($this->array as $a) {
            echo $prepend . $a[$column] . $append;
        }
    }
}
