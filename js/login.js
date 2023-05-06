const checkLogin = () => {
  
  formulario.addEventListener("submit", (e) => {
    const userApp = document.getElementById("userApp");
    const passApp = document.getElementById("passApp");
    let errorData = document.getElementById("errorData");
    const formulario = document.getElementById("formulario");
    e.preventDefault();

    if (userApp.value == "" || passApp.value == "") {
      errorData.innerHTML = "Error en usuario y/o password favor de revisar";
    } else {
      errorData.innerHTML = "";
      location.href = "index.php";
    }
  });
};
