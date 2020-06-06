
$(document).ready(function () {

	$(".newProduct").toggle();
	$(".submitBtn").toggle();
	/*
	show category when user page loaded
	*/
	console.log("Ali");

	$.ajax({

		method: "GET",
		url: "products.php",
		dataType: "JSON",
		success: function (data) {
			var htmlcatData = new Array(data.length);
			console.log("Ali");
			console.log(data);
			for ($i = 0; $i < data.length; $i++) {
				//console.log(data[$i][0]);
				htmlcatData[$i] = '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
					'<div class="panel panel-Default">' +
					'<div class="panel-heading ">' + data[$i][0] + '</div>' +
					'<div class="panel-body">' + '<img src="imgs/' + data[$i][0] + '.JPG' + '"alt="' + data[$i][0] + ' " style="width:304px;height:228px;">' +
					'</div>' + '<div class="panel-footer">' + '<button class="btn btn-primary moreDetailsBtn" value="' + data[$i][0] + '" style="margin-left:110px;">show products</button>' + '</div>' +
					'</div>' +
					'</div>';
				;
			}
			$("#showProducts").html(htmlcatData);
		},
	});
	// end $.ajax

	/**
	 * show products by category when button clicked
	 */
	$("body").delegate(".moreDetailsBtn", "click", function () {

		//alert($(this).val());
		console.log($(this).val());
		$.ajax({
			method: "POST",
			url: "getProducts.php",
			data: { productCat: $(this).val() },
			dataType: "JSON",
			success: function (data) {
				$htmlproductsData = Array(data.length);
				for ($i = 0; $i < data.length; $i++) {
					//console.log(data[$i][0]);
					$htmlproductsData[$i] = '<div class="row">' +
						'<div class="col-lg-9 col-xs-12">' +
						'<div class="thumbnail">' +
						'<img src="' + ' ' + '" alt="' + ' ' + '">' +
						'<div class="caption">' +
						'<p class="label label-danger productTitle">' + data[$i][0] + '</p>' +
						'<h3 class="productDes">' + data[$i][1] + '</h3></br>' +
						'<p class=" label label-default">Price:</p>' +
						'<p class=" label label-danger priceLabel">' + data[$i][3] + "$" + '</p></br></br>' +
						'<button class="btn btn-default">add to cart</button>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'</div>'
						;
				}
				$("#showProducts").html($htmlproductsData);
			},
		});


	});
	// end delegate()

	$("#mainLink").click(function () {
		$.ajax({

			method: "GET",
			url: "products.php",
			dataType: "JSON",
			success: function (data) {
				var htmlcatData = new Array(data.length);
				console.log(data);
				for ($i = 0; $i < data.length; $i++) {
					console.log(data[$i][0]);
					htmlcatData[$i] = '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
						'<div class="panel panel-Default">' +
						'<div class="panel-heading ">' + data[$i][0] + '</div>' +
						'<div class="panel-body">' + '<img src="imgs/' + data[$i][0] + '.JPG' + '"alt="' + data[$i][0] + ' " style="width:304px;height:228px;">' +
						'</div>' + '<div class="panel-footer">' + '<button class="btn btn-primary moreDetailsBtn" value="' + data[$i][0] + '" style="margin-left:110px;">show products</button>' + '</div>' +
						'</div>' +
						'</div>';
				}
				$("#showProducts").html(htmlcatData);
			},
		});
	});
	/**
	 * add new product to database 
	 */

});
