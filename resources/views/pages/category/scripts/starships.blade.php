<script type="text/javascript">
    "use strict";
    let DatatablesManaged = function() {
        let initTable = function () {
            // DataTable
            let table = $('#items_datatable').DataTable({
                dom:
                    "<'row mx-0 py-3 bg-secondary text-white rounded-3'<'col-12 col-md-6 mb-3 mb-md-0'l><'col-12 col-md-6'f>>" +
                    "<'row py-3'<'col-12'<'table-responsive'tr>>>" +
                    "<'row'<'col-12 col-md-5 mb-3 mb-md-0'i><'col-12 col-md-7'p>>",
                destroy: true,
                pagingType: 'full_numbers',
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('categories.starships.fetch') }}',
                    dataType: 'json',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}' },
                },
                deferRender: true,
                columns: [
                    {data: 'id', responsivePriority: 1, orderable: false, searchable: false},
                    {data: 'name', responsivePriority: 3, orderable: true, searchable: true},
                    {data: 'model', orderable: true, searchable: true},
                    {data: 'starship_class', orderable: true, searchable: false},
                    {data: 'manufacturer', orderable: true, searchable: false},
                    {data: 'cost_in_credits', orderable: true, searchable: false},
                    {data: 'length', orderable: true, searchable: false},
                    {data: 'crew', orderable: true, searchable: false},
                    {data: 'passengers', orderable: true, searchable: false},
                    {data: 'max_atmosphering_speed', orderable: true, searchable: false},
                    {data: 'hyperdrive_rating', orderable: true, searchable: false},
                    {data: 'MGLT', orderable: true, searchable: false},
                    {data: 'cargo_capacity', orderable: true, searchable: false},
                    {data: 'consumables', orderable: true, searchable: false},
                    {data: 'view', responsivePriority: 2, orderable: false, searchable: false},
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: '5%',
                    },
                    {
                        targets: 1,
                        width: '10%',
                    },
                    {
                        targets: 2,
                        width: '10%',
                    },
                    {
                        targets: 3,
                        width: '7%',
                    },
                    {
                        targets: 4,
                        width: '7%',
                    },
                    {
                        targets: 5,
                        width: '5%',
                    },
                    {
                        targets: 6,
                        width: '5%',
                    },
                    {
                        targets: 7,
                        width: '7%',
                    },
                    {
                        targets: 8,
                        width: '7%',
                    },
                    {
                        targets: 9,
                        width: '7%',
                    },
                    {
                        targets: 10,
                        width: '6%',
                    },
                    {
                        targets: 11,
                        width: '5%',
                    },
                    {
                        targets: 12,
                        width: '7%',
                    },
                    {
                        targets: 13,
                        width: '7%',
                    },
                    {
                        targets: 14,
                        width: '5%',
                    },
                ],
                order: [[1, 'asc']],
            });
        };

        return {
            //main function to initiate the module
            init: function () {
                initTable();
            }
        };
    }();

    $(document).ready(function() {
        DatatablesManaged.init();
    });
</script>
