const toggleButton = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");

toggleButton.addEventListener("click", () => {
  toggleButton.classList.toggle("active");
  navigation.classList.toggle("active");
});

navigation.addEventListener("click", () => {
  toggleButton.classList.toggle("active");
  navigation.classList.toggle("active");
});
//______________________________________________________________
async function inscripsio() {

  const { value: email } = await Swal.fire({
    title: "Posa aqui el teu correu electronic",
    input: "email",
    inputLabel: "El teu correu electronic",
    InputPlaceholder: "Escriu el teu correu"
  })
  if (email) {
    Swal.fire("El correu afegit es: ${email}")
  } else {
    Swal.fire("El correu no es correcte")
  }
}



/*Swal.fire({
  title: 'Quants anys tens?',
  icon: 'question',
  footer: 'Edat minima:18 anys.',
  input: 'range',
  color: '#0d8e89',
  inputLabel: 'Edat',
  inputAttributes: {
    min: 1,
    max: 120,
    step: 1
  },
  inputValue: 25,
}) */

AOS.init();