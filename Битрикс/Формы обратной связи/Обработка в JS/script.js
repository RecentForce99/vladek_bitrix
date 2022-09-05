let timeOut;
$('.feedback-advanced-ajax').submit(function (e) {
		e.preventDefault()
		var that  = $(this),
			data  = that.serialize(),
			name  = that.find('input[name="NAME"]').val(),
			phone = that.find('input[name="PHONE"]').val()

		if(name.length <= 1)
		{
			$('.feedback-advanced.errortext-name').show()

			clearTimeout(timeOut);
			timeOut = setTimeout(function() {
				$('.feedback-simple.errortext-name').hide()
			}, 3000)
			return;
		}
		else if(phone.length <= 9)
		{
			$('.feedback-advanced.errortext-phone').show()
			clearTimeout(timeOut);
			timeOut = setTimeout(function() {
				$('.feedback-advanced.errortext-phone').hide()
			}, 3000)
			return;
		}

		$.ajax({
			type: 'POST',
			url: '/ajax/feedback/advancedForm.php',
			data: data,
			dataType: 'html',
			success: function (response) {
				if(response == 1)
				{
					$('.pop-up__complete').show();
					that.hide()
				}
				else console.log(response)
			},

		});

		return false;

	});
