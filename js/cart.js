var cart = [];
var item = 0;

function init() {
    if(cart.length){
        document.querySelector(".empty").style.display = 'none';
        document.querySelector(".summary").style.display = 'flex';
    }else{
        document.querySelector(".empty").style.display = 'block';
        document.querySelector(".summary").style.display = 'none';
    }
}

function makeTotal() {

        var sub_total = 0;
        var tax = 0;
        var total = 0;
        var tax_rate= 18;
        
        for(var i=0; i<cart.length; i++){
            sub_total += parseInt(cart[i]['price']);
        }
    
        tax = tax_rate/100*sub_total;
        total = sub_total+(tax_rate/100*sub_total);

        const sub_total_element = document.querySelector(".sub-total");
        const tax_element = document.querySelector(".tax");
        const total_element = document.querySelector(".total");
    
    
        const sub_total_content = ` <p> Sub total : <span>$${sub_total}</span>`;
        const tax_content = ` <p> Tax : <span>$${tax}</span>`;
        const total_content = ` <p> Total : <span>$${total}</span>`;
    
        sub_total_element.innerHTML = sub_total_content;
        tax_element.innerHTML = tax_content;
        total_element.innerHTML = total_content;
    
}

function showCart() {
    
    const bucket = document.querySelector(".cart");

    bucket.innerHTML= "";

    for (var i = 0; i < cart.length; i++) {
        console.log(cart[i]);
        const content = `<div class="item">
            <div class="title">
              <h2>${cart[i]['name']}</h2>
              <p>${cart[i]['sub_name']}</p>
            </div>
            <div class="price">
              <p>$${cart[i]['price']}</p>
            </div>
            <div class="remove" onClick="removeFromCart(${cart[i]['id']})">
              <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
            </div>
        </div>`

       bucket.innerHTML += content;
    }

    makeTotal()
}

function addToCart(serviceId) {

    const service = JSON.parse(localStorage.getItem("service"));

    for (var i = 0; i < service.length; i++) {
        if (service[i]['id'] == serviceId) {
            cart[item++] = service[i];
        }
    }

    init();
    showCart();
}

function removeFromCart(serviceId) {

    cart = cart.filter((item)=> item.id != serviceId);
    
    init();
    showCart();
}
