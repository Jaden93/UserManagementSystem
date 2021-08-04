$(document).ready(function(){
    $('.editBtn').on('click',function() {

        tr = $(this).closest('tr');

        let data = tr.children().map(function() {
            return $(this).text();
        }).get();

        $('#modal_id').val(data[0]);
        $('#modal_nome').val(data[1]);
        $('#modal_tipo').val(data[2]);
        $('#modal_indirizzo').val(data[3]);
        $('#modal_data').val(data[4]);
        $('#modal_email').val(data[5]);
        $('.checker').val(data[6]);

        let el = data[6];
        
        if (el == "NO") {

            $(".off")[0].checked = false;

        } else {
            
            $('.off')[0].checked = true;
        }
    })
})