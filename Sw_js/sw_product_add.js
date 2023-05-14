/* <----------- SKU VALIDATION -------> */
$('#save_product').click(function(e){
    var skuInput = $.trim($('#sku').val());
    var skuExists = false;
    $('.sku-validator-dvd, .sku-validator-book, .sku-validator-furniture').each(function() {
        if (skuInput === $(this).text()) {
            skuExists = true;
        }
    });
    if (skuExists) {
        e.preventDefault();
        $('#sku-warning').show();
        $('#sku-warning').text('This sku already exists');
    } else {
        $('#sku-warning').hide();
        $(this).submit();
    }
});
/* <----------- SKU VALIDATION -------> */


/* <----------- LENGTH/EMPTY VALIDATION START -------> */

$(document).ready(function(){
    var minLength = 5;
    var maxLength = 20;
    $('#sku').on('keydown', function(){
        var skuInput = $.trim($('#sku').val());
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLength || skuInput === ''){
            $('#warning-message').show();
            $('#warning-message').text('Length sku is too short or empty');
        }else if(charLength > maxLength){
            $('#warning-message').text('Length sku is too long.');
            $(this).val(char.substring(0, maxLength));
        } else {
            $("#name").prop('disabled', false);
            $('#warning-message').hide();
        }
    });
});

$(document).ready(function(){
    var minLength = 2;
    var maxLength = 20;
    $('#name').on('keydown', function(){
        var skuInput = $.trim($('#sku').val());
        var nameInput = $.trim($('#name').val());
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(skuInput === ''){
            $("#name").prop('disabled', true);
        }
        if(charLength < minLength || nameInput === ''){
            $('#warning-message').show();
            $('#warning-message').text('Length name is too short');
        }else if(charLength > maxLength){
            $('#warning-message').text('Length name is too long');
            $(this).val(char.substring(0, maxLength));
        } else {
            $("#productType").prop('disabled', false);
            $("#price").prop('disabled', false);
            $("#name").prop('disabled', false);
            $('#warning-message').hide();
        }
    });
});

/* <----------- LENGTH/EMPTY VALIDATION END -------> */


/* <----------- SHOWING INPUTS BASED ON SELECTED OPTION -------> */

$(document).ready(function () {
    $("#dvd,#book,#furniture").hide();
    $('#productType').change(function() {
        $("#dvd,#book,#furniture").hide();
        var a = "#"+$(this).find('option:selected').attr('class');
        $(a).show();
    });
});

/* <----------- SHOWING INPUTS BASED ON SELECTED OPTION -------> */



/* <----------- INPUT AND SELECT OPTION VALIDATION START -------> */


// <----------- NAME,SKU, AND PRICE INPUT VALIDATION START -------> //

$('#save_product').click(function(e){
    var sku = $.trim($('#sku').val());
    var name = $.trim($('#name').val());
    var price = $.trim($('#price').val());
    if (sku  === ''|| name === '' || price === '') {
        e.preventDefault();
        $("#Warning-Product").show();
        $("#Warning-Product").text('Please, fill out the sku, name, and price');
    } else if ($("#productType option:selected").val()=='Type Switcher') {
        e.preventDefault();
        alert('Please, select a valid option in type switcher !');
    } else {
        $(this).submit();
    }
});

  // <----------- NAME,SKU, AND PRICE INPUT VALIDATION END -------> //


// <----------- SIZE INPUT VALIDATION START -------> //

$('#save_product').click(function(e){
    if($("#productType option:selected").val()=='DVD'){
        var size = $.trim($('#size').val());
        if (size  === '') {
            e.preventDefault();
            $("#Warning-Size").show();
            $("#Warning-Size").text('Please, fill out the size input');
            $("#alert-Size").hide();
        } else {
            $(this).submit();
        }
    }
});

// <----------- SIZE INPUT VALIDATION END -------> //


// <----------- WEIGHT INPUT VALIDATION START -------> //

$('#save_product').click(function(e){
    if($("#productType option:selected").val()=='Book'){
        $("#Warning-Size").hide();
        $("#alert-Furniture").hide();
        var weight = $.trim($('#weight').val());
        if (weight  === '') {
            e.preventDefault();
            $("#Warning-Weight").show();
            $("#Warning-Weight").text('Please, fill out the weight input');
            $("#alert-Weight").hide();
        } else {
            $(this).submit();
        }
    }
});

// <----------- WEIGHT INPUT VALIDATION END -------> //


// <----------- HEIGHT, WIDTH, AND LENGTH INPUT VALIDATION START -------> //

$('#save_product').click(function(e){
    if($("#productType option:selected").val()=='Furniture'){
        $("#Warning-Weight").hide();
        var height = $.trim($('#height').val());
        var widith = $.trim($('#width').val());
        var length = $.trim($('#length').val());
        if (height  === '' || widith === '' || length === '') {
            e.preventDefault();
            $("#Warning-Furniture").show();
            $("#Warning-Furniture").text('Please, fill out the height, widith, and length input');
            $("#alert-Furniture").hide();
        } else {
            $(this).submit();
        }
    }
});

// <----------- HEIGHT, WIDTH, AND LENGTH INPUT INPUT VALIDATION END -------> //


/* <----------- FORM AND SELECT OPTION VALIDATION END -------> */