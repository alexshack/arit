// var footer_form = document.querySelector('.form');
// var form_button = document.querySelector('.form__button');
// var success_message = document.querySelector('.form-message');










// footer_form.addEventListener('submit', function() {
//   var data = 'name=Nikita&phone=+7918067918&email=a@b.ru&fromname=nameOfForm&action=callback'
//   var request = new XMLHttpRequest();
//   request.open('POST', '/wp-admin/admin-ajax.php', true);
//   request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
//   request.onload = function() {
//
//   if ( this.status >=200 && this.status < 400 ) {
//     //Success
//     var data = JSON.parse(this.response);
//     console.log('success')
//     console.log(this.status, 'success status')
//     console.log(this.response, ' success response')
//     // console.log(data);
//   } else {
//     // error
//     console.log('response error. < 400 or < 200')
//     console.log(this);
//     console.log(this.status, 'error response')
//     console.log(this.response, 'error status')
//   }
// };

	// request.onerror = function() {
	// //connection error
	//   console.log('connection error')
	//   console.log(this);
	//   console.log(this.status, ' connection error status')
	//   console.log(this.response, ' connection error response')
	// }

	// request.send(data);

// })
// request.send(data);

//
//
//
// if(form.find('input.error').length == 0) {
//     $.ajax({
//         type: "POST",
//         url: "/wp-admin/admin-ajax.php",
//         data: form.serialize() + '&action=callback',
//         success: function(result){
//             if (result.success == true) {
//                 console.log( form.attr('id') );
//
//                 success_message.html(result.message).addClass('success').slideDown(200);
//                 form[0].reset();
//             } else {
//                 success_message.html(result.message).addClass('fail').slideDown(200);
//             }
//         },
//     });
// } else {
//     form_button.removeClass('clicked');
// }
