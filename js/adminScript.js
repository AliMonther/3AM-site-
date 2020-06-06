$(document).ready(function () {

    $.ajax({
        method: "GET",
        url: "products.php",
        dataType: "JSON",
        success: function (data) {
            $arrayData = new Array(data.length);
            for ($counter = 0; $counter < data.length; $counter++) {
                //<a href="#" class="list-group-item btn btn-info moreUserInfo"value="' + data[$counter][1] + ' ">' + data[$counter][1] + '</a>
                $arrayData[$counter] = '<button class="btn btn-warning showProducts"value="' + data[$counter][0] + ' ">' + data[$counter][0] + '</button>'

            }
            $("#cat").html($arrayData);
        },
        error: function () {

        },
    });
    $.ajax({

        method: "GET",
        url: "getUsers.php",
        dataType: "JSON",
        success: function (data) {
            $arrayData = new Array(data.length);
            for ($counter = 0; $counter < data.length; $counter++) {
                $arrayData[$counter] = '<button class="btn btn-warning moreUserInfo"value="' + data[$counter][1] + ' ">' + data[$counter][1] + '</button>';
            }
            $("#users").html($arrayData);
        }

    });

    $("body").delegate(".showProducts", "click", function () {
        console.log($(this).val());
        $.ajax({

            method: "POST",
            url: "getProducts.php",
            dataType: "JSON",
            data: { productCat: $(this).val() },
            success: function (data) {
                $arrayData = new Array(data.length);
                for ($counter = 0; $counter < data.length; $counter++) {
                    $arrayData[$counter] =
                        '<div class="col-lg-12 col-xs-12 ">' +
                        '<div class="thumbnail"style="background: rgb(255, 255, 255);">' +
                        '<img src="' + ' ' + '" alt="' + ' ' + '">' +
                        '<div class="caption">' +
                        '<p class="label label-info productTitle">' + data[$counter][0] + '</p>' +
                        '<h3 class="productDes">' + data[$counter][1] + '</h3></br>' +
                        '<p class=" label label-info">Price:</p>' +
                        '<p class=" label label-danger priceLabel">' + data[$counter][3] + "$" + '</p></br></br>' +
                        '<button class="btn btn-info">Edit info</button>' +
                        '<button class="btn btn-danger deleteProBtn"value="' + data[$counter][0] + '">delete</button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
                console.log(data);
                $("#showInfo").html('<ul class="list-group">' + $arrayData + '</ul>');
            }


        });
    });

    //end products delegate

    $("body").delegate(".moreUserInfo", "click", function () {
         console.log($(this).val());
        console.log("a");
        $.ajax({
            method: "POST",
            url: "getUsers.php",
            data: { username: $(this).val() },
            dataType: "JSON",
            success: function (data , status , xhr) {
                console.log(data);
                console.log(status);
                console.log(xhr);

            },
            error: function (xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
            }

        });
    });
    //end delegate
    $("body").delegate(".deleteProBtn","click",function(){

        $.ajax({

            method: "POST",
            url: "deleteProduct.php",
            data: {productName:$(this).val()},
            success: function(data)
            {
                if(data == '1')
                {
                    console.log("deleted");
                    $('body').load('adminPanel.php');
                }
            },
        });
    });
 //end delegate

    $("#addProductBtn").click(function(){
        $.ajax({
            method: "GET",
            url: "addProduct.html",
            success: function(data)
            {
                $("#showInfo").html(data);
            }

        });
    });

    $("body").delegate(".submitProductBtn","click",function(){
        var productName = $(".productName").val();
        var description = $(".description").val();
        var category = $(".category").val();
        var price = $(".price").val();
        $.ajax({

            method: "GET",
            url: "addProduct.php?productName="+productName+"&description="+description+"&category="+category+"&price="+price,
            success: function(data)
            {
              console.log(data);
            },    
        });
            
        });
  
});































/* $arrayData = new Array(data.length);
for ($counter = 0; $counter < data.length; $counter++) {
    console.log(data);

    $arrayData[$counter] = '<div class="row list-group-item ">' +
        '<div class="col-lg-9 col-xs-12">' +
        '<div class="thumbnail">' +
        '<img src="' + ' ' + '" alt="' + ' ' + '">' +
        '<div class="caption">' +
        '<p class="label label-info usernameTitle">' + data[$counter][1] + '</p>' +
        '<p class=" label label-info">password:</p>' +
        '<h3 class="userPassword">' + data[$counter][2] + '</h3></br>' +
        '<p class=" label label-info">Email:</p>' +
        '<p class=" label label-danger emailLabel">' + data[$counter][4] + "$" + '</p></br></br>' +
        '<p class=" label label-info">Phone Number:</p>' +
        '<p class=" label label-danger phoneNumberLabel">' + data[$counter][5] + "$" + '</p></br></br>' +
        '<p class=" label label-info">Address:</p>' +
        '<p class=" label label-danger addressLabel">' + data[$counter][6] + "$" + '</p></br></br>' +
        '<p class=" label label-info">Status:</p>' +
        '<p class=" label label-danger statusLabel">' + data[$counter][7] + "$" + '</p></br></br>' +
        '<button class="btn btn-info">Edit info</button>' +
        '<button class="btn btn-danger">delete</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
}*/