// Array untuk sebagai sumber data products
const productData = [
  {
    id: 1,
    image: "https://iili.io/JER1GYQ.md.png",
    name: "Matur Suwon",
    category: "Kretek",
    price: 14000,
  },
  {
    id: 2,
    image: "https://iili.io/JERMnCF.md.png",
    name: "Matur Suwon Spesial Mix",
    category: "Kretek",
    price: 15000,
  },
  {
    id: 3,
    image: "https://iili.io/JERVkxI.md.png",
    name: "Raos Ngeten Puron",
    category: "Kretek",
    price: 14000,
  },
  {
    id: 4,
    image: "https://iili.io/JERW9Jj.md.png",
    name: "Raos Ngeten Puron Oxy",
    category: "Kretek",
    price: 15000,
  },
  {
    id: 5,
    image: "https://iili.io/JERWIbp.md.png",
    name: "Raos Ngeten Mawon",
    category: "Kretek",
    price: 20000,
  },
  {
    id: 6,
    image: "https://iili.io/JERWags.md.png",
    name: "Merah Putih",
    category: "Kretek",
    price: 25000,
  },
  {
    id: 7,
    image: "https://iili.io/JERhfSa.md.png",
    name: "Raos Paling Eco",
    category: "Kretek",
    price: 35000,
  },
  {
    id: 8,
    image: "https://iili.io/JERhjHb.md.png",
    name: "Raos Paling Eco Oxy",
    category: "Kretek",
    price: 40000,
  },
  {
    id: 9,
    image: "https://iili.io/JERklDb.md.png",
    name: "Alastu Blokosutho",
    category: "Kretek",
    price: 28000,
  },
  {
    id: 10,
    image: "https://iili.io/JERkts4.md.png",
    name: "Alastu Caffetin",
    category: "Kretek",
    price: 36500,
  },
  {
    id: 11,
    image: "https://iili.io/JER8FyX.md.png",
    name: "Getszemani",
    category: "Kretek",
    price: 35000,
  },
];

// Deklarasi variable array kosong untuk menampung data cart
let cart = [];

// Function untuk memberikan style display none ke setiap section page
function hideAllSections() {
  document.querySelectorAll("section").forEach((section) => {
    section.style.display = "none";
  });
}

/*Pada saat page on load seluruh section tag menjadi hidden kecuali section home page */
document.addEventListener("DOMContentLoaded", function () {
  // Memanggil Fungsi hideAllSections
  hideAllSections();
  // Setelah semua section memiliki style display none, khusus untuk section Home pada awal load halaman display nya block
  document.getElementById("home").style.display = "block";

  // Menambahkan event listener ke setiap class nav-link
  document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault(); // Mencegah reload page

      const targetId = this.getAttribute("data-target"); // Attribut untuk masin-masing nav bar
      hideAllSections(); // Memanggil kembali fungsi hideAllSections
      document.getElementById(targetId).style.display = "block"; // Untuk navabar yang di click akan di set display block
    });
  });
  // Memanggil fungsi untuk render pada Products Page
  renderProducts();
});

/* Fungsi untuk membuat card untuk masing - masing product*/
function createProductCard(product) {
  // Create card product container
  const card = document.createElement("div");
  card.classList.add("card", "p-3", "mb-1", "shadow");

  // Create container for image
  const imageWrapper = document.createElement("div");
  imageWrapper.classList.add("card-img-top", "text-center");
  const image = document.createElement("img");
  image.src = product.image;
  image.alt = product.name;
  imageWrapper.appendChild(image);
  card.appendChild(imageWrapper);

  // Create container for product information
  const cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  // Product Name
  const nameWrapper = document.createElement("div");
  nameWrapper.classList.add("mb-2"); // Add margin-bottom for spacing
  nameWrapper.style.minHeight = "50px"; // Set minimum height
  const name = document.createElement("h5");
  name.classList.add("card-title");
  name.textContent = product.name;
  nameWrapper.appendChild(name);
  cardBody.appendChild(nameWrapper);

  // Product Category
  const categoryWrapper = document.createElement("div");
  categoryWrapper.classList.add("mb-2"); // Add margin-bottom for spacing
  categoryWrapper.style.minHeight = "20px"; // Set minimum height
  const category = document.createElement("p");
  category.classList.add("card-text");
  category.textContent = product.category;
  categoryWrapper.appendChild(category);
  cardBody.appendChild(categoryWrapper);

  // Product Price
  const priceWrapper = document.createElement("div");
  priceWrapper.classList.add("mb-2"); // Add margin-bottom for spacing
  priceWrapper.style.minHeight = "20px"; // Set minimum height
  const price = document.createElement("p");
  price.classList.add("card-text", "fw-bold");
  price.textContent = `Rp. ${product.price.toFixed(0)}`;
  priceWrapper.appendChild(price);
  cardBody.appendChild(priceWrapper);

  // Button go to cart
  const addToCartButtonWrapper = document.createElement("div");
  addToCartButtonWrapper.style.minHeight = "40px";
  const addToCartButton = document.createElement("button");
  addToCartButton.classList.add("btn", "btn-primary");
  addToCartButton.textContent = "Add to Cart";
  addToCartButton.onclick = function () {
    addToCart(product.id);
  };
  addToCartButtonWrapper.appendChild(addToCartButton);
  cardBody.appendChild(addToCartButtonWrapper);

  card.appendChild(cardBody);
  return card;
}

