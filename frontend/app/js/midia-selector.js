$.fn.midiaSelector = function( opts ) {
    var self = this;

    /**
     * Atributos do elemento
     * 
     */
    self.attributes = null;

    /**
     * modal
     * 
     * Modal de midias
     * 
     */
    self.modal = $( '#midiaModal' );

    /**
     * __constructor
     * 
     * Método construtor
     * 
     */
    var __constructor = function() {
        if ( self[0] ) self.attributes = self[0].attributes;
    }
    __constructor();

    /**
     * click
     * 
     * Quando clicado, abre o modal de midia
     * 
     */
    self.click( function(){
        
        // Abre o modal
        self.modal.modal( 'show' );

        // Seta as propriedades
        window.midiaModal = self;
    });
};

$.fn.midiaInput = function( opts ) {
    var self = this;

    /**
     * Atributos do elemento
     * 
     */
    self.attributes = null;

    /**
     * Parametros de configuração
     * 
     */
    self.params = {};

    /**
     * __constructor
     * 
     * Método construtor
     * 
     */
    var __constructor = function() {
        if ( !self[0] ) return;

        // Pega os atributos do elemento
        self.attributes = self[0].attributes;
        for( var i in self.attributes ) {
            var b = self.attributes[i].nodeName;
            if ( b && b.indexOf( 'data' ) !== -1 ) {
                var key = b.replace( 'data-', '' );
                self.params[key] = self.attr( b );
            }
        }

        // Adiciona a label
        self.append( $( '<label>'+self.params['label']+'</label>' ) );
    }
    __constructor();
}

/**
 * Seta o plugin para todos os elementos com a classe
 * midia-selector
 * 
 */
$( document ).ready( function(){
    $( '.midia-seletor' ).midiaSelector();

    // Seta o input de midia
    $( '.midia-input' ).midiaInput();
});

// End of file