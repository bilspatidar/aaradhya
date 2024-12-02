
  <style>
    /* General Styles */
  
    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }

    /* Main Content */
    .main {
      flex: 3;
      background: #22252a;
      border-radius: 10px;
      padding: 20px;
      width: 100%;
    }

    .topbar {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .search {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .actions .btn {
      padding: 10px 20px;
      background: #ff9900;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left:10px;
      margin-bottom:18px;
    }

    .categories {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 20px;
    }

    .category {
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      background: #f8f8f8;
    }

    .category.active {
      background: #ff9900;
      color: #fff;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
    }

    .product-card {
      border: 1px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      background: #fff;
      padding: 10px;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: scale(1.05);
    }

    .product-image {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-bottom: 1px solid #ccc;
    }

    .product-name {
      font-size: 18px;
      margin: 10px 0;
    }

    .product-price {
      color: #ff9900;
      font-weight: bold;
    }

    /* Cart Section */
    .cart {
    flex: 1;
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    display: flex;
    flex-direction: column;
  }

  .cart h2 {
    margin-bottom: 20px;
    color: #333;
  }

  .cart-items {
    flex: 1;
    overflow-y: auto;
    margin-bottom: 20px;
  }

  .cart-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  .cart-footer p {
    margin: 10px 0;
  }

  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .hold-order {
    background: #ff9900;
    color: #fff;
  }

  .proceed {
    background: #28a745;
    color: #fff;
  }

  .cart {
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    padding: 20px;
    width: 350px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  h2 {
    margin: 0 0 20px;
    font-size: 24px;
    text-align: center;
  }

  .cart-items {
    min-height: 100px;
    border: 1px dashed #ccc;
    margin-bottom: 16px;
    padding: 10px;
    text-align: center;
    color: #666;
  }

  .cart-items div {
    text-align: left;
    margin-bottom: 8px;
    color: #000;
  }

  .btn {
    display: inline-block;
    margin: 8px 5px;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #0056b3;
  }

  .add-item-form {
    display: none;
    margin-top: 16px;
  }

  .add-item-form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .cart-footer {
    margin-top: 20px;
    text-align: center;
  }

  .cart-footer p {
    margin: 8px 0;
  }

  .remove-btn {
    background-color: #dc3545;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .remove-btn:hover {
    background-color: #c82333;
  }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .main, .cart {
        width: 100%;
      }

      .categories {
        justify-content: space-between;
      }
    }
  </style>

  <div class="container">
    <!-- Main Content -->
    <main class="main">
      <!-- Topbar -->
      <div class="topbar">
        <input type="text" placeholder="Search products..." class="search">
        <div class="actions">
          <button class="btn select-table">Select Table</button>
        </div>
      </div>

      <!-- Product Categories -->
      <div class="categories">
        <button class="category active" onclick="filterProducts('starters')">Starters</button>
        <button class="category" onclick="filterProducts('breakfast')">Breakfast</button>
        <button class="category" onclick="filterProducts('lunch')">Lunch</button>
        <button class="category" onclick="filterProducts('dinner')">Dinner</button>
        <button class="category" onclick="filterProducts('desserts')">Desserts</button>
        <button class="category" onclick="filterProducts('beverages')">Beverages</button>
      </div>

      <!-- Product Grid -->
      <div class="product-grid" id="productGrid">
        <!-- Products will be dynamically added here -->
      </div>
    </main>

    <!-- Cart Section -->
    <aside class="cart">
    <h2> + Add Items</h2>
    <div class="cart-items" id="cartItems">
      <!-- Cart items will be dynamically added here -->
    </div>

    <div class="add-item-form" id="addItemForm">
      <input type="text" id="itemName" placeholder="Enter item name" />
      <input type="number" id="itemPrice" placeholder="Enter item price" />
      <button class="btn" id="addItemBtn">Add to Cart</button>
    </div>

    <button class="btn" id="showFormBtn"> + Add Item</button>

    <div class="cart-footer text-dark">
      <p>Subtotal: <span id="subtotal">$0.00</span></p>
      <p>Tax: <span id="tax">$0.00</span></p>
      <p><strong>Payable Amount:</strong> <span id="payableAmount">$0.00</span></p>
      <button class="btn hold-order">Hold Order</button>
      <button class="btn proceed">Proceed</button>
    </div>
  </aside>
  </div>

  <script>
    const products = {
      starters: [
        { name: "Spring Rolls", price: 12, image: "starter1.jpg" },
        { name: "Schezwan Egg Noodles", price: 24, image: "noodle1.jpg" }
      ],
      breakfast: [
        { name: "Pancakes", price: 10, image: "breakfast1.jpg" },
        { name: "Omelette", price: 8, image: "breakfast2.jpg" }
      ]
    };

    const productGrid = document.getElementById("productGrid");

    function filterProducts(category) {
      productGrid.innerHTML = "";
      document.querySelectorAll(".category").forEach(cat => cat.classList.remove("active"));
      document.querySelector(`[onclick="filterProducts('${category}')"]`).classList.add("active");
      products[category]?.forEach(product => {
        productGrid.innerHTML += `
          <div class="product-card">
            <img src="${product.image}" alt="${product.name}" class="product-image">
            <h3 class="product-name">${product.name}</h3>
            <p class="product-price">$${product.price.toFixed(2)}</p>
          </div>
        `;
      });
    }

    filterProducts("starters");
    
  </script>


<script>
    // References to DOM elements
    const showFormBtn = document.getElementById('showFormBtn');
    const addItemForm = document.getElementById('addItemForm');
    const addItemBtn = document.getElementById('addItemBtn');
    const cartItems = document.getElementById('cartItems');
    const subtotalEl = document.getElementById('subtotal');
    const taxEl = document.getElementById('tax');
    const payableAmountEl = document.getElementById('payableAmount');

    let subtotal = 0;
    const taxRate = 0.1; // 10% tax

    // Show the Add Item form
    showFormBtn.addEventListener('click', () => {
      addItemForm.style.display = addItemForm.style.display === 'block' ? 'none' : 'block';
    });

    // Add item to the cart
    addItemBtn.addEventListener('click', () => {
      const itemName = document.getElementById('itemName').value;
      const itemPrice = parseFloat(document.getElementById('itemPrice').value);

      if (itemName && itemPrice) {
        // Create new item element
        const item = document.createElement('div');
        item.classList.add('cart-item');
        item.innerHTML = `
          ${itemName} - $${itemPrice.toFixed(2)}
          <button class="remove-btn" onclick="removeItem(this, ${itemPrice})">Remove</button>
        `;
        cartItems.appendChild(item);

        // Update subtotal and total
        subtotal += itemPrice;
        updateTotal();
      } else {
        alert('Please enter both item name and price.');
      }
    });

    // Remove item from the cart
    function removeItem(button, itemPrice) {
      button.parentElement.remove();
      subtotal -= itemPrice;
      updateTotal();
    }

    // Update subtotal and total
    function updateTotal() {
      const tax = subtotal * taxRate;
      const total = subtotal + tax;

      subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
      taxEl.textContent = `$${tax.toFixed(2)}`;
      payableAmountEl.textContent = `$${total.toFixed(2)}`;
    }
  </script>