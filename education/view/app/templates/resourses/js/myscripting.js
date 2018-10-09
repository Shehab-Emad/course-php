

$(document).ready(function (){
    
    jQuery.validator.addMethod("stringonly", function(value, element) {
    return this.optional( element ) || /^[a-zA-Z]+$/.test( value );
    }, 'alphabetic letters only');
    
    $("#register_form").validate({
        rules: {
            userFirstName:{
                required: true,
                maxlength:50,
                stringonly:true
            },
            userLastName:{
                required: true,
                maxlength:50,
                stringonly:true
            },
            userEmail:{
                required: true,
                email:true
            },
            userPhone:{
                required: true,
                digits: true
            }
        },
            messages:{
                userFirstName:{
                  required: "Please, write your name",
                  maxlength: jQuery.validator.format("Too long name, maximum 50 characters")
                },
                userLastName:{
                    required: "Please, write your name",
                    maxlength: jQuery.validator.format("Too long name, maximum 50 characters")
                  },
                  userEmail:{
                  required: "Please, enter your email",
                  email: "Your email must be like this ' example@domain.com '"
                },
                userPhone:{
                required: "Please, enter password",
                digits: "Numbers only"
    }
  }
});  
});
   
   
function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(30.063174, 31.3266261), 
               zoom:15,
               mapTypeId:google.maps.MapTypeId.ROADMAP
               
            };
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
             var marker = new google.maps.Marker({
               position: new google.maps.LatLng(30.0641228, 31.3300459),
               map: map,
            });
         }
			
         google.maps.event.addDomListener(window, 'load', loadMap);   
         
         
         
         