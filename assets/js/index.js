$(document).ready(function() {
    iniciarComponentes();
    iniciarMascara();
    AOS.init();
});


var loaderInterno = function() {
    return {
        show: function() {
            $("#loaderInterno").show();
        },
        hide: function() {
            $("#loaderInterno").fadeOut();
        }
    };
}();

function iniciarComponentes() {
    // UPLOAD
    $('input[type="file"]').change(function() {
        var file = event.target.files;
        $.each(file, function(key, value) {
            if (value.name.indexOf(".png") == -1 && value.name.indexOf(".jpg") == -1 && value.name.indexOf(".jpeg") == -1) {
                swal("Erro!", "Você precisa enviar um arquivo PNG, JPG ou JPEG!", "error");
                $(this).val() = "";
            }
        });

        if ($('#img_familia').val() == "") {
            $('#btn_familia .confirm-upload').hide();
        } else {
            $('#btn_familia .confirm-upload').show();
        }

        if ($('#img_sala_1').val() == "") {
            $('#btn_sala_1 .confirm-upload').hide();
        } else {
            $('#btn_sala_1 .confirm-upload').show();
        }

        if ($('#img_sala_2').val() == "") {
            $('#btn_sala_2 .confirm-upload').hide();
        } else {
            $('#btn_sala_2 .confirm-upload').show();
        }

        if ($('#img_sala_3').val() == "") {
            $('#btn_sala_3 .confirm-upload').hide();
        } else {
            $('#btn_sala_3 .confirm-upload').show();
        }

        if ($('#img_sala_4').val() == "") {
            $('#btn_sala_4 .confirm-upload').hide();
        } else {
            $('#btn_sala_4 .confirm-upload').show();
        }

    });

    // CARREGAR CAMPO DOS MORADORES
    $('#num_pessoas').blur(function() {
        $('.moradores').slideUp();
        $('.moradores').html('');
        if ($(this).val() > 0) {
            htmlMoradores =
                '<div class="form-group">' +
                '<div class="row">';
            for (let i = 1; i <= $(this).val(); i++) {
                htmlMoradores +=
                    '<div class="col-md-6">' +
                    '<label class="nome_morador" for="nome_morador_' + i + '">Nome do morador ' + i + '</label>' +
                    '<input placeholder="Nome do morador ' + i + '" type="text" name="nome_morador_' + i + '" id="nome_morador_' + i + '">' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<label for="idade_morador_' + i + '">Idade do morador ' + i + '</label>' +
                    '<input class="idade_morador" placeholder="Idade do morador ' + i + '" type="tel" name="idade_morador_' + i + '" id="idade_morador_' + i + '">' +
                    '</div>';
            }
            htmlMoradores +=
                '</div></div>'

            $('.moradores').html(htmlMoradores);
            $('.moradores').slideDown();
        } else {

        }
    });

    // VERIFICAR RADIOS

    $('input[name="prob_estrutura"]').on('change', function() {
        if ($(this).val() == 1) {
            $('#div_prob_estrutura').slideDown();
        } else {
            $('#div_prob_estrutura').slideUp();
        }
    });

    $('input[name="prob_infiltracao"]').on('change', function() {
        if ($(this).val() == 1) {
            $('#div_prob_infiltracao').slideDown();
        } else {
            $('#div_prob_infiltracao').slideUp();
        }
    });

    $('input[name="prob_pragas"]').on('change', function() {
        if ($(this).val() == 1) {
            $('#div_prob_pragas').slideDown();
        } else {
            $('#div_prob_pragas').slideUp();
        }
    });

    // DROPDOWN

    $('.dropdown').mouseenter(function() {
        $(this).addClass('open');
    });

    $('.dropdown').mouseleave(function() {
        $(this).removeClass('open');
    });

    $('.dropdown-mob').on('click', function() {

        $(this).find('.dropdown-list').slideToggle();
    });

}

function abrirMenu() {
    $('#leftsidebar').animate({ 'margin-left': 0 });
    $('#menu_mobile_overlay').fadeIn();
    $('#btn_menu').html('<i class="fa fa-times"></i>')
    $('#btn_menu').attr('onclick', 'fecharMenu();')
}

