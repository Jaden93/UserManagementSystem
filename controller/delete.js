$(document).ready(function(){
    $('.editBtn').on('click',function() {
        
        
        test = $(this).closest(tr)
        date_id = [test]
        console.log(date[0])
        $.ajax({
            url: "./controller/delete.php",
            type: "POST",
            data: {
                data_id: id
            },
            cache: false,
            success: function (data) {
                if (data) {
                    $('.action' + id).hide('slow')
                } else {
                    alert("Non posso eliminarlo")
                }
            }
        })
    })
})
