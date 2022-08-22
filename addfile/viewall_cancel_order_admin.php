<html>
<head>
<style>



#bodyright{overflow-x:scroll;padding:2%;padding-bottom:0%;box-sizing:border-box;border-radius:3px;margin-top:1%;width:74%;height:50px;background:#400040;float:left;}

#bodyright h2{border-radius:3px;height:50px;line-height:50px;background:#ff4000;color:#fff; text-align:center; text-shadow:5px 5px 5px #000; }

#bodyright form table{width:90%;margin:auto;margin-top:10px !important;}

#bodyright form table tr td{padding-left:3%;width:50%;height:35px;color:#fff;}

#bodyright form table tr td input{margin-left:-110px;border-radius:3px;border:2px solid #e6e6e6; width:100%;height:30px;padding-left:2%;box-sizzing:border-box;}

#bodyright form table tr td select{margin-left:-110px;border-radius:3px;border:2px solid #e6e6e6; width:100%;height:30px;padding-left:2%;box-sizzing:border-box;}


#bodyright form button{margin-top:10px;border-radius:3px;border:2px solid #ff4000;width:200px;height:40px;font-weight:bold;outline:none;background:#fff;}

#bodyright form button:hover{background:#ff4000;color:#fff;}

#bodyright form table tr th{padding-right:2%;box-sizzing:border-box;font-size:20px;color:#fff; text-align:center; background:#ff4000; height:40px;text-shadow:5px 5px 5px #000;}

#add_cat{margin-top:20px;border-top:2px solid #400040;}

#bodyright form table tr td a{text-decoration:none;color:#fff;}

.scroll{min-height:590px;}
.scroll form table tr th{text-align:center !important;padding:0% !important;background:#ff4000 !important;font-size:26px !important;}

.scroll form table tr td img{height:30px;width:30px;}

.scroll form table tr td{padding-left:2% !important;min-width:150px;height:35px;font-size:14px;}
</style>
</head>

<div class="scroll" id="bodyright">

<h2>View All Cancelled Orders</h2>
	<form method="post" enctype="multipart/form-data">
	
	
		<table>
		
			<tr>
				<th>Sr No.</th>
				
				<th>User Id</th>
				<th>Product name</th>
				<th>Product Images</th>
		
				<th>Product Price</th>
				
			
				
				<th>Quantity</th>
			
				
				
				<th>Order Date</th>
			</tr>	
		
		<?php echo viewall_products(); ?>
		
		</table>
		
	
	</form>


</div>

<?php
function viewall_products()
	{
		include("db.php");
	
	
		$orderdetails1=$con->prepare("select * from placeorder where order_cancel='1' ORDER BY 1 DESC");
	
		$orderdetails1->execute();
		$i=1;
	while($row1=$orderdetails1->fetch()):
	
		$pro_id=$row1['pro_id'];
		$fetch_pro=$con->prepare("select * from products where pro_id='$pro_id'");
		
		$fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
		 
		$fetch_pro->execute();
		
		$row=$fetch_pro->fetch();
		
			echo "<tr>
				<td>".$i++."</td>
				
				<td>".$row1['userid']."</td>
				
				<td style='min-width:200px'>".$row['pro_name']."</td>
				
				<td style='min-width:200px'>
				
					<img src='../imgs/ragava/".$row['pro_img1']."' />
					<img src='../imgs/ragava/".$row['pro_img2']."' />
					<img src='../imgs/ragava/".$row['pro_img3']."' />
					<img src='../imgs/ragava/".$row['pro_img4']."' />
				
				
				
				</td>
				
				<td>".$row['pro_price']."</td>
				
				<td>".$row1['qty']."</td>
				
				<td>".$row1['date']."</td>
			</tr>";
			
		endwhile;
		
		
	}
	
	
	
	

?>