function fecharMenu() {
    $('#leftsidebar').animate({ 'margin-left': "-300px" });
    $('#menu_mobile_overlay').fadeOut();
    $('#btn_menu').html('<i class="fa fa-bars"></i>')
    $('#btn_menu').attr('onclick', 'abrirMenu();')
}

function iniciarMascara() {
    var SPMaskBehavior = function(val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    $('#celular').mask(SPMaskBehavior, spOptions);
    $('#cep').mask('00.000-000');
    $('#cpf').mask('000.000.000-00');

}

function validateEmail(sEmail) {

    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}

function escolherFoto(id) {
    $('#' + id).click();
}

function cadastrar() {
    loaderInterno.show();


    if (!validarCampos()) {
        swal("Erro!", "Preencha corrtamente os campos em vermelho!", "warning");
        loaderInterno.hide();
        return false;
    }

    if (!validarNomeMoradores()) {
        swal("Erro!", "Preencha corrtamente o nome de todos os moradores!", "warning");
        loaderInterno.hide();
        return false;
    }


    if (!validarIdadeMoradores()) {
        swal("Erro!", "Preencha corrtamente a idade de todos os moradores!", "warning");
        loaderInterno.hide();
        return false;
    }

    if (!validarUploads()) {
        swal("Erro!", "Você precisa fazer upload de todas as 5 fotos!", "warning");
        loaderInterno.hide();
        return false;
    }


    var formData = new FormData();
    formData.append("img_familia", $('#img_familia')[0].files[0]);
    formData.append("img_sala_1", $('#img_sala_1')[0].files[0]);
    formData.append("img_sala_2", $('#img_sala_2')[0].files[0]);
    formData.append("img_sala_3", $('#img_sala_3')[0].files[0]);
    formData.append("img_sala_4", $('#img_sala_4')[0].files[0]);
    formData.append("nome_completo", $('#nome_completo').val());
    formData.append("idade", $('#idade').val());
    formData.append("celular", $('#celular').val());
    formData.append("email", $('#email').val());
    formData.append("cpf", $('#cpf').val());
    formData.append("cep", $('#cep').val());
    formData.append("endereco", $('#endereco').val());
    formData.append("bairro", $('#bairro').val());
    formData.append("numero", $('#numero').val());
    formData.append("cidade", $('#cidade').val());
    formData.append("estado", $('#estado').val());
    formData.append("num_pessoas", $('#num_pessoas').val());
    formData.append("num_comodos", $('#num_comodos').val());
    if ($('input[name="prob_estrutura"]:checked').val() == 1) {
        formData.append("prob_estrutura", $('#prob_estrutura').val());
    } else {
        formData.append("prob_estrutura", "Não");
    }

    if ($('input[name="prob_infiltracao"]:checked').val() == 1) {
        formData.append("prob_infiltracao", $('#prob_infiltracao').val());
    } else {
        formData.append("prob_infiltracao", "Não");
    }

    if ($('input[name="prob_pragas"]:checked').val() == 1) {
        formData.append("prob_pragas", $('#prob_pragas').val());
    } else {
        formData.append("prob_pragas", "Não");
    }
    formData.append("area_salaEstar", $('#area_salaEstar').val());
    formData.append("desc_familia", $('#desc_familia').val());

    for (let i = 1; i <= $('#num_pessoas').val(); i++) {

        formData.append("nome_morador_" + i, $('#nome_morador_' + i).val());
        formData.append("idade_morador_" + i, $('#idade_morador_' + i).val());

    }

    $.ajax({
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    var percentInt = parseInt(percentComplete * 100);
                }
            }, false);
            xhr.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    var percentInt = parseInt(percentComplete * 100);
                }
            }, false);
            return xhr;
        },
        type: "POST",
        url: window.location.href + "/familias/cadastrar_familias.php",
        dataType: "json",
        data: formData,
        async: true,
        contentType: false,
        processData: false
    }).done(function(json) {
        loaderInterno.hide();
        if (json.success) {
            swal("Sucesso", "Agora é torcer pra você e sua família serem selecionados para participar do programa! Boa Sorte!", "success");
        } else {
            swal("Erro", json.message, "error");
        }
    }).fail(function(response) {
        loaderInterno.hide();
        swal({
            title: 'Erro',
            text: "Falha ao conectar com o servidor!",
            type: 'error',
            showCancelButton: false,
            confirmButtonText: 'OK!',
        });
    });
}


