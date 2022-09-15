
$(document).ready(function(){
$('.btna').click(function(){
    const value = $(this).attr('data-filter');
    if (value == 'all'){
        $('.grid').show('1000');

    }

    else{
        $('.grid').not('.'+value).hide('1000');
        $('.grid').filter('.'+value).show('1000');

    }
})




$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});


$('.btna').click(function(){

    $(this).addClass('activebtn').siblings().removeClass('activebtn');
})
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
