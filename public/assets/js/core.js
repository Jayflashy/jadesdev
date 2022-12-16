(function ($) {
    // USE STRICT
    "use strict";
    var JDV = JDV || {};

    // Sidebar Toggle
    $(function () {
        document.querySelectorAll('.sidelinks .has-sub').forEach(function(element){
            element.addEventListener('click', function (e) {
                let nextEl = element.nextElementSibling;
                let parentEl  = element.parentElement;  
            
                if(nextEl) {
                    e.preventDefault(); 
                    let mycollapse = new bootstrap.Collapse(nextEl);
    
                    if(nextEl.classList.contains('show')){
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                        // if it exists, then close all of them
                        if(opened_submenu){
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
                
            });
        });
        
    });
    
    // Sidenav navigation
    $(function () {
        if(window.matchMedia('(min-width: 1200px)').matches){
            $('body').addClass('sidebar-open ')
        }
        $('[data-toggle="side-nav"]').on("click", function () {
            if($("body").hasClass("sidebar-closed")) {
                $("body").removeClass("sidebar-closed").addClass("sidebar-open");
            }else if ($("body").hasClass("sidebar-open")) {
                $("body").addClass("sidebar-closed").removeClass("sidebar-open");
            }else{
                $("body").removeClass("sidebar-closed").addClass("sidebar-open");
            }
        });
        $('[data-toggle="mobile-nav"]').on("click", function () {
            if($("body").hasClass("sidebar-closed")) {
                $("body").removeClass("sidebar-closed").addClass("sidebar-open");
                $(".sidebar-wrap").addClass("sidebar-wrap-open");
            }else if ($("body").hasClass("sidebar-open")) {
                $("body").addClass("sidebar-closed").removeClass("sidebar-open");
                $(".sidebar-wrap").removeClass("sidebar-wrap-open");
            }else{
                $("body").removeClass("sidebar-closed").addClass("sidebar-open");
                $(".sidebar-wrap").addClass("sidebar-wrap-open");
            }
        });
        
        $(".sidebar-overlay").on("click", function () {
            $("body").addClass("sidebar-closed").removeClass("sidebar-open");
            $(".sidebar-wrap").removeClass("sidebar-wrap-open");
        });
        
    });

    // frontend scripts
    // activate menu item based on url
    $(function() {
        var url = window.location.href;
        $('.nav-item a').each(function() {
            if (this.href === url) {
                $(this).addClass('active');
            }
        });
        $('.nav-item .hl').each(function() {
            if (this.href === url) {
                $(this).addClass('active');
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                // $(this).prev().addClass("active"); // add active class to an anchor
            }
        });
        // canvas menu
        $('.vertical-menu .canvas-link').each(function() {
            if (this.href === url) {
                $(this).addClass('active');
            }
        });
    });

        
    JDV.plugins = {
       
        datatable: function () {
            $('#datatable').DataTable({
                // "scrollX": true 
            });
            $('#datatable1').DataTable({
                "scrollX": true 
            });
            $('#datatablex').DataTable({
                "ordering": false 
            });
            $('#datatablex1').DataTable({
                "ordering": false 
            });
        },

        maxLength: function () {
            $('input.bml').maxlength({
                threshold: 20,
                warningClass: "badge bg-info",
                limitReachedClass: "badge bg-danger"
            });
            $('textarea.bml').maxlength({
                threshold: 20,
                warningClass: "badge bg-info",
                limitReachedClass: "badge bg-danger"
            });
        },


    };

    JDV.extra = {
        initActiveMenu: function () {
            var url = window.location.href.split(/[?#]/)[0];
            $('.sidelinks a').each(function() {
                if (this.href === url) {
                    $(this).addClass('active');
                    $(this).parent().addClass("show"); // add show to collpse of the current link
                    $(this).parent().prev().addClass("active"); // add active class to an anchor
                    //     .addClass("show");
                }
            });
        },
        // Search Popup
        initSearchPopup: function() {
            $("button.search").on("click", function () {
                $(".search-popup").toggleClass("visible");
            });
            // close menu
            $(".search-popup .btn-close").on( 'click', function() {
                $(".search-popup").removeClass("visible");
            });
          
            $(document).keyup(function(e) {
                if (e.key === "Escape") { // escape key maps to keycode `27`
                    $(".search-popup").removeClass("visible");
                }
            });
        },
        // vertical menu
        initVerticalMenu: function() {
            $(".vertical-menu .submenu" ).before( '<i class="la la-chevron-down switch"></i>' );

            $(".vertical-menu li i.switch").on( 'click', function() {
                var $submenu = $(this).next(".submenu");
                $submenu.slideToggle(300);
                $submenu.parent().toggleClass("openmenu");
            });
        },
        // Canvas Menu
        initCanvasMenu: function() {
            $("button.burger-menu").on("click", function () {
                $(".canvas-menu").toggleClass("open");
                $(".main-overlay").toggleClass("active");
            });
            // close menu
            $(".canvas-menu .btn-close, .main-overlay").on( 'click', function() {
                $(".canvas-menu").removeClass("open");
                $(".main-overlay").removeClass("active");
            });
        },
        // Share Button
        initShareButton: function() {
            $('.post #share-button').each( function() {
                $(this).on( 'click', function(e) {
                    $(this).prev('.post-share').toggleClass("show");
                    $(this).children().toggleClass('fa-close').toggleClass('fa-share-alt');
                });
            });
        },
        

    };

    // Init JDV plugins
    JDV.plugins.datatable();
    JDV.plugins.maxLength();
    // JDV.plugins.multiSelect();

    // Init JDV extras
    JDV.extra.initActiveMenu();
    JDV.extra.initSearchPopup();
    JDV.extra.initCanvasMenu();
    JDV.extra.initVerticalMenu();
    JDV.extra.initShareButton();

})(jQuery);
