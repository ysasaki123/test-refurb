help = {

    /*
     * Secure ajax requests on current page with CSRF token
     */
    secure_ajax : () => {

        $.ajaxSetup({
            
            headers: {

                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
    },

    add : (a, b) => {
        return a + b;
    }

    // define your helpers here...
}