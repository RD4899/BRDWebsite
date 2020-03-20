// productRow = document.querySelector('#shop-row');
// itemsContainer = document.querySelectorAll('#shopitem');

// window.addEventListener('load', function () {
//     if (window.location.pathname == '/root/product.php') {
//         itemTitle = document.getElementById('title');
//         var newData = localStorage['productName'];
//         localStorage.removeItem['productName'];
//         itemTitle.innerHTML = newData;
//         clickHandler();
//     }
//     else
//     {
//        // DisplayItems();
//     }
// });

// for (let i = 0; i < itemsContainer.length; i++) {
//     itemsContainer[i].addEventListener('mousedown', clickHandler);
// }

// function ClickItem() {
    
// }

// function clickHandler(e) {
//     var data = this.getAttribute('name');
//     console.log(data);
//     localStorage.setItem('productName', data);
//     window.location.replace('/root/product.php');
//     // Add an item to the history log
//     history.pushState(data, event.target.textContent, event.target.href);
  
//     return event.preventDefault();
//   }