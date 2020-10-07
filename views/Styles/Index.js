var $elem = $('.slide');

MotionUI.animateIn($elem, 'slide-in-left', function() {
  console.log('Transition finished!');
});