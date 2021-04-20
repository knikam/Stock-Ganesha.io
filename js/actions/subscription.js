$(document).ready(function () {
    const customer_id = sessionStorage.getItem("id");
    $.get("http://localhost:3000/xampp/htdocs/Stock-Ganesha.io/php/Subscription/controller.php", {
        action: 'read',
        id:customer_id
    }, function (res) {
        if(res){
            const data = JSON.parse(res);
            for (var i = 0; i < data.data.length; i++) {
                const content = `
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
                </div>`
    
                $(".my-sub").append(content);
    
            }
        }else{
            const content = `<h2 style="color:gray">You don't have subscription.</h2>`;
            $(".my-sub").append(content)
        }
    });
});