/* Fungsi untuk membuat container untuk cards products*/
function renderProducts() {
  const productContainer = document.getElementById("listProducts");
  productContainer.innerHTML = ""; // Memastikan element kontainer kosong

  // Membuat container untuk menampung card products
  const productGrid = document.createElement("div");
  productGrid.classList.add("container", "mt-5");
  productContainer.appendChild(productGrid);

  // Membuat grid layout pada container dan set lebar masing - masing card serta jarak antara card
  productGrid.style.display = "grid";
  productGrid.style.gridTemplateColumns =
    "repeat(auto-fit, minmax(250px, 1fr))";
  productGrid.style.gap = "15px";

  // Looping ke Array of object data product yang digunakan sebagai penampungan data products
  for (let i = 0; i < productData.length; i++) {
    const card = createProductCard(productData[i]);

    // append setiap card ke kontainer
    productGrid.appendChild(card);
  }
}

// Fungsi menambahkan product ke cart
function addToCart(productId) {
  const productToAdd = productData.find((product) => product.id === productId);
  const cartItem = cart.find((item) => item.product.id === productId);

  if (cartItem) {
    // Jika produk sudah masuk ke list cart hanya menambahkan jumlah nya tanpa menambahnya lagi di list
    cartItem.quantity += 1;
  } else {
    // Jika produk belum ada di list cart maka akan di masukkan ke array cart
    cart.push({ product: productToAdd, quantity: 1 });
  }

  // update cart list
  renderCart();
}

// Fungsi untuk create element masing - masing list product pada list cart

function renderCart() {
  const cartItemsContainer = document.getElementById("cartItems");
  cartItemsContainer.innerHTML = "";
  cartItemsContainer.classList.add("row", "g-3");

  cart.forEach((item) => {
    const cartItemCol = document.createElement("div");
    cartItemCol.classList.add("col-12");
    cartItemsContainer.appendChild(cartItemCol);

    const cartItemElement = document.createElement("div");
    cartItemElement.classList.add(
      "card",
      "p-2",
      "d-flex",
      "flex-column",
      "flex-md-row", // Horizontal layout on medium devices and up
      "align-items-center",
      "justify-content-between" // Distribute space between items
    );
    cartItemCol.appendChild(cartItemElement);

    // Product Image
    const imgWrapper = document.createElement("div");
    imgWrapper.classList.add("mb-3", "mb-md-0", "me-md-3"); // Adjust spacing for medium devices and up
    const img = document.createElement("img");
    img.src = item.product.image;
    img.alt = item.product.name;
    img.classList.add("img-fluid");
    img.style.maxWidth = "100px"; // Limit image width
    imgWrapper.appendChild(img);
    cartItemElement.appendChild(imgWrapper);

    // Product Name and Price
    const nameAndPriceWrapper = document.createElement("div");
    nameAndPriceWrapper.classList.add("flex-grow-1", "min-width-0", "me-md-3"); // Add margin
    nameAndPriceWrapper.style.maxWidth = "50%"; // Set a max-width to balance space distribution
    const name = document.createElement("h5");
    name.textContent = item.product.name;
    nameAndPriceWrapper.appendChild(name);
    const price = document.createElement("p");
    price.textContent = `Rp. ${item.product.price.toFixed(0)}`;
    nameAndPriceWrapper.appendChild(price);
    cartItemElement.appendChild(nameAndPriceWrapper);

    // Quantity Controls
    const controlsWrapper = document.createElement("div");
    controlsWrapper.classList.add(
      "d-flex",
      "align-items-center",
      "justify-content-center",
      "me-md-2"
    ); // Adjust spacing
    controlsWrapper.style.flexShrink = "0";
    const decreaseButton = document.createElement("button");
    decreaseButton.classList.add("btn", "btn-outline-secondary", "me-2");
    decreaseButton.textContent = "-";
    decreaseButton.onclick = () => updateQuantity(item.product.id, "decrease");
    controlsWrapper.appendChild(decreaseButton);

    const quantitySpan = document.createElement("span");
    quantitySpan.textContent = item.quantity;
    controlsWrapper.appendChild(quantitySpan);

    const increaseButton = document.createElement("button");
    increaseButton.classList.add("btn", "btn-outline-secondary", "ms-2");
    increaseButton.textContent = "+";
    increaseButton.onclick = () => updateQuantity(item.product.id, "increase");
    controlsWrapper.appendChild(increaseButton);
    cartItemElement.appendChild(controlsWrapper);

    // Subtotal
    const subtotalElement = document.createElement("p");
    subtotalElement.textContent = `Subtotal: Rp. ${
      item.product.price * item.quantity.toFixed(0)
    }`;
    // Adjust margin to ensure spacing between subtotalElement and controlsWrapper
    subtotalElement.style.marginLeft = "auto";
    cartItemElement.appendChild(subtotalElement);
  });

  updateTotal();
}

