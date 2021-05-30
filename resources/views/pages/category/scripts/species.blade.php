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
                    url: '{{ route('categories.species.fetch') }}',
                    dataType: 'json',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}' },
                },
                deferRender: true,
                columns: [
                    {data: 'id', responsivePriority: 1, orderable: false, searchable: false},
                    {data: 'name', responsivePriority: 3, orderable: true, searchable: true},
                    {data: 'classification', orderable: true, searchable: true},
                    {data: 'designation', orderable: true, searchable: false},
                    {data: 'average_height', orderable: true, searchable: false},
                    {data: 'average_lifespan', orderable: true, searchable: false},
                    {data: 'eye_colors', orderable: true, searchable: false},
                    {data: 'hair_colors', orderable: true, searchable: false},
                    {data: 'skin_colors', orderable: true, searchable: false},
                    {data: 'language', orderable: true, searchable: false},
                    {data: 'view', responsivePriority: 2, orderable: false, searchable: false},
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: '7%',
                    },
                    {
                        targets: 1,
                        width: '12%',
                    },
                    {
                        targets: 2,
                        width: '12%',
                    },
                    {
                        targets: 3,
                        width: '12%',
                    },
                    {
                        targets: 4,
                        width: '10%',
                    },
                    {
                        targets: 5,
                        width: '10%',
                    },
                    {
                        targets: 6,
                        width: '10%',
                    },
                    {
                        targets: 7,
                        width: '10%',
                    },
                    {
                        targets: 8,
                        width: '10%',
                    },
                    {
                        targets: 9,
                        width: '10%',
                    },
                    {
                        targets: 10,
                        width: '7%',
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
