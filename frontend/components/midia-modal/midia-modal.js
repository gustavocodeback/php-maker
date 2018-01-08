var midiaModal = new Vue({
    el: '#midiaModal',
    data: {
        title: 'Midia',
        picked: [],
        library: {},
        perPage: 1,
        totalRows: 1,
        actualPage: 1,
        queryString: ''
    },
    updated: function() {
        resizeMidiaContent();
    },
    mounted: function() {
        var self = this;
        
        // Obtem as midias inicias
        $.get( Site.url+'midia/get', function( data ){
            try {
                data         = JSON.parse( data );
                self.library = data.data;

                // Seta os dados
                self.perPage    = data.per_page;
                self.totalRows  = data.total_itens;
                self.actualPage = data.page;
            } catch ( error ) {
                self.libray = {};
            }
        });
    },
    methods: {

        /**
         * Remove um item da lista
         * 
         */
        removeFromList: function( key ) {
            this.picked.splice( key, 1 );
        },

        /**
         * Adiciona um item na lista
         * 
         */
        addToList: function( midia ) {
            this.picked.push( midia );
        },

        /**
         * Faz a pesquisa de midia
         * 
         */
        queryMidias: function() {
            if( this.queryString.trim().length == 0 ) return;
        },

        loadMore: function() {

        }
    }
});

// End of file