<?php
class Database extends PDO {
	
	public function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}
	
	public function select($sql, $array = array(), $fetchMode = 'array') {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
		if ($fetchMode == 'array') {
			return $sth->fetch(PDO::FETCH_ASSOC);
		}
		else {
			return $sth->rowCount();
		} 
    }
    

    public function insert($table, $data) {
        ksort($data);
        
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);

        }
        $sth->execute();
		if ($sth) {
			return true;
		}
    }

    /**
     * @param $table
     * @param $data
     * @param $where
     * @return bool
     */
    public function update($table, $data, $where) {
        ksort($data);
        
        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
		if ($sth) {
			return true;
		}
    }

    public function delete($table, $where, $limit = 1) {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }
	
}