function validarIdadeMoradores() {
    let validar = true;

    $('.idade_morador').each(function(i) {
        if (this.value == '') {
            validar = false;
        }
    });

    return validar;
}

function validarNomeMoradores() {
    let validar = true;

    $('.nome_morador').each(function(i) {
        if (this.value == '') {
            validar = false;
        }
    });

    return validar;
}

function validarUploads() {
    if ($('#img_familia').val() == "" || $('#img_sala_1').val() == "" || $('#img_sala_2').val() == "" || $('#img_sala_3').val() == "" ||
        $('#img_sala_4').val() == "") {
        return false;
    }
    return true;
}

function validarCampos() {
    ret = true;

    if ($('#nome_completo').val() == "") {
        $('#nome_completo').addClass('error-field');
        ret = false;
    } else {
        $('#nome_completo').removeClass('error-field');
    }

    if ($('#idade').val() == "") {
        $('#idade').addClass('error-field');
        ret = false;
    } else {
        $('#idade').removeClass('error-field');
    }

    if ($('#celular').val() == "") {
        $('#celular').addClass('error-field');
        ret = false;
    } else {
        $('#celular').removeClass('error-field');
    }

    if ($('#email').val() == "") {
        $('#email').addClass('error-field');
        ret = false;
    } else {
        $('#email').removeClass('error-field');
    }

    if ($('#cpf').val() == "") {
        $('#cpf').addClass('error-field');
        ret = false;
    } else {
        $('#cpf').removeClass('error-field');
    }

    if ($('#endereco').val() == "") {
        $('#endereco').addClass('error-field');
        ret = false;
    } else {
        $('#endereco').removeClass('error-field');
    }

    if ($('#bairro').val() == "") {
        $('#bairro').addClass('error-field');
        ret = false;
    } else {
        $('#bairro').removeClass('error-field');
    }

    if ($('#numero').val() == "") {
        $('#numero').addClass('error-field');
        ret = false;
    } else {
        $('#numero').removeClass('error-field');
    }

    if ($('#cidade').val() == "") {
        $('#cidade').addClass('error-field');
        ret = false;
    } else {
        $('#cidade').removeClass('error-field');
    }

    if ($('#estado').val() == "") {
        $('#estado').addClass('error-field');
        ret = false;
    } else {
        $('#estado').removeClass('error-field');
    }

    if ($('#num_pessoas').val() == "") {
        $('#num_pessoas').addClass('error-field');
        ret = false;
    } else {
        $('#num_pessoas').removeClass('error-field');
    }

    if ($('#num_comodos').val() == "") {
        $('#num_comodos').addClass('error-field');
        ret = false;
    } else {
        $('#num_comodos').removeClass('error-field');
    }

    if ($('#area_salaEstar').val() == "") {
        $('#area_salaEstar').addClass('error-field');
        ret = false;
    } else {
        $('#area_salaEstar').removeClass('error-field');
    }

    if ($('#desc_familia').val() == "") {
        $('#desc_familia').addClass('error-field');
        ret = false;
    } else {
        $('#desc_familia').removeClass('error-field');
    }

    return ret;
}

function inscricao() {
    $("html, body").delay(0).animate({ scrollTop: ($('#formulario').offset().top - 100) }, 250);
    fecharMenu();
}

function comofunciona() {
    $("html, body").delay(0).animate({ scrollTop: ($('#comofunciona').offset().top - 100) }, 250);
    fecharMenu();
}

function mariferri() {
    $("html, body").delay(0).animate({ scrollTop: ($('#mariferri').offset().top - 100) }, 250);
    fecharMenu();
}

function removerUpload(img, btn) {
    $('#' + img).val('');
    $('#' + btn + ' .confirm-upload').hide()
}