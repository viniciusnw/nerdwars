/* 
    Created on : 17/08/2015, 18:25:41
    Author     : Vinicius Inacio <viniciusnw at hotmail.com>
*/

$(document).ready(function() {
 
    $("#carouselPosts").owlCarousel({
 
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        autoPlay : 4000
        //stopOnHover : true
    });
    
    $("#carousel-mais-acessados").owlCarousel({
 
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        pagination: false,
        singleItem: true,
        autoPlay :false,
        stopOnHover : true,
        navigationText: ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>']
    });
});
