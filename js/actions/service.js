$(document).ready(function(){
    $.get("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Services/controller.php",{
        action:'read',
    }, function(res){

        var services=[];

        const data = JSON.parse(res);

        for(var i=0;i<data.data.length;i++){
            
            var service = {
                id:data.data[i]['id'],
                name:data.data[i]['name'],
                sub_name:data.data[i]['sub_name'],
                price:data.data[i]['price']
            }

            services[i] = service;


            const content =`
            <div class="card">
                    <div class="header">
                    <h2>${data.data[i]['name']}</h2>
                    <h4>${data.data[i]['sub_name']}</h4>
                    <h2>$${data.data[i]['price']}/Month</h2>
                    </div>
                    <div class="body">
                    <p>
                        ${data.data[i]['description']}
                    </p>
                    </div>
                    <div class="footer">
                        <input
                            type="button"
                            class="btn buy-btn"
                            name="service"
                            id="buy"
                            value="Add to cart"
                            onClick="addToCart(${data.data[i]['id']})"
                        />
                </div>`

        $(".add-sub").append(content);
        
        }

        localStorage.setItem("service",JSON.stringify(services));
    });
});

