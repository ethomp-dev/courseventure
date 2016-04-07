function showAlert(alertId) {
  var $alert = $('#' + alertId);
  $alert.css('margin-left', (50 - ($alert.width() / 2)) + '%');
  $alert.removeClass('hide');
  $alert.show();
}

function closeAlert(alertId) {
  $('#' + alertId).addClass('hide');
}
