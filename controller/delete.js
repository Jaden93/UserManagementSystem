function deleteId(id) {
        $.ajax({
            url: "./controller/delete.php",
            type: "POST",
            data: {
                data_id: id
            },
            success: function (data) {
                if (data) {
                    console.log(data)
                    console.log(id)
                } else {
                    alert("Non posso eliminarlo")
                }
            }
        })

    }
