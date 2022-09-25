$(() => {
  $('.sortable').sortable()

  $('#save-order').on('click', () => {
    let listIds = $('.sortable').sortable('toArray')
    $('#list-ids').val(listIds)
  })
//   $('#submit').on('click', () => {

//     $('form').attr('method', 'post')
//   })
})
