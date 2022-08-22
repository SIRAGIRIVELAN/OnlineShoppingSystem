<html>
<head>
<style>
body{background-image:url("avatar2.jpg");
background-repeat:no-repeat;
background-size:100% 100%;
}
tr{border:1px solid #400040;}


table{color:#000;width:60%;height:80%;background:transparent;border-radius:1px;border-collapse:collapse;margin-top:3%;margin-left:20%;}

th{border:1px solid #000;font-size:25px;}
td{margin:5%;border:1px solid #000;text-align:center;border-radius:1px;font-size:20px;}
#row{width:90px;text-align:center;}
#row1{width:220px;text-align:center;}
</style>
</head>
<body>
<div id="box">

	<?php

$a=1;



	$xml=simplexml_load_file("about.xml");


			foreach($xml->children() as $book)
			{
				
		
			echo"<table>
			
			<tr>
			<th>S.No:</th>
			<th>About</th>
			<th>Details</th>
			
			</tr>
			
			
			
			<tr><td id='row'>".$a++."</td><td id='row1'>Trading name</td><td>";echo $book->Tradingname;echo" </td></tr>";
			
			
			echo"<tr><td>".$a++."</td><td>Customer service</td><td>";echo $book->Customerservice;echo" </td></tr>";
			
			echo"<tr><td>".$a++."</td><td>Area served</td><td>";echo $book->Areaserved;echo" </td></tr>";
			echo"<tr><td>".$a++."</td><td>Products</td><td>";echo $book->Products;echo" </td></tr>";
			echo"<tr><td>".$a++."</td><td>Founder</td><td>";echo $book->Founder;echo" </td></tr>";
			echo"<tr><td>".$a++."</td><td>Founded</td><td>";echo $book->Founded;echo" </td></tr>";
			echo"<tr><td>".$a++."</td><td>Industry</td><td>";echo $book->Industry;echo" </td></tr>";
			echo"<tr><td>".$a++."</td><td>Website</td><td>";echo $book->Website;echo" </td></tr></table>";
			
			
			}

	?>
</div>
<p style="color:#fff;font-size:20px;">When Jeff Bezos founded Amazon.com in 1994, the age of the online-only retailer appeared to be far off.

In August of 1994, The New York Times published an article that opened with the question “Has the Internet been overhyped?” The article cast doubt on figures that stated that 20 million people were using the Web, quoting authorities who said the number was closer to two million, speculating on the consequences awaiting companies that had wasted money on online projects.

Unlike the New York Times, Bezos was bullish about the business potential of the Internet. While rising through the ranks at a meteoric clip at D. E. Shaw in the early ‘90s, he had begun to develop the idea behind Amazon.  All that remained was to determine which type of business had the most potential. (For more, see: 10 Facts You Didn’t Know About Amazon.)

One factor that drove Bezos’ ruminations was a then-recent U.S. Supreme Court ruling that mail-order businesses were exempt from sales taxes in states in which the companies didn’t have a physical presence. He started researching mail-order businesses and their products. From there, he winnowed the opportunities down to smaller and smaller lists, finally deciding to get into the book business, because of the millions of titles in print.

He talked the idea through with friends and family, who offered financial and moral support. The details of the business came into focus for Bezos on a cross-country drive from Texas to Seattle. Setting up shop in the garage of his Seattle home, he initially named the business Cadabra.com, as in the magician’s phrase “abra-cadabra,” but later changed it because of its similarity to “cadaver.”

With a new name and a full library of books for sale, Amazon.com opened for business, and the orders began pouring in almost immediately. (For more, see: Amazon Never Makes Money But No One Cares.)

"Within the first few days, I knew this was going to be huge," Bezos said of the launch. 
</p>

</body>


</html>