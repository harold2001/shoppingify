const btnSubmit = document.getElementById("btnSubmit");
const btnCart = document.getElementById("btnCart");
const cart = document.getElementById("cart");
const btnsPlus = document.querySelectorAll(".btnsPlus");
// console.log(btnsPlus);

btnSubmit.addEventListener("click", () => {
  const form = document.getElementById("formCreate");
  form.submit();
});

btnCart.addEventListener("click", () => {
  if (cart.offsetWidth === 0) {
    return (cart.style.width = "80%");
  }
  cart.style.width = 0;
});

btnsPlus.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn.value;
    // Agregar al carrito de compras con += innerHTML junto con el btn.value.
  });
});
