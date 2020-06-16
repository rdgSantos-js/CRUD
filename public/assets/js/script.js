(function (win, doc) {


	let toConsole = document.querySelectorAll('#console')[0].textContent;

	console.log(JSON.parse(toConsole));

	'use strict';

	function confirmDel(e){

		e.preventDefault();

		let token = $('meta[name="csrf-token"]').attr('content');

		if(confirm("Deseja mesmo apagar?")){
		    
		    $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
                url: e.target.parentNode.href,
                type: 'DELETE',
                success:function(response) {
                   win.location.href="/";
                }
             });

		}else{
			return false;
		}
	}

	if(doc.querySelector(".js-del")){
		let btn = doc.querySelectorAll('.js-del');
		for(let i = 0; i < btn.length; i++){
			btn[i].addEventListener('click', confirmDel, false);
		}
	}

})(window,document);