$(function(){
  'use strict'
  function load_data(query){
    $.ajax({
     url:"../../action/users/search/history.php",
     method:"POST",
     data:{
      query:query
      },
     success:function(data)
     {
      $('#historyy').html(data);
     }
    });
  }
  load_data();
 $("#search_history").keyup(function() {
     var search = $(this).val();
     console.log(search);
     if (search != '') {
         load_data(search);
     }
     else {
         load_data();
     }
 });
  // showing modal with effect
  $('.modal-effect').on('click', function(e){
    e.preventDefault();
    var effect = $(this).attr('data-effect');
    $('#modaldemo1').addClass(effect);
  });

  // hide modal with effect
  $('#modaldemo8').on('hidden.bs.modal', function (e) {
    $(this).removeClass (function (index, className) {
        return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
    });
  });

  $('#checks').on('click', function(e) {
    var checkboxes = document.getElementsByName('ids[]');
    var selected = [];
    for (var i=0; i<checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selected.push(checkboxes[i].value);
        }
    }
    if(selected != "") {
      $.ajax({
       url:"../../action/users/delete_history.php",
       method:"POST",
       data:{
        query:selected
       },
       success:function(data)
       {
        if(data == true) {
          window.location.reload("./history.php")
        }
       }
      });
    }
  });
});