$(document).ready(function() {
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
});

function search(e) {
    if(event.key === 'Enter') {
        $("#keywordList").append('<li>mod_' + (e.value) + '</li>');    
        $('#keyword').val("");
    }
}
