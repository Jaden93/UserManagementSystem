// QUASI

    
    $('#dltBtn').on('click', function() {
    formAction =  $('.editBtn').closest('tr')

    let newarr = Array.prototype.slice.call( formAction, 0 )
 
    for (i = 0; i < newarr.length; i++  ) {
        let record = newarr[i];
        let currId = record.getAttribute("data_value")
        console.log(currId)
        if (currId == valueId) {
            $.ajax ({
                url: "./controller/delete.php",
                type: "POST",
                data: { data_id: valueId }
                })   

        }
    }

    
})

$('.editBtn').on("click", function() {
    valueId =  $(this).closest('tr').attr("data_value")

})