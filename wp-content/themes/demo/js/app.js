
// validation bootstrap
(function() {
    'use strict';
    window.addEventListener('load', function() {
        
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else {
            event.preventDefault();
            event.stopPropagation();
            ajaxSubmit();
   
            event.stopPropagation();
            form.classList.add('was-validated');
        }
        
        form.classList.add('was-validated');
        }, false);
    });
    }, false);
})();

// ajax simulation
function ajaxSubmit(){

    // here need to full link to the project or url to work ajax 
    var ajaxscript = { ajax_url : '/wordpress/wp-challenge/wp-admin/admin-ajax.php' }
    
    var messageTip = document.getElementById('form-messages');

    var first_name = document.getElementById('validationCustom01').value;
    var last_name = document.getElementById('validationCustom02').value;
    var email = document.getElementById('validationCustom03').value;
    var phone = document.getElementById('validationCustom04').value;
    var subject = document.querySelector('#validationCustom05').value;
    var description = document.querySelector('#validationCustom06').value;
   
    let data = {
        first_name:first_name,
        last_name:last_name,
        email:email,
        phone:phone,
        subject:subject,
        description:description,
    };

    jQuery.ajax({
        url : ajaxscript.ajax_url,
        data : {
            action : 'post_cart_clb',
            fields: data,
        },
        method : 'POST', //Post method
        success : function( response ){ 
            console.log(response);
            messageTip.innerHTML = `<span class="text-success">${response}</span>`;
        },
        error : function(error){ 
            messageTip.innerHTML = `<span class="text-danger">${error}</span>`;
         }
      })

    return false;
}