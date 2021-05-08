
$(document).ready(function(){

  var connection = null;
  var live = false;

  window.$call = $('#call');
  window.$status = $('#status');
  window.$oooo = $('#oooo');

  Twilio.Device.setup(TWILIO_TOKEN, { debug:true })

	Twilio.Device.ready(function (device) { $call.show() })

	Twilio.Device.offline(function (device) { $call.prop('disabled', false) })

	Twilio.Device.error(function (error) {
    $call.prop('disabled', true);
    $call.text('Error');
    if(console) console.log(error);
  })

	Twilio.Device.connect(function (conn) {
		connection = conn;
		$call.text("On Air");
    $oooo.addClass('spin');
		toggleCallStatus();
    $oooo.addClass('spin');
	})

	Twilio.Device.disconnect(function (conn) {
		toggleCallStatus();
		$call.text('Thank you');
    $call.prop('disabled', true);
	})

  function call() {
    Twilio.Device.connect();
  }

  function hangup() {
    connection.sendDigits("#");
		$call.text("On Air");
    $call.prop('disabled', true);
  }

	function toggleCallStatus() {
    live = !live;
    if (live) {
      var text = 'On Air - Click to stop';
      var fn = hangup;
    } else {
      var text = 'Start recording';
      var fn = call;
      $oooo.removeClass('spin');
    }
    $call.off().text(text).click(fn)
	}

  function init() {
    live = true;
    toggleCallStatus();
  }

  init();

})