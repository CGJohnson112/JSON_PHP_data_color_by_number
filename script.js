// Select all elements with the class "product-row"
const rows = document.querySelectorAll(".product-row");

// Loop through each "product-row" element
for(let i = 0; i < rows.length; i++){

    // Get the stock value of the current product
const stock = rows[i].querySelector(".stock").textContent;

// Add a class to the current element based on stock value
    // Product is out of stock
    if(stock == 0){ 
        rows[i].classList.add("out-of-stock");
      } 

     // Product has low stock
    else if(stock > 0 && stock < 5){ 
        rows[i].classList.add("low-stock"); 
      }

    // Product has medium stock
    else if(stock >= 5 && stock < 10){ 
        rows[i].classList.add("medium-stock");
       } 
    
     // Product has high stock
    else { rows[i].classList.add("high-stock"); }

}