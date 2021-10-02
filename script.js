// Home
const logoutBtn = document.querySelector('.logout-btn');
logoutBtn.addEventListener("click", function () {
  let confirmAction = confirm("Are you sure want to logout?");
  if (confirmAction) {
    window.location.href = "login.html", true;
    alert("You have logout from your account!");
  } else {
    return;
  }
})