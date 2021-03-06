function create() {
    $.ajax({
        type:"POST",
        data : {
            action:"insert"
        },
        url:"/php/Customer/controller.php",
        brforeSend : function(){
        },
        datatype:"html",
        async:false,
        success:function(data){
            result = data;
            console.log(result);
        }
    })
}

function read(action) {
    
}

function update(action) {
    
}

function remove(action) {
    
}