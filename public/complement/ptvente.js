// scan pieces


//scan
var error_rccm = true;
var error_contribuable = true;
var error_redevance = true;

$('#rccm').change(function() {
    check_size_rccm();
    
});

$('#contribuable').change(function() {
    check_size_contribuable();
    
});

$('#redevance').change(function() {
    check_size_redevance();
    
});

function check_size_rccm() {
    let size =  document.getElementById('rccm').files[0].size;
     alert(size);

    if (size < 1000000) {
        $('#rccm_error_message').hide();
        error_rccm = false;
    } else {
        $('#rccm_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#rccm_error_message').show();
        error_rccm = true;
    }
  }

  function check_size_contribuable() {
    let size =  document.getElementById('contribuable').files[0].size;
    // alert(t);

    if (size < 1000000) {
        $('#contribuable_error_message').hide();
        error_contribuable = false;
    } else {
        $('#contribuable_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#contribuable_error_message').show();
        error_contribuable = true;
    }
  }

  function check_size_redevance() {
    let size =  document.getElementById('redevance').files[0].size;
    // alert(t);

    if (size < 1000000) {
        $('#redevance_error_message').hide();
        error_redevance = false;
    } else {
        $('#redevance_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#redevance_error_message').show();
        error_redevance = true;
    }
  }