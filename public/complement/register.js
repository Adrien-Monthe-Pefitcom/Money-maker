$('#name_error_message').hide();
$('#phone_error_message').hide();
$('#email_error_message').hide();
$('#password_error_message').hide();

// scan piece
$('#scan_piece1_error_message').hide();
$('#scan_piece2_error_message').hide();
$('#photo_error_message').hide();

var error_phone = true;
var error_email = true;
var error_password = true;

//scan
var error_scan_recto = true;
var error_scan_verso = true;
var error_photo = true;

//cv et casier judiciaire
var error_scan_cv = true;
var error_scan_casier = true;

var  date_naiss;
// var  date_naiss1;

$('#email').focusout(function() {
    
    check_email();
});

$('#tel').focusout(function() {
    
    check_phone();
});

$('#password').focusout(function() {
    
    check_password();
});

// scan 

$('#scan_piece_recto').change(function() {
    check_size_recto();
    
});

$('#scan_piece_verso').change(function() {
    check_size_verso();
    
});

$('#photo').change(function() {
    check_size_photo();
    
});

$('#scan_cv').change(function() {
    check_size_cv();
    
});

$('#scan_casier').change(function() {
    check_size_casier();
    
});

function check_email() {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

    if (pattern.test($('#email').val())) {
        $('#email_error_message').hide();
        error_email = false;
    } else {
        $('#email_error_message').html('Adresse email invalide');
        $('#email_error_message').show();
        error_email = true;
    }
}

function check_phone() {
   
}

function check_password() { 
    var pattern2 = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}$/i);
    var pattern3 = /^[a-zA-Z0-9._].{8}$/i;
    var pattern4 = new RegExp(/^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&-_?"]).*$/);
    if (pattern4.test($('#password').val())) {
        $('#password_error_message').hide();
        error_password = false;
    } else {
        $('#password_error_message').html('Mot de passe invalide (8 caracteres). Au moins une lettre majuscule, un chiffre, un caractere special et des minuscules');
        $('#password_error_message').show();
        error_password = true;
    }
}

// verification age

function getAge(la_date) {
    return Math.floor( (new Date).getTime()-la_date.getTime()) / (365.24*24*3600*1000); //difference en seconde  diviser par le nombre de secondes dans une annee
  }
  
  /*$('#field_duree').hide();
  $('#field_autre').hide();*/
  
  $('#dob').change(function() {
    date_naiss = new Date($('#dob').val());
  
  
    var  new_date = new Date(date_naiss.getFullYear(), date_naiss.getMonth(), date_naiss.getDate());
    date_naiss1 = parseInt(getAge(new_date));
  
  });

  // size fichier

  function check_size_recto() {
    let size =  document.getElementById('scan_piece_recto').files[0].size;
    // alert(t);

    if (size < 1000000) {
        $('#scan_piece_recto_error_message').hide();
        error_scan_recto = false;
    } else {
        $('#scan_piece_recto_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#scan_piece_recto_error_message').show();
        error_scan_recto = true;
    }
  }

    function check_size_verso() {
        let size =  document.getElementById('scan_piece_verso').files[0].size;
        // alert(t);
    
        if (size < 1000000) {
            $('#scan_piece_verso_error_message').hide();
            error_scan_verso = false;
        } else {
            $('#scan_piece_verso_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
            $('#scan_piece_verso_error_message').show();
            error_scan_verso = true;
        }
    }

    function check_size_photo() {
        let size =  document.getElementById('photo').files[0].size;
        // alert(t);
    
        if (size < 1000000) {
            $('#photo_error_message').hide();
            error_photo = false;
        } else {
            $('#photo_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
            $('#photo_error_message').show();
            error_photo = true;
        }
    }

    function check_size_cv() {
        let size =  document.getElementById('scan_cv').files[0].size;
        // alert(t);
    
        if (size < 1000000) {
            $('#scan_cv_error_message').hide();
            error_scan_cv = false;
        } else {
            $('#scan_cv_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
            $('#scan_cv_error_message').show();
            error_scan_cv = true;
        }
    }

    function check_size_casier() {
        let size =  document.getElementById('scan_casier').files[0].size;
        // alert(t);
    
        if (size < 1000000) {
            $('#scan_casier_error_message').hide();
            error_scan_casier = false;
        } else {
            $('#scan_casier_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
            $('#scan_casier_error_message').show();
            error_scan_casier = true;
        }
    }
  



