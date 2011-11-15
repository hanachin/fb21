FB.api('/me', function(response) {
  alert('Your name is ' + response.name);
});
