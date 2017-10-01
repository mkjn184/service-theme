// We need a reference to the element we want to insert the loader into
// This can be any div we get a reference to
var $loader = $("#loader");

var $startBtn = $("button.start");
var $stopBtn = $("button.stop");

var handleStartClick = function() {
  // We start the spinner with <element>.gSpinner()
  $loader.gSpinner();
};

var handleStopClick = function() {
  // We hide the spinner with <element>.gSpinner("hide")
  $loader.gSpinner("hide");
};

$startBtn.click(handleStartClick);
$stopBtn.click(handleStopClick);

