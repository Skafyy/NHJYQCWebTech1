$(document).ready(function() {
    $('#loadAjaxBtn').on('click', function() {
    
        $.getJSON('../Data/ajanlatok.json', function(data) {
            let output = '<div style="display: flex; flex-direction: column; gap: 10px;">';
            
            $.each(data, function(index, item) {
                output += `
                    <div style="background: #fdfbf7; padding: 12px; border-left: 4px solid #e67e22; border-radius: 4px;">
                        <strong>${item.nev}</strong><br>
                        <span>${item.leiras}</span><br>
                        <strong style="color: #d35400;">Ár: ${item.ar}</strong>
                    </div>
                `;
            });
            output += '</div>';

            $('#ajaxContainer').html(output);
        }).fail(function() {
            $('#ajaxContainer').html('<p style="color: #e74c3c; font-weight: bold;">Hiba történt az adatok betöltése közben!</p>');
        });
    });
});