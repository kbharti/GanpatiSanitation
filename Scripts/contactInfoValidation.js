$(document).ready(function () {
    
    $('#phoneTag').click(function () {
        $('#phoneContactInfo').removeClass('hidden')
        $('#emailContactInfo').addClass('hidden')
        $('#fbContactInfo').addClass('hidden')
    });

    $('#emailTag').click(function () {
        $('#emailContactInfo').removeClass('hidden')
        $('#phoneContactInfo').addClass('hidden')
        $('#fbContactInfo').addClass('hidden')
    });
    $('#facebookTag').click(function () {
        $('#fbContactInfo').removeClass('hidden')
        $('#emailContactInfo').addClass('hidden')
        $('#phoneContactInfo').addClass('hidden')
    });
})