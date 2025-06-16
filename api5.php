<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title></title>
		<style type="text/css">
			body{
				background: linear-gradient(to left,pink,blue,violet);
			}
			table{
				border-collapse: collapse;
				width: 90%;
				padding: 30px 30px;
				margin: 50px auto;
			}
			th,td{
				border: 3px solid white;
				padding: 10px 10px;
			}
			th{
				background-color: black;
				font-size: 2.0em;
				color: white;
				font-weight: bold;
			}
			td{
				color: white;
				font-size: 1.8em;
				text-align: center;
			}
			.edit-btn{
				background: none;
				border: none;
				color: white;
				font-weight: bolder;
				cursor: pointer;
			}
			.delete-btn{
				background: none;
				border: none;
				color: white;
				font-weight: bolder;
				cursor: pointer;
			}
			.view-btn{
				background: none;
				border: none;
				color: white;
				font-weight: bolder;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
	<div class="container">
		<table class="table" id="example tr">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Title</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody id="data">
				
			</tbody>
		</table>
	</div>
	<script src="jquery_linkk.js"></script>
	<script type="text/javascript">
		//function deleteData(id) {
			// var deleteUrl="api9.php?id="+id;
			// $.ajax({
			// 	url:deleteUrl,
				// type:"DELETE",
				// success:function(){
				// 	refreshTable();
				// },
		// 		error:function(error){
		// 			alert("Error deleting data:"+error.statusText);
		// 		}
		// 	});
		// }

		function refreshTable(){
			fetch("api4.php").then(
				res=>{
					res.json().then(
						data=>{
							//console.log(data);
							if(data.data.length>0){
								var temp="";
								data.data.forEach((itemData)=>{
								temp+="<tr class='w1'>";
								temp+="<td>"+itemData.id+"</td>";
								 temp+="<td>"+itemData.title+"</td>";
								
								 temp+="<td>"+itemData.description+"</td>";
								// temp+="<td>"+itemData.phone+"</td>";
								
// 							temp+="<td><button class='edit-btn' data-id='"+itemData.id+"'><span class='material-symbols-outlined'>edit</span></button></td>";
// temp+="<td><button class='delete-btn' data-id='"+itemData.id+"'><span class='material-symbols-outlined'>delete</span></button></td>";
// temp+="<td><button class='view-btn' data-id='"+itemData.id+"'><span class='material-symbols-outlined'>visibility</span></button></td></tr>";

							});
					document.getElementById('data').innerHTML
					=temp;
				}
			}
			)
				}
				);
		}
		//console.log(jsonData);
// 		var lastclickedCustomer={};
// $(document).on('click','.edit-btn',function(){
// 	var id=$(this).data('id');
// 	console.log("Edit button clicked with ID:",id);
// 	var lastclickedCustomer={
// 		id:id,
// 		name:$(this).closest('tr').find('td:eq(1)').text(),
// 		phone:$(this).closest ('tr').find('td:eq(2)').text(),
// 		email:$(this).closest('tr').find('td:eq(3)').text()

// 	};
// 	var confirmation=confirm("Are you sure want to edit this data?");
// 	if(confirmation){
//      window.location.href="api7.php?id="+id+
// 	"&name="+encodeURIComponent(lastclickedCustomer.name)+
	
// 	"&email="+encodeURIComponent(lastclickedCustomer.email)+
// 	"&phone="+encodeURIComponent(lastclickedCustomer.phone);	
// 	}
// });


// $(document).on('click','.delete-btn',function(){
// 	var id=$(this).data('id');
// 	var rowText=$(this).closest('tr').text().trim();
// 	var confirmation=confirm("Are you sure want to delete this data");
// 	if(confirmation){
// 		deleteData(id);

// 	}
// });

// $(document).on('click','.view-btn',function(){
// 	var currentrow=$(this).closest("tr");
// 	var col0=currentrow.find("td:eq(0)").text();
// 		var col1=currentrow.find("td:eq(1)").text();
		
// 		var col2=currentrow.find("td:eq(2)").text();
// 	var col3=currentrow.find("td:eq(3)").text();
// 	alert(col1);
	
// 	var confirmation=confirm("Are you sure want to view this data?");
// 	if(confirmation){
// 		window.location.href="http://localhost/api6.php?id="+col0+
// 		"&name="+encodeURIComponent(col1)+
// 		"&email="+encodeURIComponent(col2)+
// 		"&phone="+encodeURIComponent(col3);
// 	}
// });


 refreshTable();

	</script>
 	</body>
 	</html>