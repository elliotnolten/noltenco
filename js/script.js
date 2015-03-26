$(document).ready(function(){
  var home = $('.home');
  
  //home slider
  var workBg = home.find('#workbg'),
      workSlider = home.find('#work-slider');
  workBg.flexslider({
    animation: 'fade',
    controlNav: false,
    directionNav: false,
    keyboard: true,
    move: 1
  });

  workSlider.flexslider({
    controlsContainer: '.work-slider',
    animation: 'slide',
    animationSpeed: 300,
    keyboard:true,
    sync: '#workbg'
  });

  //ajax loading
  var postLink = home.find('.post-link'),
      singleProject = home.find('#single-project'),
      mainContent = home.find('#main-content').find('article').first();
  $.ajaxSetup({cache:false});
  postLink.on('click.showProject',function(){
    var post_link = $(this).attr('href');
    console.log('ajax');
    console.log(mainContent.html());
    mainContent.fadeOut('slow',function(){
      singleProject.fadeOut();
      singleProject.load(post_link,function(){
          $(this).fadeIn();
      });
      workBg.addClass('show-project').animate({height:'200px'});
      workSlider.addClass('show-project').animate({height:'200px'});
    });
    return false;
  });

});






















