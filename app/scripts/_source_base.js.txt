//é

var base = function () {


/*
    Extract a Url from a background-image value
*/
    extractUrl = function (input) {
        return input.replace(/"/g,"").replace(/url\(|\)$/ig, "");
    },

/*
    This function handles ajax' type form calls
*/
    handleAjax = function (ajaxClassNames) {
        var selectorString = '',
        separator = '',
        i = 0;
        ajaxClassNames = ajaxClassNames !== undefined ? ajaxClassNames : ['discreet'];
        for (i; i < ajaxClassNames.length; i++) {
            selectorString += separator + 'form.' + ajaxClassNames[i];
            separator = ', ';
        }
        $(selectorString).each(function () {
            $(this).on('submit', function () {
                sablier();
                var monForm = $(this).attr('id'),
                actionFile = $(this).attr('action'),
                fields = $(this).serialize();
                $('#' + monForm).find('.infoMsg').fadeTo(1, 1).hide();
                $.ajax({
                    type:       "POST",
                    url:        actionFile,
                    data:       fields + '&ajax=1',
                    dataType:   "json",
                    success:    function (data) {
                                sablier();
                                var errNull, errHS, errErr, errCAPTCHA;
                                if (data.etat == 'null') {
                                    errNull = $('#' + monForm).find('.errNull');
                                    errNull
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                $('.line').removeClass('missing');
                                                for (var i in data.url) {
                                                    if (data.url[i] === 0) {
                                                        $('#' + i).parent('.line').addClass('missing');
                                                        $('#'+i).val('').focus();
                                                    }
                                                }
                                                window.setTimeout(function () {
                                                    if (errNull.css('opacity') == 1) {
                                                        errNull.fadeTo(800, 0.05).slideUp(1000);
                                                    }
                                                }, 2000);
                                            }, 1000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else if (data.etat == 'HS') {
                                    $('#' + monForm + ' .hs').show('fast', function () {
                                        window.setTimeout(function () {
                                            $('#' + monForm + ' .hs').fadeOut('slow');
                                        }, 3000);
                                    });
                                    errHS = $('#' + monForm).find('.errHS');
                                    errHS
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                $('.line').removeClass('missing');
                                                for (var i in data.url) {
                                                    if (data.url[i] === 0) {
                                                        $('#' + i).parent('.line').addClass('missing');
                                                        $('#'+i).val('').focus();
                                                    }
                                                }
                                                window.setTimeout(function () {
                                                    if (errHS.css('opacity') == 1) {
                                                        errHS.fadeTo(800, 0.05).slideUp(1000);
                                                    }
                                                }, 2000);
                                            }, 1000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else if (data.etat == 'err') {
                                    $('#' + monForm + ' .err').show('fast', function () {
                                        window.setTimeout(function () {
                                            $('#' + monForm + ' .err').fadeOut('slow');
                                        }, 3000);
                                    });
                                    errErr = $('#' + monForm).find('.errErr');
                                    errErr
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                if (errErr.css('opacity') == 1) {
                                                    errErr.fadeTo(800, 0.05).slideUp(1000);
                                                }
                                            }, 3000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else if (data.etat == 're') {
                                    $('#' + monForm + ' .errCAPTCHA').show('fast', function () {
                                        window.setTimeout(function () {
                                            $('#' + monForm + ' .errCAPTCHA').fadeOut('slow');
                                        }, 3000);
                                    });
                                    errCAPTCHA = $('#' + monForm).find('.errCAPTCHA');
                                    errCAPTCHA
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                if (errCAPTCHA.css('opacity') == 1) {
                                                    errCAPTCHA.fadeTo(800, 0.05).slideUp(1000);
                                                }
                                            }, 3000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else if (data.etat == 'ok') {
// Sortie positive
                                    if (data.url == 31) {
                                        window.location.href = data.infoAdmin;
                                    } else if (data.url == 47) {
Object.size = function (obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) {
            size++;
        }
    }
    return size;
};
                                        nbElts = Object.size(data) - 2;
                                        mesData = data;
                                        var maListe = '<ul>';
                                        for (var i = 0; i < nbElts; i++) {
//                                          maListe += '<li>' + mesData[i].nom + '</li>';
                                            maListe += '<li>' + mesData[0].nom + '</li>';
                                        }
                                        maListe += '</ul>';
                                        $('#distributeurs').append(maListe);
                                    } else {
// Pour intercepter le formulaire s'il est recopié dans un pop-in
                                        var dansPopIn = $('.pp_pic_holder').length > 0 ? '.pp_pic_holder ' : '';
                                        $(dansPopIn + '#' + monForm).last().find('.ok').show('fast', function () {
                                            $(this).siblings('fieldset, .legende').hide();
// Fermeture automatique de pop-in
                                            if (data.url == 22) {
                                                window.setTimeout(function () {$('.pp_close').click();}, 3000);
                                            }
// Redirection automatique
                                            if (typeof redirect != 'undefined') {
                                                leLnk = $(this).find('[data-rel="redirectURL"]').attr('href');
                                                window.setTimeout(function () {location.href = leLnk;}, redirect);
                                            }
                                        });
                                    }
                                }
                            },
                    error:      function (data) {
                                sablier();
                                var err404, errMail, errAjax;
                                if (data.status == '404') {
                                    err404 = $('#' + monForm).find('.err404');
                                    err404
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                if (err404.css('opacity') == 1) {
                                                    err404.fadeTo(800, 0.05).slideUp(1000);
                                                }
                                            }, 5000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else if (data.responseText.indexOf('function.mail') > 0) {
                                    errMail = $('#' + monForm).find('.errMail');
                                    errMail
                                        .slideDown('slow', function () {
                                            window.setTimeout(function () {
                                                if (errMail.css('opacity') == 1) {
                                                    errMail.fadeTo(800, 0.05).slideUp(1000);
                                                }
                                            }, 3000);
                                        })
                                        .on('click', function () {
                                            clearTimeout();
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                } else{
                                    errAjax = $('#' + monForm).find('.errAjax');
                                    errAjax
                                        .show('fast', function () {
                                            window.setTimeout(function () {
                                                if (errAjax.css('opacity') == 1) {
                                                    errAjax.fadeTo(800, 0.05).slideUp(1000);
                                                }
                                            }, 5000);
                                        })
                                        .on('click', function () {
                                            $(this).fadeTo(800, 0.05).slideUp(1000);
                                        });
                                }
                            }
                });
                return false;
            });
        });
    },


/*
    This function handles the IE6 alert message
*/
    handleIE6 = function () {
        var hideClass = 'closed';
        if ($.cookie('ie6AlertMsg') != 'off') {
            $('.ie6, .ie7').find('#ie6').each(function () {
                var ctnr = this;
                $(ctnr).on('mouseenter', function () {
                    $(this).toggleClass('hover');
                }).on('mouseleave', function () {
                    $(this).toggleClass('hover');
                });
                $('<span />')
                    .attr('class', 'close')
                    .text(trads[$('html').attr('lang')].fermer)
                    .on('click', function () {
                        $(ctnr).addClass(hideClass);
                        $.cookie('ie6AlertMsg', 'off');
                    })
                    .appendTo('.ctnt', ctnr);
            });
        } else {
            $('.ie6, .ie7').find('#ie6').addClass(hideClass);
        }
    },


/*
    This function handles a placeholder behaviour for browser
    that don't support in natively
*/
    placeHolder = function () {
        if (!Modernizr.input.placeholder) {
            $('[placeholder]').each(function () {
                var monChamp = $(this);
                monChamp
                    .addClass('placeholder')    // IE
                    .on('focus', function () {
                        if (monChamp.val() == monChamp.attr('placeholder') || '') {
                            monChamp.val('');
                        }
                    })
                    .on('blur', function () {
                        if (monChamp.val() === '') {
                            monChamp.val(monChamp.attr('placeholder'));
                        }
                    })
                    .blur()
                    .parents('form')
                        .on('submit', function () {
                            if (monChamp.val() == monChamp.attr('placeholder')) {
                                monChamp.val('');
                            }
                        });
            });
        } else {
            return true;
        }
    },


/*
    This function handles autosizing of textareas during typing
*/
    autoSize = function (autosizeClassNames) {
        var selectorString = '',
        separator = '',
        i = 0;
        autosizeClassNames = typeof autosizeClassNames != 'undefined' ? autosizeClassNames : ['autoSize'];
        for (i; i < autosizeClassNames.length; i++) {
            selectorString += separator + 'textarea.' + autosizeClassNames[i];
            separator = ', ';
        }
        $(selectorString).each(function () {
            var tArea = $(this);
            $(tArea)
                .data({
                    'default':  $(this).val(),
                    'w':        $(this).width(),
                    'ttransform':   $(this).css('text-transform'),
                    'lheight':  $(this).css('line-height'),
                    'wspacing': $(this).css('word-spacing'),
                    'ffamily':  $(this).css('font-family'),
                    'fsize':    $(this).css('font-size'),
                    'fweight':  $(this).css('font-weight'),
                    'lspacing': $(this).css('letter-spacing'),
                    'wrap':     $(this).css('word-wrap')
                })
                .after('<div />')
                .next()
                    .css({
                        position:       'absolute',
                        left:           '-9999em',
                        width:          $(tArea).data('w'),
                        'text-transform':   $(tArea).data('ttransform'),
                        'line-height':      $(tArea).data('lheight'),
                        'word-spacing':     $(tArea).data('wspacing'),
                        'font-family':      $(tArea).data('ffamily'),
                        'font-size':        $(tArea).data('fsize'),
                        'font-weight':      $(tArea).data('fweight'),
                        'letter-spacing':   $(tArea).data('lspacing'),
                        'word-wrap':        $(tArea).data('wrap')
                    })
                    .text($(tArea).data('default'))
                    .data('newH', $(tArea).next().height());
            $(tArea)
                .css('min-height', $(tArea).next().data('newH'))
                .on('keyup blur', function () {
                    var content = $(tArea).val().replace(/\n/g, '<br />').replace(/(\s) /g, '$1&nbsp;');
                    $(tArea).next()
                        .html(content + "<br /> &nbsp; ")
                        .data('newH', $(tArea).next().height())
                        .end()
                        .css('min-height', $(tArea).next().data('newH'));
                });
        });
    },

/*
    Gestion d'une navigation "flottante"
*/
    floatingElt = $('#floatingBar'),
    floatingEltStart = floatingElt.length == 1 ? floatingElt.offset().top : 0,
    floatDecalage = $('header').height(),
    floatingEltFixed = false,
    floatElt = function () {
        floatingElt.parent().height(floatingElt.outerHeight(true));
        var scrollTop = $(window).scrollTop() + floatDecalage,
        toFix = scrollTop > floatingEltStart;
        if (toFix && !floatingEltFixed) {
            floatingElt.css({
                position:   'fixed',
                top:        floatDecalage
            });
            floatingEltFixed = true;
        } else if (!toFix && floatingEltFixed) {
            floatingElt.css({
                position:   'relative',
                top:        'auto'
            });
            floatingEltFixed = false;
        }
    },

/*
    This function splits lists
*/
    splitLst = function (nomElt, classElt, classLi, nbLst) {
        if (!window.Modernizr.csscolumns) {
            var newLsts = '',
            nbElts = 0,
            i = 1,
            mesLis = $('#' + nomElt + '0 li.' + classLi);
            for (i; i <= nbLst; i++) {
                classElt = i == nbLst ? classElt + ' last-child' : classElt;
                newLsts += '<ul id="' + nomElt + i + '" class="' + classElt + '"><\/ul>';
            }
            $(newLsts).insertAfter('#' + nomElt + '0');
            nbElts = Math.ceil(mesLis.length / nbLst) - 1;
            mesLis.clone().appendTo('#' + nomElt + '1');
            for (i = 1; i < nbLst; i++) {
                $('#' + nomElt + i + ' li.' + classLi + ':gt(' + nbElts + ')').clone().appendTo('#' + nomElt + (i + 1));
                $('#' + nomElt + i + ' li.' + classLi + ':gt(' + nbElts + ')').remove();
            }
            $('#' + nomElt + '0').remove();
        }
    };

// Public elements :
    return {
        extractUrl:     extractUrl,
        handleAjax:     handleAjax,
        handleIE6:      handleIE6,
        forms:          {
                        placeHolder:    placeHolder,
                        autoSize:   autoSize
                    },
        splitLst:       splitLst
    };
}();
