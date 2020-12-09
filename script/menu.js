document.querySelector('#menu').addEventListener('click', function (e) { 
  if (document.querySelector('#firstLevel').style.display == 'block') {
      document.querySelector('#firstLevel').style.display = 'none';
  } else {
      document.querySelector('#firstLevel').style.display = 'block';
  }
});
