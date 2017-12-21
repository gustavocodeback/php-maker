/**
 * resizeMidiaContent
 *
 * Faz o resize dos containers de midia
 * 
 */
function resizeMidiaContent() {

    // Percorre todos os containers de midia
    $( '.midia-content' ).each( function( index, item ) {
        $( item ).height( $( item ).width() );

        // Pega a imagem
        var img = $( item ).find( 'img' );

        // Seta a referencia
        var ref = img.height();
        ref = ref > img.width() ? 'width' : 'height';

        // Seta o tamanho da imagem
        img[ref]( '100%' );
    });
}

/**
 * Quando o documento carregar
 * 
 */
$( document ).ready( function(){

    // Faz o resize das midias
    resizeMidiaContent();
});
