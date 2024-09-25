$(document).ready(function () {
    var sectionArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    // Função para ativar o link de navegação correto
    function activateNavLink() {
        var docScroll = $(document).scrollTop() + 1;
        $.each(sectionArray, function (index, value) {
            var section = $("#section_" + value);
            if (section.length) {
                var offsetSection = section.offset().top - 94;
                if (docScroll >= offsetSection) {
                    $(".navbar-nav .nav-item .nav-link")
                        .removeClass("active")
                        .addClass("inactive");
                    $(".navbar-nav .nav-item .nav-link")
                        .eq(index)
                        .addClass("active")
                        .removeClass("inactive");
                }
            }
        });
    }

    // Ativar o link de navegação ao rolar a página
    $(document).scroll(function () {
        activateNavLink();
    });

    // Rolagem suave ao clicar nos links de navegação
    $(".click-scroll").click(function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var target = href.includes("#") ? href.split("#")[1] : href;
        var section = $("#" + target);

        if (window.location.pathname !== "/") {
            window.location.href = href;
        } else {
            if (section.length) {
                var offsetClick = section.offset().top - 94;
                $("html, body").animate(
                    {
                        scrollTop: offsetClick,
                    },
                    300
                );
            }
        }

        // Fechar a sidebar ao clicar no link de navegação
        $("#side-hide").removeClass("show");
        $("#overlay_every-where").removeClass("bgshow");
    });

    // Ativar o link de navegação correto ao carregar a página
    activateNavLink();
});
