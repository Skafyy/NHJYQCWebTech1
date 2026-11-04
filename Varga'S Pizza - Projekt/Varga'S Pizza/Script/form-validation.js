$(document).ready(function() {
    $('#orderForm').on('submit', function(e) {
        let isValid = true;

        let nev = $('#nev').val().trim();
        if(nev === ""){
            $('#nev').css('border', '2px solid #e74c3c');
            $('#nev-error').text('Kérjük, add meg a nevedet!');
            isValid = false;
        } else {
            $('#nev').css('border', '1px solid #cbd5e1');
            $('#nev-error').text('');
        }


        let cim = $('#cim').val().trim();
        if(cim === ""){
            $('#cim').css('border', '2px solid #e74c3c');
            $('#cim-error').text('Kérjük, add meg a szállítási címet!');
            isValid = false;
        } else {
            $('#cim').css('border', '1px solid #cbd5e1');
            $('#cim-error').text('');
        }


        if(!$('#aszf').is(':checked')){
            $('#aszf-error').text('A rendeléshez el kell fogadnod az Általános Szerződési Feltételeket!');
            isValid = false;
        } else {
            $('#aszf-error').text('');
        }

    
        $('#toggleCouponBtn').on('click', function() {
            $('#couponBox').slideToggle(300);
        });

        if(!isValid){
            e.preventDefault();
        }
    });
});