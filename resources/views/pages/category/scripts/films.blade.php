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
                    url: '{{ route('categories.films.fetch') }}',
                    dataType: 'json',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}' },
                },
                deferRender: true,
                columns: [
                    {data: 'id', responsivePriority: 1, orderable: false, searchable: false},
                    {data: 'title', responsivePriority: 3, orderable: true, searchable: true},
                    {data: 'episode_id', orderable: true, searchable: false},
                    {data: 'opening_crawl', orderable: false, searchable: false},
                    {data: 'director', orderable: true, searchable: false},
                    {data: 'producer', orderable: true, searchable: false},
                    {data: 'release_date', orderable: true, searchable: false},
                    {data: 'view', responsivePriority: 2, orderable: false, searchable: false},
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: '7%',
                    },
                    {
                        targets: 1,
                        width: '20%',
                    },
                    {
                        targets: 2,
                        width: '10%',
                    },
                    {
                        targets: 3,
                        width: '10%',
                    },
                    {
                        targets: 4,
                        width: '15%',
                    },
                    {
                        targets: 5,
                        width: '15%',
                    },
                    {
                        targets: 6,
                        width: '15%',
                    },
                    {
                        targets: 7,
                        width: '8%',
                    },
                ],
                order: [[6, 'asc']],
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

        $(document).on('click', '.modal-btn', function () {
            let modalEl = $('#modal');
            let modalTitle = $(this).parent().find('input.modal-title').val();
            let modalText = $(this).parent().find('textarea.modal-text').val();
            modalEl.find('.modal-title').html(modalTitle);
            modalEl.find('.modal-body').html(modalText);
        });
    });
</script>
