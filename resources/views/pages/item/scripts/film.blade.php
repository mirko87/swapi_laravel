<script type="text/javascript">
    "use strict";
    $(document).ready(function() {
        if ($(window).width() > 767) {
            setTimeout(function () {
                $('.animation').addClass('d-none');
                $('.after-animation').removeClass('d-none');
            }, 25000);
        } else {
            $('.animation').remove();
            $('.after-animation').removeClass('d-none');
        }

        $('.collapse').on('show.bs.collapse', function() {
            let ids = $(this).data('ids');
            let relationName = $(this).data('relation');
            let relationContainer = $(this).find('.items');
            let loader = $(this).find('.loader');
            loader.removeClass('d-none');
            $.ajax({
                url: '{{ route('categories.films.fetchSubresource') }}',
                dataType: 'json',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    ids: ids,
                    relationName: relationName,
                },
            }).done(function(data) {
                $.each(data, function(key, value) {
                    relationContainer.append(value);
                });
                loader.addClass('d-none');
            });
        }).on('hidden.bs.collapse', function() {
            let relationContainer = $(this).find('.items');
            relationContainer.html('');
        });
    });
</script>
