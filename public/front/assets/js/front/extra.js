error: function (data) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    let errors = data.responseJSON?.errors;
    let errorMsg = '';

    if (errors) {
        if (errors.email) {
            errorMsg = errors.email[0]; // validation error for email
        } else {
            // pick first error message if multiple
            errorMsg = Object.values(errors)[0][0];
        }
    } else if (data.responseJSON?.message) {
        errorMsg = data.responseJSON.message; // fallback message
    } else {
        errorMsg = 'Something went wrong!';
    }

    Toast.fire({ icon: 'error', title: errorMsg });
}
