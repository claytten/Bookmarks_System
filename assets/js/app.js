(function () {
  'use strict';

  var cardElement = document.querySelector('.card-user');
  var addCardBtnElement = document.querySelector('.add__btn');
  var addCardInputElement = document.querySelector('.add__input');
  var spinnerElement = document.querySelector('.card__spinner');
  var bgSyncElement = document.querySelector('.custom__button-bg');

  //Add github user data to the card
  function addGitUserCard() {
    var userInput = addCardInputElement.value;
    if (userInput === '') return;
    addCardInputElement.value = '';
    fetchGitUserInfo(userInput);
  }

  //Add card click event
  addCardBtnElement.addEventListener('click', addGitUserCard, false);

  //To get github user data via `Fetch API`
  function fetchGitUserInfo(username) {
    var name = username || '';
    var url = 'https://api.github.com/users/' + name;

    fetch(url, { method: 'GET' })
    .then(function(fetchResponse){ return fetchResponse.json() })
      .then(function(response) {
        cardElement.querySelector('.card__title').textContent = response.name;
        cardElement.querySelector('.card__desc').textContent = response.bio;
        cardElement.querySelector('.card__img').setAttribute('src', response.avatar_url);
        cardElement.querySelector('.card__following span').textContent = response.following;
        cardElement.querySelector('.card__followers span').textContent = response.followers;
        cardElement.querySelector('.card__temp span').textContent = response.company;
        cardElement.querySelector('.card__html_url span').textContent = response.html_url;
        console.log(response.name);
        if(name != '' && response.html_url != null) {
          $.ajax({
           url:"../../action/users/add_history.php",
           method:"POST",
           data:{
            name:response.name,
            avatar: response.avatar_url,
            html_url: response.html_url
           },
           success:function(data)
           {
            console.log(data);
           }
          });
        }
      })
  }
  

  fetchGitUserInfo(localStorage.getItem('request')); //Fetch github users data
})();
