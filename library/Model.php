<?php
/**
 * Created by Mahdi Hamdi.
 * User: M4hdi
 * Date: 7/18/2019
 * Time: 9:57 PM
 */
class Model {
    
    private $_pdo ;
    private $_query = '';
    protected $table = '';
    protected $pk = '';

    /**
     * PDO Create
     */
    function __construct() {
       
        $dns = Config::get("driver");
        $dbName = Config::get("dbName");
        $username = Config::get("dbUsername");
        $password = Config::get("dbPassword");
        
        if($this->table == ''){
            $this->table = get_class($this);
        }
        
        $this->_pdo= new PDO($dns . ':host=localhost;dbname=' . $dbName, $username, $password);
    }


    /**
     * Select a row and return value row
     * @param String $fields
     * @param String $where
     * @param String $order
     * @param int | String $limit
     * @return array 
     */

    function get_query($fields = '*', $where="1=1", $order = 'ASC', $limit = '0') {
        $limit_sql="";
        if($limit!='0'){
            $limit_sql = " LIMIT ".$limit;
        }
        $this->_query = "select $fields from {$this->table} where {$where}  ORDER BY id $order $limit_sql";
        return $this->_pdo->query($this->_query);

    }

    function get_row($fields = '*', $where = ' 1=1 ', $order = '', $limit = 10) {
        $this->_query = "select $fields from {$this->table} where {$where} ORDER BY {$this->pk} $order LIMIT $limit";
        $stm = $this->_pdo->query($this->_query);
        return $stm->fetch();
    }

    
    /**
     * Delete a row
     * @param int $id 
     */
    function delete($id) {
        $this->_query = "delete from $this->table where id = '$id'";
        $this->_pdo->exec($this->_query);
    }

    
    /**
     * Edit a row
     * $data = array() ; // 
     * @param string $data
     * @param string $where 
     * 
     */
    function update($data, $where = ' 1 = 1 ') {
        $this->_query = " update {$this->table} set $data where $where";
        $this->_pdo->exec($this->_query);
    }

    /**
     * Insert data
     * @param string $fields
     * @param string $data 
     */
    function insert($fields, $data) {
        $this->_query = " insert into $this->table ($fields) VALUES ($data)";
        $this->_pdo->exec($this->_query);
    }
    
    /**
     * Run Query
     * @param string $query 
     */
    function run($query) {
        $this->query = $query;
        $this->_pdo->exec($query);
    }
    
    /**
     * Last Query Runed
     * @return string 
     */
    function last_query(){
        return $this->_query;
    }
}