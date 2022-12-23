<?php
class login2
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
	public function load_ds_sinhvien1($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="600" border="1">
						  <tr >
							<td>Mã số sinh viên</td>
							<td>Tên sinh viên</td>
							<td>Email</td>
							<td>Tên lớp học phần</td>
							<td>Mã Lớp học phần </td>
						  </tr>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id_sv=$row['ID'];
				$tensv=$row['TenSV'];
				$email=$row['Email'];
				$tenlhp=$row['tenLHP'];
				$malhp=$row['MaLHP'];
				echo'  <tr>
							<td><a href="?id='.$id_sv.'">'.$id_sv.'</a></td>
							<td><a href="?id='.$id_sv.'">'.$tensv.'</a></td>
							<td><a href="?id='.$id_sv.'">'.$email.'</td>
							<td><a href="?id='.$id_sv.'">'.$tenlhp.'</td>
							<td><a href="?id='.$id_sv.'">'.$malhp.'</td>
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_lhp_tonghop($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="400" border="1">
						  <tr >
							
							<td>Tên LHP</td>
							<td>Mã LHP</td>
							<td>Tên Phòng Học</td>
							<td>Thời gian </td>
							
                            
                           </tr>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['maLHP'];
				$tenlhp=$row['tenLHP'];
				$tenphong=$row['Tenphonghoc'];
				$time=$row['Thoigian'];
				
				
				echo'  <tr>
							
							<td><a href="GV_tonghoptichcuc.php?id='.$id.'">'.$tenlhp.'</a></td>
							<td><a href="?id='.$id.'">'.$id.'</a></td>
							<td><a href="?id='.$id.'">'.$tenphong.'</a></td>
							<td><a href="?id='.$id.'">'.$time.'</a></td>
							
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}	
	public function load_quanli_tichcuc($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'
						                            <table class="table mb-0">
                            <thead>
                              <tr>
                                <th>Mã số sinh viên</th>
                                <th>Tên sinh viên</th>
                                <th>Số lần tham gia HDNK</th>
                                <th>Số lần Phát Biểu</th>
                              </tr>
                            </thead>
                            <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['idSV'];
				$tensv=$row['tenSV'];
				$soHDNK=$row['number_HDNK'];
				$soPB=$row['solanPhatBieu'];
				
				echo'  
						  	 <tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$tensv.'</td>
                                <td>'.$soHDNK.'</td>
                                <td>'.$soPB.'</td>
                              </tr>';
				
			}
			echo'
			</tbody>
			</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	
	public function load($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($sql, $link);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua); ///chay  ra ket qua hang
		if($i>0)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$tensv=$row['TenSV'];
				$email=$row['Email'];
				$tenlhp=$row['tenLHP'];
				echo '<table width="395" border="1">
						  <tr>
							<td width="203">Tên sinh viên</td>
							<td width="203"><a>'.$tensv.'</a></td>
							</tr>
							 <tr>
								<td>Mã số sinh viên</td>
								<td width="203"><a>'.$id.'</a></td>
							  </tr>
							  <tr>
								<td>Email</td>	
								<td width="203"><a>'.$email.'</a></td>						
							  </tr>
							  <tr>
								<td>Tên lớp học phần</td>
								<td width="203"><a>'.$tenlhp.'</a></td>
							  </tr>';
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu';
		}
	
	}
    public function load_ds_sinhvien($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="600" border="1">
						  <tr >
							<td>Mã số sinh viên</td>
							<td>Tên sinh viên</td>
							<td>Email</td>
							<td>Tên lớp học phần</td>
						  </tr>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$tensv=$row['TenSV'];
				$email=$row['Email'];
				$tenlhp=$row['tenLHP'];
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$id.'</a></td>
							<td><a href="?id='.$id.'">'.$tensv.'</a></td>
							<td><a href="?id='.$id.'">'.$email.'</td>
							<td><a href="?id='.$id.'">'.$tenlhp.'</td>
						  </tr>';		
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	    public function load_ds_sinhvientronglop($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="600" border="1">
						  <tr >
							<td>Mã số sinh viên</td>
							<td>Tên sinh viên</td>
							<td>Email</td>
							<td>Tên lớp học phần</td>
						  </tr>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$tensv=$row['TenSV'];
				$email=$row['Email'];
				$tenlhp=$row['tenLHP'];
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$id.'</a></td>
							<td><a href="?id='.$id.'">'.$tensv.'</a></td>
							<td><a href="?id='.$id.'">'.$email.'</td>
							<td><a href="?id='.$id.'">'.$tenlhp.'</td>
						  </tr>';		
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_leader($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="400" border="1">
						  <tr >
							<td>Mã số sinh viên</td>
							<td>Tên sinh viên</td>
						  </tr>';
			;
			while($row=mysql_fetch_array($ketqua))
			{
				$idtr=$row['idtrSV'];
				$tensvtr=$row['tenloptruong'];
				echo'  <tr>
							<td><a href="?id='.$idtr.'">'.$idtr.'</a></td>
							<td><a href="?id='.$idtr.'">'.$tensvtr.'</a></td>
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_lhp($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			$dem=0;
			echo'        <table class="table mb-0">
                        <thead>
                          <tr>
                            <th>Tên lớp học phần</th>
                            <th>Mã lớp học phần</th>
                            <th>Thời gian học</th>
                            <th>Phòng học</th>
                            <th></th>
                          </tr>
						  </thead>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$dem++;
				$id=$row['maLHP'];
				$tenlhp=$row['tenLHP'];
				$tenphong=$row['Tenphonghoc'];
				$time=$row['Thoigianhoc'];
				
				
				echo'<tbody>
                          <tr>
                            <th scope="row">'.$tenlhp.'</th>
                            <td>'.$id.'</td>
                            <td>'.$time.'</td>
                            <td>'.$tenphong.'</td>
                            <td><a href="?id='.$id.'"><button name "nut" class="btn btn-warning" type="submit">Danh sách sinh
                                  viên</button></a></td>
                          </tr>

                        </tbody> ';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_lhptonghop($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			$dem=0;
			echo'        <table class="table mb-0">
                        <thead>
                          <tr>
                            <th>Tên lớp học phần</th>
                            <th>Mã lớp học phần</th>
                            <th>Thời gian học</th>
                            <th>Phòng học</th>
                            <th></th>
                          </tr>
						  </thead>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$dem++;
				$id=$row['maLHP'];
				$tenlhp=$row['tenLHP'];
				$tenphong=$row['Tenphonghoc'];
				$time=$row['Thoigianhoc'];
				
				
				echo'<tbody>
                          <tr>
                            <th scope="row">'.$tenlhp.'</th>
                            <td>'.$id.'</td>
                            <td>'.$time.'</td>
                            <td>'.$tenphong.'</td>
                            <td><a href="?id='.$id.'"><button name "nut" class="btn btn-warning" type="submit">Tổng hợp tích cực</button></a></td>
                          </tr>

                        </tbody> ';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_hdnk($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query( $link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                          <thead>
                            <tr>
                              <th>Mã HĐNK</th>
                              <th>Tên HĐNK</th>
                              <th>Thời gian</th>
                              <th>Địa điểm</th>
                              <th>Nội dung HDNK</th>
                            </tr>
                          </thead>
						   <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['maHDNK'];
				$ten=$row['tenHDNK'];
				$time=$row['thoigian'];
				$dd=$row['diadiem'];
				$mt=$row['mota'];
				
				echo'  <tr>
                              <th scope="row">'.$id.'</th>
                              <td>'.$ten.'</td>
                              <td>'.$time.'</td>
                              <td>'.$dd.'</td>
                               <td>'.$mt.'</td>
                              
                               
                            </tr>';
				
			}
			echo'
			</tbody>
			</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_hdnkdadk($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="400" border="1">
						  <tr >
							<td>Mã số HĐNK</td>
							<td>Tên HĐNK</td>
							<td>Mã sinh viên</td>
							<td>Tên sinh viên</td>
                            
                           </tr>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['maHDNK'];
				$ten=$row['tenHDNK'];
				$idsv=$row['idSV'];
				$tensv=$row['tenSV'];
				
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$id.'</a></td>
							<td><a href="?id='.$id.'">'.$ten.'</a></td>
							<td><a href="?id='.$id.'">'.$idsv.'</a></td>
							<td><a href="?id='.$id.'">'.$tensv.'</a></td>
							
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'<br />
chưa đăng kí hoạt động';
		}
	}
	
	public function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else
		{
			return 0;
		}
		
	}
	
	public function hoatdongtichcucsv()
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
	    $i=mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<tr>
						<td>Họ và tên</td>
						<td>Số buổi hiện diện </td>
					    <td>Hoạt động ngoại khóa đã tham gia </td>
						<td>Số lần phát  biểu </td>
					  </tr>';
			while($row=mysql_fetch_array($ketqua))
			{
				$tensv=$row['tenSV'];
				$ngaydd=$row['ngayhoc'];
				$ttdiemdanh=$row['trangthaiDiemDanh'];
				$HDNKthamgia=$row['tenHDNK'];
				$solanpb=$row['solanPhatBieu'];
				echo'<tr>
							<td><a>'.$tensv.'</a></td>
							<td><tr><td><a>'.$ngaydd.'</a></td><td>'.$ttdiemdanh.'</td></tr></td>
							<td><a>'.$HDNKthamgia.'</a></td>
							<td><a>'.$solanpb.'</a></td>
						  </tr>';
			}
			echo'</table>';
			
			
			}
			else{
				echo'Không có dữ liệu';
				}
		}
		public function laycot($sql)
	{
		$link=$this->connect(); //gọi lại kết nối
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua); 
		$giatri='';
		if($i>0)
		{
			
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['0'];
				$giatri=$id;
			}
		}
		return $giatri;
		
	}
	public function loadsv($sql)
	{
		$link=$this->connect(); //gọi lại kết nối
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['idSV'];
				$ten=$row['tenSV'];
				$mail=$row['email'];
				$lop=$row['tenLHP'];
				echo '<table style="border:1px solid black;"><tr>
				        <td>'.$id.'</td>
						<td>'.$ten.'</td>
						<td>'.$mail.'</td>
						<td> '.$lop.'</td>
					</tr></table>';
			}
		}
		else
		{
			echo'Khong co du lieu';
		}
	}
	public function uploadfile($name,$tmp_name,$folder)
	{
		if($name!=''&& $tmp_name!='' && $folder!='')
		{
			$newname=$folder."/".$name;
			if(move_uploaded_file($tmp_name,$newname))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 0;
		}
	}
	public function mylogin($user,$pass)
	{
		$pass=md5($pass);
		$link=$this->connect();
		$sql="select id_tk,username,password from taikhoan where username='$user' and password='$pass' limit 1";
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i==1)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id_tk'];
				$username=$row['username'];
				$password=$row['password'];
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['user']=$username;
				$_SESSION['pass']=$password;
				return 1;
			}
		}
		else
		{
			return 0;
		}
	}
	public function confirmlogin($id,$user,$pass)
	{
		$link=$this->connect();
		$sql="select id_tk from taikhoan where id_tk='$id' and username='$user' and password='$pass' limit 1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i!=1)
		{
			header("location:dangnhap.php");
		}
	}
	public function load_bc_hdnk($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'


						
						  <table class="table mb-0">
                                  <thead>
                                    <tr>
                                      <th>Mã số Báo Cáo HĐNK</th>
                                      <th>Tên Báo Cáo HĐNK</th>
                                      <th>Nội dung</th>
									   <th>Mã sinh viên báo cáo</th>
                                      <th>Mã HĐNK</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
			;
			while($row=mysqli_fetch_array($ketqua))
			{
				$id_bc=$row['maBC'];
				$id=$row['maHDNK'];
				$ten=$row['tenFileBC'];
				$nd=$row['noiDung'];
				$id_sv=$row['idSV'];
				
				echo'<tr>
                                      <th scope="row"><a href="?id='.$id_bc.'">'.$id_bc.'</a></th>
                                      <td><a href="?id='.$id_bc.'">'.$ten.'</a></td>
                                      <td><a href="?id='.$id_bc.'"></a><img src="folder/'.$nd.'" width="30" height="30" /></td>
                                      <td><a href="?id='.$id_bc.'">'.$id_sv.'</a></td>
									   <td><a href="?id='.$id_bc.'">'.$id.'</a></td>
                                    </tr>';
				
			}
			echo'
			</tbody>
         	</table>
			';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
		public function loaddssvlop($sql)
	{
		$link=$this->connect(); //gọi lại kết nối
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0">
                        <thead>
                          <tr>
                            <th>Tên sinh viên</th>
                            <th>Mã sinh viên</th>
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
                           
                           <a href="xoa,suasinhvien.php?ids='.$id.'"> <button class="btn btn-primary" type="submit">Setting</button></a>
                             
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
	public function load_tt_sv($sql)
	{
		$link=$this->connect(); //gọi lại kết nối
		$ketqua=mysqli_query($link,$sql);
		@mysqli_close($link); //chạy xong đóng kết nối
		$i=mysqli_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table class="table mb-0" style="border:1px solid black;">
                        <thead>
                          <tr>
                            <th>Mã sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Email sinh viên</th>
							<th>Lớp Học Phần</th>
                          </tr>
                        </thead>';
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['ID'];
				$ten=$row['TenSV'];
				$email=$row['Email'];
				$tenlhp=$row['tenLHP'];
				
				echo '<tbody style="border:1px solid black;">
                          <tr>
                            <th scope="row"><a href="?id='.$id.'">'.$id.'</a></th>
                            <td><a href="?id='.$id.'">'.$ten.'</a></td>
							<td><a href="?id='.$id.'">'.$email.'</a></td>
							<td><a href="?id='.$id.'">'.$tenlhp.'</a></td>
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