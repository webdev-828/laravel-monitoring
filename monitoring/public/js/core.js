/*************************************************| Monitoring Default Javascript |******************************************************************
Theme Name:      monitoring
Company Website:
Description:     New Design of monitoring | All Rights Reserved 2017
Author:          Marat Raimberdievich
Version:         1.0
Tags:

************************************* | |*********************************************************/

// mozfullscreenerror event handler
function errorHandler() {
   alert('mozfullscreenerror');
}
document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);

// toggle full screen
function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}

// keydown event handler
document.addEventListener('keydown', function(e) {
  if (e.keyCode == 13 || e.keyCode == 70) { // F or Enter key
    toggleFullScreen();
  }
}, false);
/*Full screen toggle */
