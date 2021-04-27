<style>
.header {
  background: var(--bgDark);
  width: 100%;
}

.header_block {
  max-width: 1280px;
  height: 3.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  box-sizing: border-box;
  padding: 0 2rem;
}

.logo {
  font-family: "Montserrat", serif;
  font-size: medium;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
  letter-spacing: 0.1em;
  text-decoration: none;
  text-shadow: 0 1px 0 #fff, 0 0 0 #bdadad, 0 0 0 rgb(163, 161, 161),
    0 3px 0 #706f6f;
}

.logo:hover,
.products:hover,
.cart:hover {
  cursor: pointer;
}

.block_logo {
  width: 100%;
}

.block_shop {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  column-gap: 2rem;
  width: 100%;
}

.products {
  text-decoration: none;
  color: var(--txtWhite);
  text-transform: uppercase;
  font-family: "Montserrat-ExtraLight", serif;
  font-weight: 300;
}

.cart {
  height: 1.5rem;
  filter: invert(1);
}

.cart:hover {
  cursor: pointer;
}
</style>

<div class="header">
  <div class="header_block">
    <div class="block_logo">
      <a class="logo" href="/e-commerce">TRUST-LAND</a>
    </div>
    <div class="block_shop">
      <a class="products" title="Out products" href="/e-commerce/pages/productList" id="product">Our Products</a>
      <a class="products auth" title="Sign In" href="/e-commerce/pages/signIn">Sign In</a>
      <a class="products auth" title="Sign Up" href="/e-commerce/pages/signUp">Sign Up</a>
      <a href="/e-commerce/pages/basket" title="Basket page"><img src="/e-commerce/assets/icons/cart.svg" alt="cart"
          class="cart" />
      </a>
    </div>
  </div>
</div>

<script>
'use strict';
var auth = document.querySelectorAll(".auth");
var user = localStorage.getItem('user');
var demo = document.createElement('A');
var signOut = document.createElement('A');
var sibling = document.querySelector('#product');
var parentDiv = sibling.parentNode;


function checkUser(username) {
  if (!username) return
  Array.from(auth).forEach(item => item.style.display = 'none')
  demo.appendChild(document.createTextNode(username))
  signOut.appendChild(document.createTextNode('Sign Out'))
  demo.classList.add('products')
  signOut.classList.add('products')
  parentDiv.insertBefore(demo, sibling.nextSibling)
  parentDiv.insertBefore(signOut, demo.nextSibling)
  signOut.href = "/e-commerce/pages/signOut"
  // signOut.addEventListener('click', logOut)
}

user && checkUser(user)
</script>