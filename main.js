{
  /* <form id='loginForm' action="login.php" method="post">
    username <input id='username' type="text" name="username" value="" /><br />
    password <input id='password' type="password" name="password" value=""><br />
    div id errormessage => die haal je op met query => append
    <input type="submit" value="login"/>
</form>     */
}

const loginFormElement = document.querySelector("#loginForm");
console.log("kaas");
loginFormElement.addEventListener("submit", (e) => {
  const usernameElement = document.querySelector("#username").value;
  const passwordElement = document.querySelector("#password").value;
  const errorElement = document.querySelector("#errormessage");
  const errorMessage = document.createElement("p");
  errorMessage.innerHTML = " Niks ingevoerd";
  if (usernameElement == "" || passwordElement == "") {
    e.preventDefault();
    alert("Please voer iets in ofzo");
    errorElement.appendChild(errorMessage);
    errorElement.style.color = "red";
  }
});
