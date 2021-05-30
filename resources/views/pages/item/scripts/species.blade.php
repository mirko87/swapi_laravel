<script type="text/javascript">
    "use strict";
    $(document).ready(function() {
        $('.collapse').on('show.bs.collapse', function() {
            let ids = $(this).data('ids');
            let relationName = $(this).data('relation');
            let relationContainer = $(this).find('.items');
            let loader = $(this).find('.loader');
            if(ids.length) {
                loader.removeClass('d-none');
                $.ajax({
                    url: '{{ route('categories.species.fetchSubresource') }}',
                    dataType: 'json',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        ids: ids,
                        relationName: relationName,
                    },
                }).done(function (data) {
                    $.each(data, function (key, value) {
                        relationContainer.append(value);
                    });
                    loader.addClass('d-none');
                });
            } else {
                relationContainer.html('No data...');
            }
        }).on('hidden.bs.collapse', function() {
            let relationContainer = $(this).find('.items');
            relationContainer.html('');
        });
    });
</script>
