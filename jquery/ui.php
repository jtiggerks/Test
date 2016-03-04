 Usage is very simple; to block user activity for the page:

$.blockUI();

Blocking with a custom message:

$.blockUI({ message: '<h1><img src="busy.gif" /> Just a moment...</h1>' });

Blocking with custom style:

$.blockUI({ css: { backgroundColor: '#f00', color: '#fff'} });

To unblock the page:

$.unblockUI();

If you want to use the default settings and have the UI blocked for all ajax requests, it's as easy as this:

$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
