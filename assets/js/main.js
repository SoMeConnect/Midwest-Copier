jQuery(document).ready(function($) {
    
    $('.add-machine').on('click',function() {
        $('.add-listings').removeClass('hidden').addClass('visible');
    });

    $('.delete-machine').on('click',function() {
        $('.results-row input:checked').parent().parent().remove();
        if ($('.results-row').length <= 0) {
            $('.delete-machine').removeClass('active').addClass('inactive');
            $('.no-listings').removeClass('hidden').addClass('visible');
        }
    });

    if ($('.results-row').length > 0) {
        $('.delete-machine').removeClass('inactive').addClass('active');
        $('.no-listings').removeClass('visible').addClass('hidden');
    }

    $('.cancel').on('click',function() {
        $('.add-listings').removeClass('visible').addClass('hidden');
    });
    $('.confirm').on('click',function() {
        var quantity = $('.option-quantity').val()?$('.option-quantity').val():console.log(),
        equipment = $('.option-equipment').val()?$('.option-equipment').val():console.log(),
        make = $('.option-make').val()?$('.option-make').val():console.log(),
        model = $('.option-model').val()?$('.option-model').val():console.log(),
        comments = $('.option-comments').val()?$('.option-comments').val():console.log();
        
        $('.results-table tbody').append('<tr class="results-row"><td style="width:10%;"><input type="checkbox" class="listing-checkbox" /></td><td style="width:15%;"><span class="quantity">'+quantity+'</span></td><td style="width:30%;" class="machine"><span class="type">'+equipment+'</span> <span class="name"><strong>'+make+' '+model+'</strong></span></td><td style="width:25%;"><p class="address">Business Name<br />1234 W. Main Street<br />Town, ST 12345</p></td><td style="width:20%;"><span class="result">No</span></td></tr>');
        $('.results-listings').removeClass('hidden').addClass('visible');
        $('.delete-machine').removeClass('inactive').addClass('active');
        $('.no-listings').removeClass('visible').addClass('hidden');
        $('.add-listings').removeClass('visible').addClass('hidden');
    });

});