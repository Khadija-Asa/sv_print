document.querySelector('#menu').addEventListener('click', function (e) { //Show first menu
  if (document.querySelector('#firstLevel').style.display == 'block') {
      document.querySelector('#firstLevel').style.display = 'none';
  } else {
      document.querySelector('#firstLevel').style.display = 'block';
  }
});
