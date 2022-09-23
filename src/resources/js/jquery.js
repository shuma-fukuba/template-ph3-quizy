$(() => {
  $('.sortable').sortable()
  $('.sortable').disableSelection()
  $('#submit').on('click', () => {
    let listIds = $('.sortable').sortable('toArray')
    $('#list-ids').val(listIds)
    $('form').trigger('submit')
  })
})
