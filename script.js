/* loading file json from the server side */
$(document).ready(function() {
    $.getJSON("data.json",function(json){
        /* crating the table */
        $('#table').DataTable( {
            /* using data from json  */
            data: json,
            columns: [
                { data: 'nome' , width : '120px'},
                { data: 'anni' , width : '20px'},
                { data: 'lingue' },
                { data: 'salary' },
                { data: 'phone'},
                { data: 'email' },
                { data: 'weight' },
                { data: 'eyes' },
                { data: 't1' },
                { data: 't2' }
            ],
            /* able or disable options on Table */
            searching: true,
            ordering:  true,
            paging: true,
            processing: true,
            lengthChange: true,
            scrollX: "1200",
            scrollY: false,
            scrollCollapse: false,
            /* display layout throw DOM */
            // l - length changing input control
            // f - filtering input
            // t - The table!
            // i - Table information summary
            // p - pagination control
            // r - processing display element
            "dom": '<"top"Blf>rt<"bottom"ipP>',

            /* insert a bottun */
            buttons: true,
            buttons: [
                {
                    extend: 'collection',
                    text: 'Nascondi colonne',
                    // class: 'btn btn-primary',
                    buttons: [
                        {
                            text: 'phone',
                            action: function ( e, dt, node, config ) {
                                dt.column( -6 ).visible( ! dt.column( -6 ).visible() );
                            }
                        },
                        {
                            text: 'Weight',
                            action: function ( e, dt, node, config ) {
                                dt.column( -4 ).visible( ! dt.column( -4 ).visible() );
                            }
                        },
                        {
                            text: 'Test 2',
                            action: function ( e, dt, node, config ) {
                                dt.column( -3 ).visible( ! dt.column( -3 ).visible() );
                            }
                        }
                    ]
                }
            ],
            /* colReorder */
            colReorder: true,
            /* set column to fix for a large table */
            fixedColumns: {
                leftColumns: 0
            },
            select: true
        })
    })
})
