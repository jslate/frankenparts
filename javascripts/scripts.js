$(document).ready(function() {

  $('[data-part]').on('click', function(event) {
    event.preventDefault();
    link = $(event.target);
    link.hide();
    form = $(event.target).next();
    form.show();

    form.find('a').on('click', function(event) {
      event.preventDefault();
      $.post('../../orders/add_to_order', {
        order_id: 1,
        customer_id: 1,
        part_id: link.data('part'),
        quantity: form.find('input:first').val()
      }, function() {
        form.hide();
        link.text('Update').show();
      });
    });

  });


});