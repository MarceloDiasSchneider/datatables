$(document).ready(function() {
    $.getJSON("dataTables.json",function(json){
        $('#example').DataTable({
            // "dom": '<"top"Blf>rt<"bottom"ipP>',
            "dom": 'BlftiprP',
            data: json,
            columns: [
                { data: 'name' },
                { data: 'position' },
                { data: 'office' },
                { data: 'age' },
                { data: 'start date'},
                { data: 'salary' },
                { data: 'email' }
            ],
            searching: true,
            ordering:  true,
            paging: true,
            processing: true,
            lengthChange: true,
            scrollX: true,
            scrollY: '',
            scrollCollapse: false,
            buttons: true,
            buttons: [
                {
                    extend: 'collection',
                    text: 'Hidden',
                    buttons: [
                        {
                            text: 'Position',
                            action: function ( e, dt, node, config ) {
                                dt.column( -6 ).visible( ! dt.column( -6 ).visible() );
                            }
                        },{
                            text: 'Office',
                            action: function ( e, dt, node, config ) {
                                dt.column( -5 ).visible( ! dt.column( -5 ).visible() );
                            }
                        },{
                            text: 'Age',
                            action: function ( e, dt, node, config ) {
                                dt.column( -4 ).visible( ! dt.column( -4 ).visible() );
                            }
                        },{
                            text: 'Start date',
                            action: function ( e, dt, node, config ) {
                                dt.column( -3 ).visible( ! dt.column( -3 ).visible() );
                            }
                        },{
                            text: 'Salary',
                            action: function ( e, dt, node, config ) {
                                dt.column( -2 ).visible( ! dt.column( -2 ).visible() );
                            }
                        },{
                            text: 'E-mail',
                            action: function ( e, dt, node, config ) {
                                dt.column( -1 ).visible( ! dt.column( -1 ).visible() );
                            }
                        },
                    ]
                },
                'copy',
                'print',
                'csv',
            ],
        } );
    } );
} );