$(document).ready(function () {
    //* Applicatin Edit Page Scripts *//
    const applicationStatusInput = $("#application-status select")
    if (applicationStatusInput.length) {
        $("form.form-edit-add").on('submit', () => confirm(`You are about to change the status of this application to ${applicationStatusInput.val()}! Proceed?`))
    }
    //* End of Applicatin Edit Page Scripts *//
})