/* <----------- MASS DELETE BUTTON CHECK -------> */
$('#delete-product-btn').click(function(e){
    if($(".delete-checkbox").is(':checked')) {
        $(this).submit();
    } else {
        e.preventDefault();
        alert('You need to mark one of the checkboxes!');
    }
});
/* <----------- MASS DELETE BUTTON CHECK -------> */


// <----------- CHECKBOX DELETE DVD PRODUCT START -------> //

$('#delete-product-btn').click(function(){
    $('.product-dvd').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            let getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete1&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX DELETE DVD PRODUCT END -------> //


// <----------- CHECKBOX DELETE BOOK PRODUCT START -------> //

$('#delete-product-btn').click(function(){
    $('.product-book').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            let getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete2&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX DELETE BOOK PRODUCT END -------> //


// <----------- CHECKBOX DELETE FURNITURE PRODUCT START -------> //

$('#delete-product-btn').click(function(){
    $('.product-furniture').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            let getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete3&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX DELETE FURNITURE PRODUCT END -------> //


/* <----------- CHECKBOX DELETE IN GROUP START -------> */

// <----------- CHECKBOX CHECK DVD+BOOK+FURNITURE START -------> //

$('#delete-product-btn').click(function(){
    $('.product-dvd, .product-book, .product-furniture').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            var getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete1&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete2&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete3&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX CHECK DVD+BOOK+FURNITURE END -------> //


// <----------- CHECKBOX CHECK DVD+BOOK START -------> //

$('#delete-product-btn').click(function(){
    $('.product-dvd, .product-book').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            var getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete1&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete2&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX CHECK DVD+BOOK END -------> //


// <----------- CHECKBOX CHECK DVD+FURNITURE START -------> //

$('#delete-product-btn').click(function(){
    $('.product-dvd, .product-furniture').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            var getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete1&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete3&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX CHECK DVD+FURNITURE END -------> //


// <----------- CHECKBOX CHECK BOOK+FURNITURE START -------> //

$('#delete-product-btn').click(function(){
    $('.product-book, .product-furniture').each(function() {
        if ($(this).find('.delete-checkbox').is(':checked')){
            var getId = $(this).attr('id');
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete2&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
            $.ajax({
                type: "POST",
                complete: function () {
                    location.href = '?action=delete3&id='+getId;
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });
});

// <----------- CHECKBOX CHECK BOOK+FURNITURE END -------> //

/* <----------- CHECKBOX DELETE IN GROUP END-------> */


/* <----------- CHECKBOX DELETE PRODUCT END -------> */