function updateQuantity(productId, action) {
  const cartItem = cart.find((item) => item.product.id === productId);
  if (cartItem) {
    if (action === "increase") {
      // Jika action increase akan menambah qty produk
      cartItem.quantity += 1;
    } else if (action === "decrease" && cartItem.quantity > 1) {
      // Jika action decrease akan mengurangi qty produk
      cartItem.quantity -= 1;
    }
    // Update list cart
    renderCart();
  }
}

// Fungsi untuk menambahkan total cart setiap ada perbahan pada list item
function updateTotal() {
  const total = cart.reduce(
    (acc, item) => acc + item.product.price * item.quantity,
    0
  );
  document.getElementById(
    "cartTotal"
  ).textContent = `Total: Rp. ${total.toFixed(0)}`;
}

// Pada size display smartphone untuk menutup drop down menu jika klik di luar bagian dari dropdown
document.addEventListener("click", function (event) {
  if (!event.target.closest("#navbarResponsive")) {
    const dropdown = document.getElementById("navbarResponsive");
    const dropdownToggle = document.querySelector(".navbar-toggler");
    dropdown.classList.remove("show");
    dropdownToggle.setAttribute("aria-expanded", "false");
    dropdownToggle.classList.remove("active");
  }
});

/* Function untuk menampilkan cart */
function showCart() {
  hideAllSections();

  // Menampilkan hanya section cart
  document.getElementById("cart").style.display = "block";

  // Memastikan List cart selalu update
  renderCart();
}

/* Function untuk menampilkan Registration Form */
function showRegisterForm() {
  hideAllSections();

  // Menampilkan hanya section registration
  document.getElementById("registration").style.display = "block";
}

/* Function kembali ke log in page */
function backToLogin() {
  hideAllSections();

  // Menampilkan hanya section login
  document.getElementById("login").style.display = "block";
}

/* Function kembali ke product page */
function toProduct() {
  hideAllSections();

  // Menampilkan hanya section login
  document.getElementById("products").style.display = "block";
}

/* Function reload page */
function reloadPage() {
  window.location.reload();
}

// Jika klik go to cart button akan memanggil showCart
document
  .getElementById("goToCartButton")
  .addEventListener("click", function () {
    showCart();
  });

// Jika klik go to registration
document
  .getElementById("goToRegistration")
  .addEventListener("click", function () {
    showRegisterForm();
  });

// back home after succes cart transaction
document.getElementById("done-checkout").addEventListener("click", function () {
  reloadPage();
});

// goto product page
document.getElementById("fail-checkout").addEventListener("click", function () {
  toProduct();
});

// Jika klik go to log in
document.getElementById("backToLogin").addEventListener("click", function () {
  backToLogin();
});

function validateRegistrationForm() {
  // Get form elements
  const name = document.getElementById("nameInput").value;
  const email = document.getElementById("emailInput").value;
  const password = document.getElementById("passwordInput").value;
  const confirmPassword = document.getElementById("confirmPasswordInput").value;
  const termsConditions = document.getElementById("termsConditions").checked;

  // Check for empty fields
  if (
    name === "" ||
    email === "" ||
    password === "" ||
    confirmPassword === ""
  ) {
    alert("Please fill in all required fields.");
    return false;
  }

  // Check for password match
  if (password !== confirmPassword) {
    alert("Passwords do not match. Please try again.");
    return false;
  }

  // Check if terms and conditions are accepted
  if (!termsConditions) {
    alert("Please accept the terms and conditions to proceed.");
    return false;
  }

  // If all checks pass, submit the form
  return true;
}

// Attach the validation function to the form's submit event
document
  .getElementById("registration-form")
  .addEventListener("submit", (event) => {
    if (!validateRegistrationForm()) {
      event.preventDefault(); // Prevent form submission if validation fails
    }
  });

document
  .getElementById("checkoutButton")
  .addEventListener("click", function () {
    // Check if the cart is empty
    if (cart.length === 0) {
      // Cart is empty, show the empty cart modal
      var emptyCartModal = new bootstrap.Modal(
        document.getElementById("emptyCartModal")
      );
      emptyCartModal.show();
    } else {
      // Cart has items, proceed to show the checkout success modal
      var checkoutModal = new bootstrap.Modal(
        document.getElementById("checkoutModal")
      );
      checkoutModal.show();
    }
  });
