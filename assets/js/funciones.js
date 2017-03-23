jQuery( document ).ready(function() {
    
    jQuery( window ).resize(function() { //cuando cambia el tamaño del navegador
    
        //iguala el tamaño de las columnas en las zonas. primera fila
        var zonacol2= jQuery(".zonacol2").height()-30;

        jQuery(".zonacol1 .zonas, .zonacol1 .overlay").css("height", zonacol2);


        //iguala el tamaño de las columnas en las zonas. segunda fila
        var zonacol5= jQuery(".zonacol5").height()-30;

        jQuery(".zonacol3 .zonas, .zonacol3 .overlay, .zonacol4 .zonas, .zonacol4 .overlay").css("height", zonacol5);
        
    });                          
    

        //iguala el tamaño de las columnas en las zonas. primera fila
        var zonacol2= jQuery(".zonacol2").height()-30;

        jQuery(".zonacol1 .zonas, .zonacol1 .overlay").css("height", zonacol2);


        //iguala el tamaño de las columnas en las zonas. segunda fila
        var zonacol5= jQuery(".zonacol5").height()-30;

        jQuery(".zonacol3 .zonas, .zonacol3 .overlay, .zonacol4 .zonas, .zonacol4 .overlay").css("height", zonacol5);
        
 
    
    // mostrar u ocultar formulario del mapa
    jQuery(".botonfiltro").click(function(){
        
        if(jQuery(".botonfiltro").hasClass("closex")){
        
            jQuery(this).addClass("open");
            jQuery(this).removeClass("closex");
            jQuery(".botonfiltro").css("opacity","0");
            jQuery(".botonfiltro .round").css("opacity","0");
            
            
            jQuery(".wrapmenu-mapa").animate({          
                right: "0",
                  }, 500, 'easeOutQuint', function() {
                    jQuery("#botonmapa .fa-navicon").hide();
                    jQuery("#botonmapa .fa-close").show();
                    jQuery(".botonfiltro").hide();
                
              });

        } else {
            
            jQuery(this).removeClass("open");
            jQuery(this).addClass("closex");

            jQuery(".wrapmenu-mapa").animate({          
                    right: "-374",
                  }, 500,'easeOutQuint', function() {
                    jQuery("#botonmapa .fa-close").hide();
                    jQuery("#botonmapa .fa-navicon").show();

              });
        
            
        }
        
    });
    
    jQuery(".wrapmenu-mapa .fa-close").click(function(){
        
        jQuery(".botonfiltro").show();
        jQuery(".botonfiltro").css("opacity","1");
        jQuery(".botonfiltro .round").css("opacity","1");
        
        jQuery(".wrapmenu-mapa").animate({          
                    right: "-374",
                  }, 500,'easeOutQuint', function() {
                    jQuery(".botonfiltro").removeClass("open");
                    jQuery(".botonfiltro").addClass("closex");
                   
                    
        });
    
    });
    
    
    
    //quitar placeholder on focus
    jQuery("#writemessage").focusin(function () {
        jQuery(this).attr('placeholder', '');
    });
    jQuery("#writemessage").focusout(function () {
        jQuery(this).attr('placeholder', "Escribe tu mensaje");
    });

    
    
    
    //datepicker mapa
    
    var from_$input = jQuery('#input_from').pickadate(),
    from_picker = from_$input.pickadate('picker')

    var to_$input = jQuery('#input_to').pickadate(),
        to_picker = to_$input.pickadate('picker')


    if ( from_picker.get('value') ) {
      to_picker.set('min', from_picker.get('select'))
    }
    if ( to_picker.get('value') ) {
      from_picker.set('max', to_picker.get('select'))
    }

    
    from_picker.on('set', function(event) {
      if ( event.select ) {
        to_picker.set('min', from_picker.get('select'))    
      }
      else if ( 'clear' in event ) {
        to_picker.set('min', false)
      }
    })
    to_picker.on('set', function(event) {
      if ( event.select ) {
        from_picker.set('max', to_picker.get('select'))
      }
      else if ( 'clear' in event ) {
        from_picker.set('max', false)
      }
    })

    
    
    
function slides(slide) {
    
    //console.log(slide);
    jQuery(slide).show();
    
     setTimeout(function() { 
            jQuery(".slide "+slide+"").hide();
            
            if(slide==".slide1") {
                slides(".slide2");
            } else {
                slides(".slide1");
            }
            
    },5500);
    
    jQuery(".slide "+slide+" .animated").each(function(){        
        
        var animation_in = jQuery(this).attr("in"); // get animation in
        var animation_out = jQuery(this).attr("out"); // get animation out
        var animation_time = jQuery(this).attr("time"); // get animation out
        
        jQuery(this).removeClass(animation_out); //remove animation in
        
        jQuery(this).addClass(animation_in); //add animation in
        
        /*console.log("in="+animation_in);
        console.log("out="+animation_out);
        console.log("time="+animation_time);*/
        
        (function(that) { 
            var t = setTimeout(function() { 
                jQuery(that).removeClass(animation_in); //remove animation in
                jQuery(that).addClass(animation_out); //add animation out
            }, animation_time);
        })(this);     
        
    });
    
    
}
    
slides(".slide1");
    
    
    jQuery(".vermas").click(function(e){
        e.preventDefault();
        jQuery(".box-price .list").toggle();
        jQuery(this).toggleClass("open");
        
        if(jQuery(this).hasClass("open")){
        
            jQuery(this).html("Ver menos");
            
        } else {
            
            jQuery(this).html("Ver más");
            
        }
    });

    
    
    
    
// sumar restar al precio
    
    
    
    jQuery(".plus").mousehold(function(){
       
        
        var padre= jQuery(this).parent();        
    
        var traerval= jQuery(padre).find(".number").html();
        
        var rempes=traerval.replace('$','');
        
        var rempoint=rempes.replace('.','');
        
        var newval= parseInt(rempoint);
        
        newval=newval+100;
        
        jQuery(padre).find(".number").number(newval,0, '', '.' );
        jQuery(padre).find(".number").prepend("$");
    });
    
    
    
    jQuery(".minus").mousehold(function(){        
        
        var padre= jQuery(this).parent();        
    
        var traerval= jQuery(padre).find(".number").html();
        
        var rempes=traerval.replace('$','');
        
        var rempoint=rempes.replace('.','');
        
        var newval= parseInt(rempoint);
        
        newval= newval-100;
        
        jQuery(padre).find(".number").number(newval,0, '', '.' );
        jQuery(padre).find(".number").prepend("$");
    });

    
});