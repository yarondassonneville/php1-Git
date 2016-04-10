<?php
class User
{
	private $m_sUserName;	
	public function __set($p_sProperty, $p_vValue)
	{
		switch($p_sProperty)
		{
			case "Username":
				$this->m_sUserName = $p_vValue;
				break;
		}	   
	}
	
	public function __get($p_sProperty)
	{
		$vResult = null;
		switch($p_sProperty)
		{
		case "Username": 
			$vResult = $this->m_sUserName;
			break;
		}
		return $vResult;
	}

	public function UsernameAvailable()
	{
		$conn = new mysqli("localhost", "root", "", "week5_login");

		$sql = "select * from tblusers where user_login = '".$conn->real_escape_string($this->m_sUserName)."'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			throw new Exception("Username already exists");
		} else {
			return true;
		}
	}
	
	public function Create()
	{
			include("Connection.php");
			$sSql = "insert into tblusers (user_login) values ('".$conn->real_escape_string($this->m_sUserName)."');";
			if ($rResult = mysqli_query($conn, $sSql))
			{	
				//query went OK
			}
			else
			{		
				echo $sSql;			
				// er zijn geen query resultaten, dus query is gefaald
				throw new Exception('Caramba! Could create your account!');	
			}					
			mysqli_close($conn);
	}
	
}
?>