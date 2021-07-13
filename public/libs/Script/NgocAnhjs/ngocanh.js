$('.register').click(function (){
    $('#register').toggleClass('d-none')
    $('#register').toggleClass('d-flex')
    $('.login').toggleClass('d-flex')
    $('.login').toggleClass('d-none')
})
$('#login').click(function (){
    $('#register').toggleClass('d-none')
    $('#register').toggleClass('d-flex')
    $('.login').toggleClass('d-flex')
    $('.login').toggleClass('d-none')
})
$('.react').click(function (){
    $('.react').css("color","dodgerblue")
    if ($('.react').color == "dodgerblue"){
        $('.react').click(function (){
            $('.react').default
        })
    }
})
