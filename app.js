$(document).ready(function() {
  $('#result').hide();
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
    $('form').submit(function(){
      event.preventDefault();
      const keywords = [];
      let fullText = $("#full").val();

      if(!$('li').length) {
        alert('Insert keywords');
      }else {
        $('#result').show();
        $('li').each(function() {
          keywords.push($(this).text());
        })
        $.each(keywords, function(i, val) {
          if (fullText.indexOf(val) >= 0){
            $('#result').append('<li>' + val + ', FOUND</li>');
          }else{
            $('#result').append('<li>' + val + ', NOT FOUND</li>');
          }
        })
      }

      setTimeout(function(){
        resetData();
      }, 5000);
    });
});

function search(e) {
    if(event.key === 'Enter') {
        $('#keywordList').append('<li>mod_' + (e.value) + '</li>');    
        $('#keyword').val("");
    }
}

function resetData() {
  $('#full').val("");
  $('li').each(function() {
    $(this).remove();
  })
  $('#result').hide();
}