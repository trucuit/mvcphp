<?php 
class Model
{
	protected $conn;
	protected $database = DB_NAME;
	protected $table = DB_TABLE;
	protected $resultQuery;
	public function __construct()
	{		
		try {
			$this->conn = new PDO ("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
			);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected successfully";
		} catch (PDOException $e) {
			echo "Connected failed: " . $e->getMessage();
			die();
		}

	}

	public function __destruct()
	{
		$this->conn = null;
	}

	public function setTable($table)
	{
		$this->table = $table;
	}

	public function insert($datas = null)
	{
		foreach ($datas as $value) {
			$stmt = $this->conn->prepare("INSERT INTO $this->table (ip,url,time) VALUES (:ip, :url, :time)");
			$stmt->bindParam(':ip', $value['ip'], PDO::PARAM_STR);
			$stmt->bindParam(':url', $value['url'], PDO::PARAM_STR);
			$stmt->bindParam(':time', $value['time'], PDO::PARAM_INT);
			$stmt->execute();
		}
	}

	public function delete($id)
	{
		$id = (int)$id;
		$stmt = $this->conn->prepare("DELETE FROM `$this->table` WHERE id=:id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public function update($id, $datas)
	{
		$stmt = $this->conn->prepare("UPDATE online SET url=:url, ip=:ip, time=:time WHERE id=:id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->bindParam(':ip', $datas['ip'], PDO::PARAM_STR);
		$stmt->bindParam(':url', $datas['url'], PDO::PARAM_STR);
		$stmt->bindParam(':time', getdate()[0], PDO::PARAM_INT);
		$stmt->execute();
	}

	public function showAll()
	{ 
		$stmt = $this->conn->prepare("SELECT * FROM `$this->table`");
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function show()
	{
		$stmt = $this->conn->prepare("SELECT * FROM $this->table");
		$stmt->execute();
		return $data = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	public function execute($sql)
	{
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function isExist($query){
		if($query != null) {
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$this->resultQuery =  $stmt->fetchAll(PDO::FETCH_ASSOC);
		}		
		if(empty($this->resultQuery)) {
			return false;
		}
		return true;
	}
}
?>