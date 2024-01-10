document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function(event)  {
        event.preventDefault()
        //alert('Are you sure you want to delete this?')
        if (confirm('Are you sure you want to delete this?')) {
            let action = this.getAttribute('href')
            let form = document.getElementById('form-delete')
            form.setAttribute('action', action)
            form.submit()
        }
    })
})