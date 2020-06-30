document.querySelector('#login').addEventListener('click', function (e) {
    const username = document.querySelector('#username').value;
    const password = document.querySelector('#password').value;
    const url = '/api/articles';
    const data = {
      "username": username,
      "password": password
    };
    const failed = document.querySelector('#login-error');

    $.ajax({
        url: url,
        method: "GET",
        data: data,
        dataType: "json",
        success: function (response) {
          console.log(response);
        },
        error: function (err) {
            console.log(err.responseText);
        }
    });

    e.preventDefault();

});

// Create session
function createSession(response) {
  const storage = localStorage;
  let session = [];
  session.push(response);
  storage.setItem("session", JSON.stringify(session));
}

function redirect(response) {
if (response.role_id == 1)
    window.location.replace("dashboard.php");
else
    window.location.replace("table.php");
}
