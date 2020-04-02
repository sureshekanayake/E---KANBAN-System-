$(document).ready(function(){


	$(".login-btn").on("click", function(){

		$.ajax({
			url : '../admin/classes/Adminprofilehomeclass.php',
			method : "POST",
			data : $("#admin-login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#admin-register-form").trigger("reset");
					//$(".message").html('<span class="text-success">'+resp.message+'</span>');
					window.location.href = window.origin+"/new/admin/adminprofilehome.php";
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});

});

$(document).ready(function(){

	getCustomers();
	getCustomerOrders();

	function getCustomers(){
		$.ajax({
			url : '../admin/classes/adminprofileshow.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>'+value.first_name+' '+value.last_name+'</td>'+
									          '<td>'+value.username+'</td>'+
									          '<td>'+value.mobile+'</td>'+
									          '<td><a aid="'+value.id+'" class="btn btn-sm btn-danger delete-customer"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/adminprofileshow.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td><i class="fas fa-dot-circle"></i></th>'+
								              '<td>'+ value.order_id +'</td>'+
								              '<td>'+ value.product_id +'</td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.qty +'</td>'+
								              '<td>'+ value.trx_id +'</td>'+
								              '<td>'+ value.p_status +'</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}
	$(document.body).on('click', '.delete-customer', function(){

		var aid = $(this).attr('aid');

		if (confirm("Are you sure to delete this User Details?")) {
			$.ajax({
				url : '../admin/classes/adminprofileshow.php',
				method : 'POST',
				data : {DELETE_CUSTOMER:1, aid:aid},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getCustomers();
					}else if(resp.status == 303){
						alert(resp.message);
					}
				}
			})
		}else{
			alert('Cancelled');
		}

		

	});


});
