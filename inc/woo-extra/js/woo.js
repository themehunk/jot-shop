/********************************/
// BigStoreWooLib Custom Function
/********************************/
(function ($) {
    var BigStoreWooLib = {
        init: function (){
            this.bindEvents();
        },
        bindEvents: function (){
            var $this = this;
            $this.BrandSlider(); 
            $this.FeaturedProductSlider();
            $this.CategoryTabListFilter();
          },
        BrandSlider:function(){
                       // slide autoplay
                      if(jotshop.jot_shop_brand_slider_optn == true){
                      var brd_atply = true;
                      }else{
                      var brd_atply = false; 
                      }
                       if(jotshop.jot_shop_rtl==true){
                           var opnrtl = true;
                             }else{
                             var opnrtl = false; 
                            };
                      var owl = $('.thunk-brand');
                           owl.owlCarousel({
                             rtl:opnrtl,
                             items:5,
                             nav: true,
                             navText: ["<i class='brand-nav fa fa-angle-left'></i>",
                             "<i class='brand-nav fa fa-angle-right'></i>"],
                             loop:brd_atply,
                             dots: false,
                             smartSpeed: 1800,
                             autoHeight: false,
                             margin:25,
                             autoplay:brd_atply,
                              autoplayHoverPause: true, // Stops autoplay
                              autoplayTimeout: parseInt(jotshop.jot_shop_brand_slider_speed),
                             responsive:{
                             0:{
                                 items:3,
                                 margin:7.5,
                             },
                             600:{
                                 items:4,
                             },
                             1024:{
                                 items:4,
                             },
                             1025:{
                                 items:7,
                             }
                         }
                 });
                          
        },
        FeaturedProductSlider:function(){
                          $('#thunk-feature-product-tab li a:first').addClass('active');
                          $(document).on('click', '#thunk-feature-product-tab li a', function(e){
                          $('#thunk-feature-product-tab .tab-content').append('<div class="thunk-loadContainer"><div class="loader"></div></div>');
                          $(".thunk-feature-product-section .thunk-loadContainer").css("display", "block");
                          $('#thunk-feature-product-tab li a.active').removeClass("active");
                          $(this).addClass('active');
                                  var data_term_id = $( this ).attr( 'data-filter' );
                                  $.ajax({
                                      type: 'POST',
                                      url: jotshop.ajaxUrl,
                                      data: {
                                        action :'jot_shop_big_product_cat_filter_default_ajax_loop1',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if ( response ){
                                 $('#thunk-feature-product-tab .tab-content .thunk-product-col1').html('<div class="thunk-product-col1-wrap"></div>');
                                 $(".thunk-product-col1-wrap").append(response);
                                } 
                            $(".thunk-feature-product-section .thunk-loadContainer").css("display", "none");
                          } );
                          $.ajax({
                                      type: 'POST',
                                      url: jotshop.ajaxUrl,
                                      data:{
                                        action :'jot_shop_cat_filter_featured_big_prd_ajax',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if(response){
                                  $('#thunk-feature-product-tab .tab-content .thunk-product-col2').html('<div class="thunk-product-col2-wrap"></div> ');
                                  $(".thunk-product-col2-wrap").append(response);
                                } 
                           });
                          $.ajax({
                                      type: 'POST',
                                      url: jotshop.ajaxUrl,
                                      data:{
                                        action :'jot_shop_big_product_cat_filter_default_ajax_loop3',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if(response){
                                  $('#thunk-feature-product-tab .tab-content .thunk-product-col3').html('<div class="thunk-product-col3-wrap"></div> ');
                                  $(".thunk-product-col3-wrap").append(response);
                                } 
                           });   
                              e.preventDefault();
                       });

         },
         CategoryTabListFilter:function(){
                                     //product slider 
                            if(jotshop.jot_shop_single_row_slide_cat_tb_lst == true){
                            var sliderow_lst = false;
                            }else{
                            var sliderow_lst = true;
                            }
                            // slide autoplay
                            if(jotshop.jot_shop_cat_tb_lst_slider_optn == true){
                            var cat_atply_lst = true;
                            }else{
                            var cat_atply_lst = false; 
                            }
                             if(jotshop.jot_shop_rtl==true){
                           var opnrtl = true;
                             }else{
                             var opnrtl = false; 
                            };
                             var owl = $('.thunk-product-tab-cat-slide');
                                 owl.owlCarousel({
                                  rtl:opnrtl,
                                   items:3,
                                   nav: true,
                                   owl2row:sliderow_lst, 
                                   owl2rowDirection: 'ltr',
                                   owl2rowTarget: 'thunk-woo-product-list',
                                   navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                   "<i class='slick-nav fa fa-angle-right'></i>"],
                                   loop:cat_atply_lst,
                                   dots: false,
                                   smartSpeed: 1800,
                                   autoHeight: false,
                                   margin: 15,
                                   autoplay:cat_atply_lst,
                                   autoplayHoverPause: true, // Stops autoplay
                                   autoplayTimeout: parseInt(jotshop.jot_shop_cat_tb_lst_slider_speed),
                                   responsive:{
                                    0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:2,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:4,
                                       }
                               }
                            });
                        $('#thunk-cat-list-tab li a:first').addClass('active');
                        $(document).on('click', '#thunk-cat-list-tab li a', function(e){
                        $('#thunk-cat-list-tab .tab-content').append('<div class="thunk-loadContainer"> <div class="loader"></div></div>');
                        $(".thunk-product-tab-list-section .thunk-loadContainer").css("display", "block");
                        $('#thunk-cat-list-tab li a.active').removeClass("active");
                        $(this).addClass('active');
                                var data_term_id = $( this ).attr( 'data-filter' );
                                $.ajax({
                                    type: 'POST',
                                    url: jotshop.ajaxUrl,
                                    data: {
                                      action :'jot_shop_cat_list_filter_ajax',
                                      'data_cat_slug':data_term_id,
                                     },
                              dataType: 'html'
                            }).done( function( response ){
                              if ( response ){
                               $('#thunk-cat-list-tab .tab-content').html('<div class="thunk-slide thunk-product-tab-cat-slide owl-carousel"></div><div class="thunk-loadContainer"> <div class="loader"></div></div>');
                               $(".thunk-slide.thunk-product-tab-cat-slide.owl-carousel").append(response);
                               var owl = $('.thunk-product-tab-cat-slide');
                               owl.owlCarousel({
                                rtl:opnrtl,
                               items:3,
                               nav: true,
                               owl2row:sliderow_lst, 
                               owl2rowDirection: 'ltr',
                               owl2rowTarget: 'thunk-woo-product-list',
                               navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                               "<i class='slick-nav fa fa-angle-right'></i>"],
                               loop:cat_atply_lst,
                               dots: false,
                               smartSpeed: 1800,
                               autoHeight: false,
                               margin: 15,
                               autoplay:cat_atply_lst,
                               autoplayHoverPause: true, // Stops autoplay
                               autoplayTimeout: parseInt(jotshop.jot_shop_cat_tb_lst_slider_speed),
                               responsive:{
                               0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:2,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:4,
                                       }
                           }
                             });
                          } 
                          $(".thunk-product-tab-list-section .thunk-loadContainer").css("display", "none");
                        } );
                            e.preventDefault();
                        });

      },
        }
    BigStoreWooLib.init();
})(jQuery);