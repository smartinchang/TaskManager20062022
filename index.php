<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Quản lý công việc</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<script src="script.js"></script>
 </head>
 <body>
	<div class="container">
		<?php
			include("header.inc");
		?>
		<div class="header">
			<div class="header_left">
				<table cellspacing="0" cellpadding="0">
					<tr height="40px">
						<td width="500px" align="center"><div class="header_title_1_rows">Công việc</div></td>
					</tr>
				</table>
			</div>
			<div class="header_center">
				<table cellspacing="0" cellpadding="0">
					<tr height="40px">
						<td width="100px" align="center"><div class="header_title_1_rows">Thực hiện</div></td>
						<td width="70px" align="center"><div class="header_title_2_rows">Ngày<br>bắt đầu</div></td>
						<td width="70px" align="center"><div class="header_title_2_rows">Ngày<br>hoàn thành</div></td>
						<td width="40px" align="center"><div class="header_title_2_rows">Tỷ lệ<br>%</div></td>
					</tr>
				</table>
			</div>
			<div class="header_right" id="header_right">
				<table cellspacing="0" cellpadding="0" width="730px">
					<tr height="40px">
						<td width="40px" align="center"><div class="date"><u>13|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>14|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>15|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>16|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>17|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>18|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>19|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>20|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>21|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>22|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>23|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>24|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>25|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>26|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>27|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>28|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>29|06</u><br>2022</div></td>
						<td width="40px" align="center"><div class="date"><u>30|06</u><br>2022</div></td>
						<td width="10px"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="content">
			<div class="content_left" id="content_left">
				<ul class="tree">
				 <li><input type="checkbox" class="checkbox" id="c1" value="1" onclick="change(1)" checked> <div class="text" id="t1" onmousedown="menu(event,1)">Từ điển</div>
					<ul id="u1">
						<li><input type="checkbox" class="checkbox" id="c2" value="1" onclick="change(2)" checked> <div class="text" id="t2" onmousedown="menu(event,2)">Là danh sách</div>
						 <ul id="u2" style="display:block;">
							<li><input type="checkbox" class="checkbox" id="c3" value="0" onclick="change(3)"> <div class="text" id="t3" onmousedown="menu(event,3)">Các từ</div>
								<ul id="u3" style="display:none;"></ul>
							</li>
							<li><input type="checkbox" class="checkbox" id="c4" value="0" onclick="change(4)"> <div class="text" id="t4" onmousedown="menu(event,4)">Các ngữ</div>
								<ul id="u4" style="display:none;"></ul>
							</li>
						 </ul>
						</li>
						<li><input type="checkbox" class="checkbox" id="c5" value="0" onclick="change(5)"> <div class="text" id="t5" onmousedown="menu(event,5)">Được sắp xếp theo thứ tự chữ cái</div>
							<ul id="u5" style="display:none;"></ul>
						</li>
						<li><input type="checkbox" class="checkbox" id="c6" value="0" onclick="change(6)"> <div class="text" id="t6" onmousedown="menu(event,6)">Cung cấp các giải nghĩa</div>
							<ul id="u6" style="display:none;"></ul>
						</li>
					</ul>
				 </li>
				</ul>
				<div class="task_menu" id="task_menu" style="display:none">
					<div class="task_menu_button">Thêm</div><div class="task_menu_button">Sửa</div><div class="task_menu_button">Xóa</div><div class="task_menu_button" onclick="task_menu_close()">Đóng</div>
				</div>
			</div>
			<div class="content_center" id="content_center">
				<div>
					<div class="operator">1</div>
					<div class="detail_day">15/06/2022</div>
					<div class="detail_day">19/06/2022</div>
					<div class="detail_rate">100%</div>
				</div>
				<div id="tr1">
					<div>
						<div class="operator">2</div>
						<div class="detail_day">19/06/2022</div>
						<div class="detail_day">25/06/2022</div>
						<div class="detail_rate">50%</div>
					</div>
					<div id="tr2">
						<div>
							<div class="operator">3</div>
							<div class="detail_day">10/06/2022</div>
							<div class="detail_day">19/06/2022</div>
							<div class="detail_rate">0%</div>
						</div>
						<div id="tr3" style="display:none">
						</div>
						<div>
							<div class="operator">4</div>
							<div class="detail_day">10/06/2022</div>
							<div class="detail_day">19/06/2022</div>
							<div class="detail_rate">0%</div>
						</div>
						<div id="tr4" style="display:none">
						</div>
					</div>
					<div>
						<div class="operator">5</div>
						<div class="detail_day">10/06/2022</div>
						<div class="detail_day">19/06/2022</div>
						<div class="detail_rate">0%</div>
					</div>
					<div id="tr5" style="display:none">
					</div>
					<div>
						<div class="operator">6</div>
						<div class="detail_day">10/06/2022</div>
						<div class="detail_day">19/06/2022</div>
						<div class="detail_rate">0%</div>
					</div>
					<div id="tr6" style="display:none">
					</div>
				</div>
			</div>
			<div class="content_right" id="content_right" onscroll="div_scroll()">
				<table cellspacing="0" cellpadding="0" width="720px">
					<tr>
						<td width="720px">
							<div style="height:20px">
								<div class="blank" style="width:80px;"></div>
								<div class="duration" style="width:198px;">
									<div class="process" style="width:196px">100%</div>
								</div>
							</div>
							<div id="d1">
								<div style="height:20px">
									<div class="blank" style="width:240px;"></div>
									<div class="duration" style="width:398px;">
										<div class="process" style="width:200px">50%</div>
									</div>
								</div>
								<div id="d2">
									<div style="height:20px">
										<div class="blank" style="width:80px;"></div>
										<div class="duration" style="width:198px;"></div>
									</div>
									<div style="height:20px">
										<div class="blank" style="width:240px;"></div>
										<div class="duration" style="width:396px;"></div>
									</div>
								</div>
								<div style="height:20px">
									<div class="blank" style="width:80px;"></div>
									<div class="duration" style="width:198px;"></div>
								</div>
								<div style="height:20px">
									<div class="blank" style="width:240px;"></div>
									<div class="duration" style="width:398px;"></div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
 </body>
</html>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133423368-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-133423368-1', { 'optimize_id': 'GTM-W433962'});
</script>