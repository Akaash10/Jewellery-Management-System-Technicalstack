
    $(document).ready(function() {
      $('#myCarousel').carousel({
        interval: 2000 // 3000 milliseconds (3 seconds)
      });
    });

    $(document).ready(function () {
        // Handle the "Read More" button click event
        $('[data-toggle="modal"]').click(function () {
            var button = $(this);
            var name = button.data('name');
            var description = button.data('description');
            var duration = button.data('duration');

            // Populate the modal with the data
            $('#modalName').text(name);
            $('#modalDescription').text(description);
            $('#modalDuration').text(duration);
        });
    });