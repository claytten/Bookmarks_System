$(function(){
  'use strict'
  $('#checks').on('click', function(e) {
    var checkboxes = document.getElementsByName('ids[]');
    var stars = document.getElementsByName('star');
    var selected = [];
    var star = [];
    for (var i=0; i<checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            star.push(stars[i].value);
            selected.push(checkboxes[i].value);
        }
    }
    if(selected != "") {
      $.ajax({
       url:"../../action/users/delete_bookmark.php",
       method:"POST",
       data:{
        query1:selected,
        query2:star
       },
       success:function(data)
       {
        window.location.reload("./bookmark.php")
       }
      });
    }
  });
  $('#edits').on('click', function(e) {
    var checkboxes = document.getElementsByName('ids[]');
    var selected = [];
    for (var i=0; i<checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selected.push(checkboxes[i].value);
        }
    }
    if(selected.length == 1) {
      window.location = "./edit_bookmarks.php?id=" + selected;
    }
  });
});