<?php

class login1
{
	private function connect()
	{
		$con=mysqli_connect("localhost","id17594554_a1","11012001Luong@","id17594554_a");
		if(!$con)
		{
			echo'Khong ket noi du lieu';
			exit();
		}
		else
		{
			
			mysqli_set_charset($con,"utf8");
			return $con;
		}
	}
	public function loginsv($user,$pass)
	{
		$pass=md5($pass);
		$sql1="select id,username,password,tensv,idsv,malhp, phanquyen from taikhoan where username='$user' and password='$pass' limit 1";
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql1);
		$i=mysqli_num_rows($ketqua);
		if($i==1)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id'];
				$user=$row['username'];
				$pass=$row['password'];
				$tensv=$row['tensv'];
				$idsv=$row['idsv'];
				$malhp=$row['malhp'];
				$phanquyen=$row['phanquyen'];
				
				if($phanquyen==1)
				{
					session_start();
				
				$_SESSION['id']=$id;
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				$_SESSION['tensv']=$tensv;
				$_SESSION['phanquyen']=$phanquyen;
			
	
				return 1;
				}
				else
				{
					
					session_start();
					
				
				$_SESSION['id']=$id;
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				$_SESSION['tensv']=$tensv;
				$_SESSION['malhp']=$malhp;
				$_SESSION['idsv']=$idsv;
				$_SESSION['phanquyen']=$phanquyen;
				return 2;
					
				}

			}
		}
		else
		{
			return 0;
		}
	}
		
	public function confirmlogin($id,$user,$pass,$tensv,$idsv,$malhp,$phanquyen)
	{
		$link=$this->connect();
		$sql="select id from taikhoan where id='$id' and username='$user' and password='$pass' and tensv='$tensv' and idsv=$idsv  and  malhp='$malhp' and phanquyen='$phanquyen'";
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i!=1)
		{
			
			return 1;
			
		}
		else
		{
			return 0;
			
		}

	}

	
		public function confirmloginGV($id,$user,$pass,$tensv,$phanquyen)
	{
		$link=$this->connect();
		$sql="select id from taikhoan where id='$id' and username='$user' and password='$pass' and tensv='$tensv' and phanquyen='$phanquyen'";
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i!=1)
		{
			
			return 1;
			
		}
		else
		{
			return 0;
			
		}

	}
	public function loaddssvlop($sql)
	{
		$link=$this->connect(); //g???i l???i k???t n???i
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //ch???y xong ????ng k???t n???i
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                        <thead>
                          <tr>
                            <th>T??n sinh vi??n</th>
                            <th>M?? sinh vi??n</th>
                            <th></th>
                          </tr>
                        </thead>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$ten=$row['TenSV'];
				
				echo '<tbody>
                          <tr>
                            <th scope="row">'.$ten.'</th>
                            <td>'.$id.'</td>

                            <td>
                            <form action="" method="post">
                            
                              </form>
                            </td>
                          </tr>

                        </tbody>';
			}
			echo' </table>';
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	public function loaddssvlop_chonlt($sql)
	{
		$link=$this->connect(); //g???i l???i k???t n???i
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //ch???y xong ????ng k???t n???i
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                                  <thead>
                                    <tr>
                                      <th>T??n sinh vi??n</th>
                                      <th>M?? sinh vi??n</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$ten=$row['TenSV'];
				
				echo '<tbody>
                          <tr>
                            <th scope="row"><a href="?id='.$id.'">'.$ten.'</a></th>
                            <td><a href="?id='.$id.'">'.$id.'</a></td>

                            <td>
                            <form action="" method="post">
                            <input name="nut" class="btn btn-primary" type="submit" value="Ch???n l??m l???p tr?????ng" >
                            
                              </form>
                            </td>
                          </tr>

                        </tbody>';
			}
			echo' </table>';
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	public function loaddssvlop_chonlttk($sql)
	{
		$link=$this->connect(); //g???i l???i k???t n???i
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //ch???y xong ????ng k???t n???i
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                                  <thead>
                                    <tr>
                                      <th>T??n sinh vi??n</th>
                                      <th>M?? sinh vi??n</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['idsv'];
				$ten=$row['tensv'];
				
				echo '<tbody>
                          <tr>
                            <th scope="row"><a href="?id='.$id.'">'.$ten.'</a></th>
                            <td><a href="?id='.$id.'">'.$id.'</a></td>

                            <td>
                            <form action="" method="post">
                            <input name="nut" class="btn btn-primary" type="submit" value="Ch???n l??m l???p tr?????ng" >
                            
                              </form>
                            </td>
                          </tr>

                        </tbody>';
			}
			echo' </table>';
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	public function loaddssvlop_xoalttk($sql)
	{
		$link=$this->connect(); //g???i l???i k???t n???i
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //ch???y xong ????ng k???t n???i
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                                  <thead>
                                    <tr>
                                      <th>T??n sinh vi??n</th>
                                      <th>M?? sinh vi??n</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['idsv'];
				$ten=$row['tensv'];
				
				echo '<tbody>
                          <tr>
                            <th scope="row"><a href="?ids='.$id.'">'.$ten.'</a></th>
                            <td><a href="?id='.$id.'">'.$id.'</a></td>

                            <td>
                            <form action="" method="post">
                            <input name="nut" class="btn btn-primary" type="submit" value="Thu h???i quy???n l???p tr?????ng" >
                            
                              </form>
                            </td>
                          </tr>

                        </tbody>';
			}
			echo' </table>';
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	public function loaddssvloptruong($sql)
	{
		$link=$this->connect(); //g???i l???i k???t n???i
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //ch???y xong ????ng k???t n???i
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                                  <thead>
                                    <tr>
                                      <th>T??n sinh vi??n</th>
                                      <th>M?? sinh vi??n</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['idsv'];
				$ten=$row['tensv'];
				
				echo '<tbody>
                          <tr>
                            <th scope="row"><a href="?id='.$id.'">'.$ten.'</a></th>
                            <td><a href="?id='.$id.'">'.$id.'</a></td>

                       
                          </tr>

                        </tbody>';
			}
			echo' </table>';
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	
		
}
?>