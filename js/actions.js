$(document).ready(function () {
    $('.edit-button').on('click', function () {
        $('#editmodal').modal('show')

        const $tr = $(this).closest('tr')

        const data = $tr
            .children('td')
            .map(function () {
                return $(this).text()
            })
            .get()

        console.log(data)

        $('#country_id').val(data[0])
        $('#country_description').val(data[1])
    })
})
