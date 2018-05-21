$(function(){
	$('#login').hide();

	$('.btn-lg').click(function(){
		$('#login').slideDown();
	});


	$('#deposit').click(function(){
		$('#content').html('<h1>Deposit Funds<h1><br><form method="POST" action="#"><input type="text" placeholder="Amount" name=""><input type="submit" class="btn-success lg"></form>').show();
	});

	$('#settings').click(function(){
		$('#content').html('<h1>Settings<h1><br><form method="POST" action="#"><input type="email" placeholder="Change e-mail" name="mail"><input type="submit" value="Change" class="btn-success lg"></form>').show();
	});

	$('#food').click(function(){
		$('#food').after('<form method="POST" action="../includes/add_food.php"><input type="text" placeholder="Name" name="name"><input type="text" placeholder="price eg. 2.30" name="price"><textarea placeholder="Description" name="desc"></textarea><input type="submit" value="Add" class="btn-success lg" name="food"></form>').show();
	});

	$('#beverage').click(function(){
		$('#beverage').after('<form method="POST" action="../includes/add_food.php"><input type="text" placeholder="Name" name="name"><input type="text" placeholder="price eg. 2.30" name="price"><textarea placeholder="Description" name="desc"></textarea><input type="submit" value="Add" class="btn-success lg" name="beverage"></form>').show();
	});

	$('.delete').click(function(){
		var confirmDelete = function (){
			var option = confirm("Are you sure?");
			if( option == true ){
				return true;
			}else{
				return false;
			}
		}

		confirmDelete();
	});

	var message = "<div class='message-box'><div>";

	$('#regButton').on('click', function(){
		$('#form').prepend(message);
		$('.message-box').append('<p class="success">Registration succesful. Check Email for confirmation. If not found, consider reloading the page.</p>').after('<br><br>').show();
	});

	var trolley = '<p><span class="item"></span><span class="price"></span></p><br><button class="btn-success">Save</button>&nbsp;<button class="btn-warning">Order</button>';
	$('.trolley').append(trolley).hide();

	$('.icon').click(function(){
		$('.trolley').show();
	});

	$('.add-item').hide();

	$('.show').click(function(){
		$('.show').hide();
		$('#settings1').hide();
		$('.del').hide();
		$('.add-item').show();
	});
});