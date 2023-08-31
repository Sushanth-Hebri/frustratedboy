$(document).ready(function() {
    var pageLinks = $('.page-link');
    var pageContent = $('#page-content');
  
    pageLinks.on('click', function(event) {
      event.preventDefault();
      var nextPage = $(this).attr('href');
  
      pageContent.addClass('page-transition');
      setTimeout(function() {
        pageContent.load(nextPage + ' #page-content', function() {
          pageContent.removeClass('page-transition');
          pageContent.addClass('visible');
        });
      }, 500);
    });
  });
  